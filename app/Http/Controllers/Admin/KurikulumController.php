<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Kurikulum;

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
        return view('Admin.kurikulum.kurikulum')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kurikulum.tambahkurikulum');
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
            'tahun'         => 'required',
        ]);


        $kurikulum = new Kurikulum;
        $kurikulum->kode        = $request->input('kode');
        $kurikulum->matakuliah  = $request->input('matakuliah');
        $kurikulum->sks         = $request->input('sks');
        $kurikulum->semester    = $request->input('semester');
        $kurikulum->jurusan     = $request->input('jurusan');
        $kurikulum->tahun       = $request->input('tahun');
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
        return view('admin.kurikulum.detail')->with($data);
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
        ];

        return view('admin.kurikulum.edit')->with($data);
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
            'tahun'         => 'required',
        ]);


        $kurikulum = Kurikulum::find($id);
        $kurikulum->kode        = $request->input('kode');
        $kurikulum->matakuliah  = $request->input('matakuliah');
        $kurikulum->sks         = $request->input('sks');
        $kurikulum->semester    = $request->input('semester');
        $kurikulum->jurusan     = $request->input('jurusan');
        $kurikulum->tahun       = $request->input('tahun');
        
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
}
