<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Ruang;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'ruang' => Ruang::all(),
        ];
        return view('Admin.ruang.ruang')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ruang.tambahruang');
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
            'nama'          => 'required',
            'kapasitas'     => 'required',
            'lantai'        => 'required',
        ]);


        $ruang = new Ruang;
        $ruang->nama        = $request->input('nama');
        $ruang->kapasitas   = $request->input('kapasitas');
        $ruang->lantai      = $request->input('lantai');
        $ruang->save();

        return redirect('/ruang')->with('sukses','Data Ruangan berhasil ditambah');
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
            'ruang'     => Ruang::find($id),
        ];
        return view('admin.ruang.detail')->with($data);
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
            'ruang' => Ruang::find($id),
        ];

        return view('admin.Ruang.edit')->with($data);
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
            'nama'          => 'required',
            'kapasitas'     => 'required',
            'lantai'        => 'required',
        ]);


        $ruang = Ruang::find($id);
        $ruang->nama        = $request->input('nama');
        $ruang->kapasitas   = $request->input('kapasitas');
        $ruang->lantai      = $request->input('lantai');
        $ruang->save();


        return redirect('/ruang')->with('sukses','Data Ruang berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang = Ruang::find($id);
        $ruang->delete();

        return redirect('/ruang')->with('sukses','Data Ruangan berhasil dihapus');
    }
}
