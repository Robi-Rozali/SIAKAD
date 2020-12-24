<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use PDF;

use App\Models\Nilai;



class NilaisementaraController extends Controller
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
            'nilai' => Nilai::where('nim', '=', $nim)->first(),
            'nilaisemua' => Nilai::where('nim', '=', $nim)->get(),
        ];
        return view('mahasiswa.perwalian.nilaisementara')->with($data);
    
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
            'kode'          => 'required',
            'matakuliah'    => 'required',
            'sks'           => 'required',
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

    public function cetaknilai(Request $request){
        $nim = Auth::guard('mahasiswa')->user()->nim;
        $data = [
           'nilai' => Nilai::where('nim', '=', $nim)->first(),
            'nilaisemua' => Nilai::where('nim', '=', $nim)->get(),
        ];
        $pdf = PDF::loadview('mahasiswa.perwalian.cetaknilai',$data);
        return $pdf->stream('Nilaisementara.pdf'); 
}
}
