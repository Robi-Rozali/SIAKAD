<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use App\Models\Prodi;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];
        return view('Admin.prodi.prodii')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prodi.tambahprodi');
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
            'prodi'         => 'required',
            'ketua'         => 'required',
            'nidn'          => 'required',
            'gambar'        => 'required|image|max:1999',
            'username'      => 'required',
            'password'      => 'required',
        ]);

        $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
        $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
        $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
        $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
        $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);

        $prodi = new Prodi;
        $prodi->prodi       = $request->input('prodi');
        $prodi->ketua       = $request->input('ketua');
        $prodi->nidn        = $request->input('nidn');
        $prodi->gambar      = $gambarStore;
        $prodi->username        = $request->input('username');
        $prodi->password    = Hash::make($request->input('password'));       
        $prodi->save();

        return redirect('/prodii')->with('sukses','Data Prodi berhasil ditambah');

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
            'prodi'     => Prodi::find($id),
        ];
        return view('Admin.prodi.detail')->with($data);
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
            'prodi' => Prodi::find($id),
        ];

        return view('admin.prodi.edit')->with($data);
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
            'prodi'         => 'required',
            'ketua'         => 'required',
            'nidn'          => 'required',
            'username'      => 'required',
        ]);

        if ($request->hasFIle('gambar')) {
            $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
            $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
            $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
            $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
            $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);
        }

        $prodi = Prodi::find($id);
        $prodi->prodi       = $request->input('prodi');
        $prodi->ketua       = $request->input('ketua');
        $prodi->nidn        = $request->input('nidn');

        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar/'.$prodi->gambar);
            $prodi->gambar      = $gambarStore;
        }else{
            $prodi->gambar      = $request->input('gambardb');
        }

        $prodi->username      = $request->input('username');

        if ($request->input('password') == '') {
            $prodi->password    = $request->input('pass');
        }else{
            $prodi->password    = Hash::make($request->input('password')); 
        }
    
        $prodi->save();

        return redirect('/prodii')->with('sukses','Data Prodi berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        Storage::delete('public/gambar/'.$prodi->gambar);
        $prodi->delete();

        return redirect('/prodii')->with('sukses','Data Prodi berhasil dihapus');
    }
}
