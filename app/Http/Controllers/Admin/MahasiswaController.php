<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Mahasiswa;
use App\Models\Prodi;

use App\Exports\MahasiswaExport;
use App\Imports\MahasiswaImport;

use PDF;

use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'mahasiswa' => Mahasiswa::all(),
            
        ];
        return view('Admin.Mahasiswa.mahasiswa')->with($data);
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
        return view('Admin.Mahasiswa.tambahmahasiswa')->with($data);
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
            'nim'           => 'required',
            'nama'          => 'required',
            'jenis_kelamin' => 'required',
            'jurusan'       => 'required',
            'alamat'        => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'tempat'        => 'required',
            'tgllahir'      => 'required',
            'telp'          => 'required',
            'gambar'        => 'required|image|max:1999',
        ]);

        $gambarWithExt      = $request->file('gambar')->getClientOriginalName();
        $gambar             = pathinfo($gambarWithExt, PATHINFO_FILENAME);
        $gambarExt          = $request->file('gambar')->getClientOriginalExtension();
        $gambarStore        = str_replace(' ', '_', $gambar).'_'.time().'.'.$gambarExt;
        $pathgambar         = $request->file('gambar')->storeAs('public/gambar',$gambarStore);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim             = $request->input('nim');
        $mahasiswa->nama            = $request->input('nama');
        $mahasiswa->jenis_kelamin   = $request->input('jenis_kelamin');
        $mahasiswa->jurusan         = $request->input('jurusan');
        $mahasiswa->alamat          = $request->input('alamat');
        $mahasiswa->email           = $request->input('email');
        $mahasiswa->password        = Hash::make(($request->input('password')); 
        $mahasiswa->tempat          = $request->input('tempat');
        $mahasiswa->tgllahir        = $request->input('tgllahir');
        $mahasiswa->telp            = $request->input('telp');
        $mahasiswa->gambar          = $gambarStore;
        $mahasiswa->save();

        return redirect('/mahasiswa')->with('sukses','Data Mahasiswa berhasil ditambah');
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
            'mahasiswa'     => Mahasiswa::find($id),
        ];
        return view('admin.Mahasiswa.detail')->with($data);
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
            'mahasiswa' => Mahasiswa::find($id),
            'prodi' => Prodi::all(),
        ];

        return view('admin.Mahasiswa.edit')->with($data);
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
            'jenis_kelamin' => 'required',
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

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim             = $request->input('nim');
        $mahasiswa->nama            = $request->input('nama');
        $mahasiswa->jenis_kelamin   = $request->input('jenis_kelamin');
        $mahasiswa->jurusan         = $request->input('jurusan');
        $mahasiswa->alamat          = $request->input('alamat');
        $mahasiswa->email           = $request->input('email');
        $mahasiswa->tempat          = $request->input('tempat');
        $mahasiswa->tgllahir        = $request->input('tgllahir');
        $mahasiswa->telp            = $request->input('telp');

        if ($request->input('password') == '') {
            $mahasiswa->password    = $request->input('pass');
        }else{
            $mahasiswa->password    = Hash::make(($request->input('password')); 
        }
        
        
        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar/'.$mahasiswa->gambar);
            $mahasiswa->gambar      = $gambarStore;
        }else{
            $mahasiswa->gambar      = $request->input('gambardb');
        }
        

        $mahasiswa->save();

        return redirect('/mahasiswa')->with('sukses','Data Mahasiswa berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        Storage::delete('public/gambar/'.$mahasiswa->gambar);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('sukses','Data Mahasiswa berhasil dihapus');
    }

    public function importcsv(Request $request){
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        Excel::import(new MahasiswaImport, $request->file('file'));

        return redirect('/mahasiswa')->with('sukses','The file has been import');
    }

    public function exportcsv(){
        return Excel::download(new MahasiswaExport, 'mahasiswa.xls');
        
    }

    public function cetak(){
        // request()->validate([
        //     'nim'           => 'required',
        //     'nama'          => 'required',
        //     'jurusan'       => 'required',
        //     'alamat'        => 'required',
        //     'email'         => 'required|email',
        //     'tempat'        => 'required',
        //     'tgllahir'      => 'required',
        //     'telp'          => 'required',
        // ]);

        // $data = [
        //     'nim'           => $request->nim,
        //     'nama'          => $request->nama,
        //     'jurusan'       => $request->jurusan,
        //     'alamat'        => $request->alamat,
        //     'email'         => $request->email,
        //     'tempat'        => $request->tempat,
        //     'tgllahir'      => $request->tgllahir,
        //     'telp'          => $request->telp,
        // ];

        $mahasiswa = Mahasiswa::all();
        $pdf = PDF::loadview('Admin.Mahasiswa.cetak', ['mahasiswa' => $mahasiswa]);
        return $pdf->stream('Mahasiswa.pdf'); 
    }

}
