<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use PDF;

use App\Models\Perwalian;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nim = Auth::guard('mahasiswa')->user()->nim;
        $data = [
            'krs' => Perwalian::where('nim', '=', $nim)->first(),
            'semester' => Perwalian::where('nim', '=', $nim)
                        ->select('semester')->groupBy('semester')->get(),  
        ];
        return view('mahasiswa.perwalian.krs')->with($data);
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
        //
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

    public function krs($semester,$nim){
        $krs = Perwalian::where('semester','=',$semester)
                        ->where('nim', '=', $nim)
                        ->select('kode','matakuliah','sks')->groupBy('kode','matakuliah','sks')->get();
        return response()->json([
            'data' => $krs,
        ]); 
    }

    public function cetakkrs(Request $request){
        $nim = Auth::guard('mahasiswa')->user()->nim;
        $semester = $request->input('oioi');
        $data = [
           'krs' => Perwalian::where('nim', '=', $nim)
                        ->where('semester','=',$semester)->first(),
           'smt' => Perwalian::where('nim', '=', $nim)
                        ->where('semester', '=', $semester)
                        ->select('semester','kode','matakuliah','sks')->groupBy('semester','kode','matakuliah','sks')->get(),
        ];
        $pdf = PDF::loadview('mahasiswa.perwalian.cetakkrs',$data);
         return $pdf->stream('Kartu_Rencana_Studi.pdf'); 
    }
}
