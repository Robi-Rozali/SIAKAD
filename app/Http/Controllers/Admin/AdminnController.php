<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;

class AdminnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'admin' => Admin::all(),
        ];
        return view('Admin.Admin.adminn')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.tambahadmin');
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
            'nama'       => 'required',
            'tempat'     => 'required',
            'tgllahir'   => 'required',
            'telp'       => 'required',
            'alamat'     => 'required',
            'username'   => 'required',
            'password'   => 'required',
            'gambar'     => 'required|image|max:1999',
        ]);

        $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
        $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
        $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
        $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
        $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);

        $admin = new Admin;
        $admin->nama        = $request->input('nama');
        $admin->tempat      = $request->input('tempat');
        $admin->tgllahir    = $request->input('tgllahir');
        $admin->telp        = $request->input('telp');
        $admin->alamat      = $request->input('alamat');
        $admin->username    = $request->input('username');
        $admin->password    = Hash::make(($request->input('password')); 
        $admin->gambar      = $gambarStore;
        $admin->save();

        return redirect('/adminn')->with('sukses','Data Admin berhasil ditambah');
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
            'admin'     => Admin::find($id),
        ];
        return view('admin.admin.detail')->with($data);
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
            'admin' => Admin::find($id),
        ];

        return view('admin.admin.edit')->with($data);
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
            'nama'       => 'required',
            'tempat'     => 'required',
            'tgllahir'   => 'required',
            'telp'       => 'required',
            'alamat'     => 'required',
            'username'   => 'required',
            'password'   => 'required',
            'gambar'     => 'required|image|max:1999',
        ]);

        if ($request->hasFIle('gambar')) {
            $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
            $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
            $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
            $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
            $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);
        }
        $admin = Admin::find($id);
        $admin->nama        = $request->input('nama');
        $admin->tempat      = $request->input('tempat');
        $admin->tgllahir    = $request->input('tgllahir');
        $admin->telp        = $request->input('telp');
        $admin->alamat      = $request->input('alamat');
        $admin->username    = $request->input('username');
        if ($request->input('password') == '') {
            $admin->password    = $request->input('pass');
        }else{
            $admin->password    = Hash::make(($request->input('password')); 
        } 
        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar/'.$admin->gambar);
            $admin->gambar      = $gambarStore;
        }else{
            $admin->gambar      = $request->input('gambardb');
        }
        
        $admin->save();

        return redirect('/admin')->with('sukses','Data Admin berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        Storage::delete('public/gambar/'.$admin->gambar);
        $admin->delete();

        return redirect('/admin')->with('sukses','Data Admin berhasil dihapus');
    }
}
