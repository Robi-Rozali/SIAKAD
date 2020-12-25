<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Mahasiswa;
use App\Models\Kurikulum;
use App\Models\Perwalian;

class PerwalianadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'perwalianadm' => Perwalian::all(),
            'semester' => Kurikulum::select('semester')->groupBy('semester')->get(),
        ];
        return view('Prodi.perwalian.perwalianadm')->with($data);
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

    public function mahasiswa($id){
        $mhs = Mahasiswa::where('nim','=',$id)->orWhere('nama','=',$id)->get();

        return response()->json([
            'mhs' => $mhs,
        ]);
    }

    public function matakuliah($prodi,$smtr,$tahun){
        $matkul = Kurikulum::where('jurusan','=',$prodi)
                            ->where('semester','=',$smtr)
                            ->where('tahun','=',$tahun)->get();

        return response()->json([
            'matkul' => $matkul,
        ]);
    }

}
