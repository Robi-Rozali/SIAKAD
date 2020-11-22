<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'dosen' => Dosen::all(),
        ];
        return view('Admin.dosen.dosen')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dosen.tambahdosen');
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
            'nidn'          => 'required',
            'namadosen'     => 'required',
            'keilmuan'      => 'required',
            'tempat'        => 'required',
            'tgllahir'      => 'required',
            'telp'          => 'required',
            'password'      => 'required',
            'alamat'        => 'required',
            'gambar'        => 'required|image|max:1999',
        ]);

        $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
        $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
        $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
        $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
        $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);

        $dosen = new Dosen;
        $dosen->nidn        = $request->input('nidn');
        $dosen->namadosen   = $request->input('namadosen');
        $dosen->keilmuan    = $request->input('keilmuan');
        $dosen->tempat      = $request->input('tempat');
        $dosen->tgllahir    = $request->input('tgllahir');
        $dosen->telp        = $request->input('telp');
        $dosen->password    = md5($request->input('password'));
        $dosen->alamat      = $request->input('alamat');
        $dosen->gambar      = $gambarStore;
        $dosen->save();

        return redirect('/dosen')->with('sukses','Data Dosen berhasil ditambah');

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
            'dosen'     => Dosen::find($id),
        ];
        return view('admin.dosen.detail')->with($data);
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
            'dosen' => Dosen::find($id),
        ];

        return view('admin.dosen.edit')->with($data);
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
            'nidn'          => 'required',
            'namadosen'     => 'required',
            'keilmuan'      => 'required',
            'tempat'        => 'required',
            'tgllahir'      => 'required',
            'telp'          => 'required',
            'alamat'        => 'required',
        ]);

        if ($request->hasFIle('gambar')) {
            $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
            $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
            $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
            $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
            $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);
        }

        $dosen = Dosen::find($id);
        $dosen->nidn        = $request->input('nidn');
        $dosen->namadosen   = $request->input('namadosen');
        $dosen->keilmuan    = $request->input('keilmuan');
        $dosen->tempat      = $request->input('tempat');
        $dosen->tgllahir    = $request->input('tgllahir');
        $dosen->telp        = $request->input('telp');

        if ($request->input('password') == '') {
            $dosen->password    = $request->input('pass');
        }else{
            $dosen->password    = md5($request->input('password'));
        }
        

        $dosen->alamat      = $request->input('alamat');
        
        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar/'.$dosen->gambar);
            $dosen->gambar      = $gambarStore;
        }else{
            $dosen->gambar      = $request->input('gambardb');
        }
        

        $dosen->save();

        return redirect('/dosen')->with('sukses','Data Dosen berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        Storage::delete('public/gambar/'.$dosen->gambar);
        $dosen->delete();

        return redirect('/dosen')->with('sukses','Data Dosen berhasil dihapus');
    }
}
