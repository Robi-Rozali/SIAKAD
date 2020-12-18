<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'kelas' => Kelas::all(),
        ];
        return view('Admin.kelas.kelas')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kelas.tambahkelas');
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
            'kelas'         => 'required',
            'kuota'         => 'required',
        ]);

        $kelas = new Kelas;
        $kelas->kelas       = $request->input('kelas');
        $kelas->kuota       = $request->input('kuota');
        $kelas->save();

        return redirect('/kelas')->with('sukses','Data Kelas berhasil ditambah');
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
            'kelas' => Kelas::all(),
        ];
        return view('Admin.kelas.detail')->with($data);
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
            'kelas' => Kelas::find($id),
        ];

        return view('admin.kelas.edit')->with($data);
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
            'kelas'          => 'required',
            'kuota'     => 'required',
        ]);


        $kelas = Kelas::find($id);
        $kelas->kelas       = $request->input('kelas');
        $kelas->kuota       = $request->input('kuota');
        $kelas->save();

        return redirect('/kelas')->with('sukses','Data kelas berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect('/kelas')->with('sukses','Data Kelas berhasil dihapus');
    }
}
