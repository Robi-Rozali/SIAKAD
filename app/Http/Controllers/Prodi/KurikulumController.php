<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Kurikulum;
use App\Models\Prodi;

use App\Exports\KurikulumExport;
use App\Imports\KurikulumImport;

use Maatwebsite\Excel\Facades\Excel;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kurikulum' => Kurikulum::all(),
        ];
        return view('Prodi.kurikulum.kurikulum')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];
        return view('Prodi.kurikulum.tambahkurikulum')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'          => 'required',
            'matakuliah'    => 'required',
            'sks'           => 'required',
            'semester'      => 'required',
            'jurusan'       => 'required',
            'Tahun'         => 'required',
        ]);


        $kurikulum = new Kurikulum;
        $kurikulum->kode        = $request->input('kode');
        $kurikulum->matakuliah  = $request->input('matakuliah');
        $kurikulum->sks         = $request->input('sks');
        $kurikulum->semester    = $request->input('semester');
        $kurikulum->jurusan     = $request->input('jurusan');
        $kurikulum->Tahun       = $request->input('Tahun');
        $kurikulum->save();

        return redirect('/kurikulum')->with('sukses','Data Kurikulum berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'kurikulum'     => Kurikulum::find($id),
        ];
        return view('Prodi.kurikulum.detail')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'kurikulum' => Kurikulum::find($id),
            'prodi' => Prodi::all(),
        ];

        return view('Prodi.kurikulum.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode'          => 'required',
            'matakuliah'    => 'required',
            'sks'           => 'required',
            'semester'      => 'required',
            'jurusan'       => 'required',
            'Tahun'         => 'required',
        ]);


        $kurikulum = Kurikulum::find($id);
        $kurikulum->kode        = $request->input('kode');
        $kurikulum->matakuliah  = $request->input('matakuliah');
        $kurikulum->sks         = $request->input('sks');
        $kurikulum->semester    = $request->input('semester');
        $kurikulum->jurusan     = $request->input('jurusan');
        $kurikulum->Tahun       = $request->input('Tahun');
        
        $kurikulum->save();


        return redirect('/kurikulum')->with('sukses','Data Kurikulim berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kurikulum = Kurikulum::find($id);
        $kurikulum->delete();

        return redirect('/kurikulum')->with('sukses','Data Kurikulum berhasil dihapus');
    }

    public function importcsv(Request $request){
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        Excel::import(new KurikulumImport, $request->file('file'));

        return redirect('/kurikulum')->with('sukses','The file has been import');
    }

    public function exportcsv(){
        return Excel::download(new KurikulumExport, 'Kurikulum.xls');
        
    }
}
