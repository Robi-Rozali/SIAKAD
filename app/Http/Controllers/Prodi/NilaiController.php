<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Nilai;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
         $request->validate([
            'nim'           => 'required',
            'nama'          => 'required',
            'jurusan'       => 'required',
            'tahun'         => 'required',
            'kode'          => 'required',
            'matakuliah'    => 'required',
            'sks'           => 'required',
            'kehadiran'     => 'required',
            'tugas'         => 'required',
            'uts'           => 'required',
            'uas'           => 'required',
            'grade'         => 'required',
            
        ]);
     }
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
        //
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
        //
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
