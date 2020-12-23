<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Mahasiswa;
use App\Models\Prodi;


class profilController extends Controller
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
            'mhs' => Mahasiswa::where('nim', '=', $nim)->first(),
            'datamhs' => Mahasiswa::where('nim', '=', $nim)->get(),
        ];
        return view('Mahasiswa.Profil.profil')->with($data);
    
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
        return view('Mahasiswa.Profil.edit')->with($data);

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $nim = Auth::guard('mahasiswa')->user()->nim;
        $data = [
            'mhs' => Mahasiswa::where('nim', '=', $nim)->first(),
            'datamhs' => Mahasiswa::where('nim', '=', $nim)->get(),
            'prodi' => Prodi::all(),

        ];
        return view('Mahasiswa.Profil.edit')->with($data);
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
            'alamat'        => 'required',
            'email'         => 'required',
            'tempat'        => 'required',
            'tgllahir'      => 'required',
            'telp'          => 'required',
        ]);

        if ($request->hasFIle('gambar')) {
            $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
            $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
            $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
            $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
            $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);
        }

        $mhs = Mahasiswa::find($id);
        $mhs->nim         = $request->input('nim');
        $mhs->nama        = $request->input('nama');
        $mhs->jurusan     = $request->input('jurusan');
        $mhs->alamat      = $request->input('alamat');
        $mhs->email       = $request->input('email');
        $mhs->tempat      = $request->input('tempat');
        $mhs->tgllahir    = $request->input('tgllahir');
        $mhs->telp        = $request->input('telp');

        if ($request->input('password') == '') {
            $mhs->password    = $request->input('pass');
        }else{
            $mhs->password    = Hash::make($request->input('password'));
        }
        
        
        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar/'.$mhs->gambar);
            $mhs->gambar      = $gambarStore;
        }else{
            $mhs->gambar      = $request->input('gambardb');
        }
        

        $mhs->save();

        return redirect('/profil')->with('sukses','Data Mahasiswa berhasil diedit');
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
}
