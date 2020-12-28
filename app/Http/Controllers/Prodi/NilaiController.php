<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Exports\NilaiExport;
use App\Imports\NilaiImport;

use Maatwebsite\Excel\Facades\Excel;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = [
            'nilai' => Nilai::all(),
            'semester' => Nilai::select('semester')->groupBy('semester')->get(),
            // 'tahun' => Mahasiswa::select('tahun')->groupBy('tahun')->get(),
            'prodi' => Prodi::select('prodi')->get(),
        ];
        return view('prodi.nilai.nilai')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'prodi' => Prodi::select('prodi')->get(),
        ];
        return view('Prodi.nilai.tambahnilai')->with($data);
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
            'nim'           => 'required',
            'nama'          => 'required',
            'jurusan'       => 'required',
            'semester'      => 'required',
            'tahun'         => 'required',
            'kode'          => 'required',
            'matakuliah'    => 'required',
            'sks'           => 'required',
            'kehadiran'     => 'required',
            'tugas'         => 'required',
            'uts'           => 'required',
            'uas'           => 'required',
            'jumlah'        => 'required',
            'grade'         => 'required',
            
        ]);
        $nilai = new Nilai;
        $nilai->nim         = $request->input('nim');
        $nilai->nama        = $request->input('nama');
        $nilai->jurusan     = $request->input('jurusan');
        $nilai->semester     = $request->input('semester');
        $nilai->tahun       = $request->input('tahun');
        $nilai->kode        = $request->input('kode');
        $nilai->matakuliah  = $request->input('matakuliah');
        $nilai->sks         = $request->input('sks');
        $nilai->kehadiran   = $request->input('kehadiran');
        $nilai->tugas       = $request->input('tugas');
        $nilai->uts         = $request->input('uts');
        $nilai->uas         = $request->input('uas');
        $nilai->jumlah      = $request->input('jumlah');
        $nilai->grade       = $request->input('grade');
        $nilai->save();

        return redirect('/nilai')->with('sukses','Data Nilai berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'nilai' => Nilai::find($id),
        ];

        return view('prodi.nilai.edit')->with($data);
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
            'nim'           => 'required',
            'nama'          => 'required',
            'jurusan'       => 'required',
            'semester'      => 'required',
            'tahun'         => 'required',
            'kode'          => 'required',
            'matakuliah'    => 'required',
            'sks'           => 'required',
            'kehadiran'     => 'required',
            'tugas'         => 'required',
            'uts'           => 'required',
            'uas'           => 'required',
            'jumlah'        => 'required',
            'grade'         => 'required',
            
        ]);
        $nilai = Nilai::find($id);
        $nilai->nim         = $request->input('nim');
        $nilai->nama        = $request->input('nama');
        $nilai->jurusan     = $request->input('jurusan');
        $nilai->semester    = $request->input('semester');
        $nilai->tahun       = $request->input('tahun');
        $nilai->kode        = $request->input('kode');
        $nilai->matakuliah  = $request->input('matakuliah');
        $nilai->sks         = $request->input('sks');
        $nilai->kehadiran   = $request->input('kehadiran');
        $nilai->tugas       = $request->input('tugas');
        $nilai->uts         = $request->input('uts');
        $nilai->uas         = $request->input('uas');
        $nilai->jumlah      = $request->input('jumlah');
        $nilai->grade       = $request->input('grade');
        $nilai->save();

        return redirect('/nilai')->with('sukses','Data Nilai berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function nilai($semester,$nim){
        $nilai = Nilai::where('semester','=',$semester)
                        ->where('nim', '=', $nim)->get();
        return response()->json([
            'data' => $nilai,
        ]);
    }
    public function carimhs($nim){

        $nilai = Nilai::where('nim', '=', $nim)
                ->select('nama','jurusan','semester')->groupBy('nama','jurusan','semester')->get();

        return response()->json([
            'data' =>$nilai,
        ]);
    }
    // public function tambahmhs($nim){

    //     $mahasiswa = Mahasiswa::where('nim', '=', $nim)
    //             ->select('nama','jurusan','tahun')->get();

    //     return response()->json([
    //         'data' =>$mahasiswa,
    //     ]);
    // }
    public function importcsv(Request $request){
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        Excel::import(new NilaiImport, $request->file('file'));

        return redirect('/nilai')->with('sukses','The file has been import');
    }

    public function exportcsv(){
        return Excel::download(new NilaiExport, 'Nilai.xls');
        
    }

}
