<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Keuangan;

class KeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'keuangan' => Keuangan::all(),
        ];
        return view('Admin.keuangan.keu')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.keuangan.tambahkeu');
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
            'nama'             => 'required',
            'username'         => 'required',
            'password'         => 'required',
        ]);

        $keuangan = new Keuangan;
        $keuangan->nama         = $request->input('nama');
        $keuangan->username     = $request->input('username');
        $keuangan->password     = Hash::make($request->input('password'));
        $keuangan->save();

        return redirect('/keu')->with('sukses','Data Kelas berhasil ditambah');
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
            'keuangan' => Keuangan::find($id),
        ];

        return view('admin.keuangan.edit')->with($data);
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
            'nama'             => 'required',
            'username'         => 'required',
        ]);


        $keuangan = Keuangan::find($id);
        $keuangan->nama       = $request->input('nama');
        $keuangan->username       = $request->input('username');
        if ($request->input('password') == '') {
            $keuangan->password    = $request->input('pass');
        }else{
            $keuangan->password    = Hash::make($request->input('password')); 
        }
        $keuangan->save();

        return redirect('/keu')->with('sukses','Data User berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();

        return redirect('/keu')->with('sukses','Data Keuangan berhasil dihapus');
    }
}
