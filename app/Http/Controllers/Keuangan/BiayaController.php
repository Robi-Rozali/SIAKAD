<?php

namespace App\Http\Controllers\Keuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Biaya;
use App\Models\Prodi;
use App\Models\Kurikulum;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'biaya' => Biaya::all(),
        ];
        return view('Keuangan.biaya')->with($data);
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
            'tahun' => Kurikulum::all(),
        ];
        return view('keuangan.inputbiaya')->with($data);
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
            'tahun'         => 'required',
            'jurusan'       => 'required',
            'pendaftaran'   => 'required',
            'upp'           => 'required',
            'usb'           => 'required',
            'sks'           => 'required',
            'ppspp'         => 'required',
            'almamater'     => 'required',
        ]);


        $biaya = new Biaya;
        $biaya->tahun           = $request->input('tahun');
        $biaya->jurusan         = $request->input('jurusan');
        $biaya->pendaftaran     = $request->input('pendaftaran');
        $biaya->upp             = $request->input('upp');
        $biaya->usb             = $request->input('usb');
        $biaya->sks             = $request->input('sks');
        $biaya->ppspp           = $request->input('ppspp');
        $biaya->almamater       = $request->input('almamater');
        $biaya->save();

        return redirect('/biaya')->with('sukses','Data Biaya berhasil ditambah');
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
            'biaya'     => Biaya::find($id),
        ];
        return view('keuangan.detail')->with($data);
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
            'biaya' => Biaya::find($id),
            'prodi' => Prodi::all(),
            'tahun' => Kurikulum::all(),
        ];

        return view('keuangan.edit')->with($data);
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
            'tahun'         => 'required',
            'jurusan'       => 'required',
            'pendaftaran'   => 'required',
            'upp'           => 'required',
            'usb'           => 'required',
            'sks'           => 'required',
            'ppspp'         => 'required',
            'almamater'     => 'required',
        ]);


        $biaya = Biaya::find($id);
        $biaya->tahun           = $request->input('tahun');
        $biaya->jurusan         = $request->input('jurusan');
        $biaya->pendaftaran     = $request->input('pendaftaran');
        $biaya->upp             = $request->input('upp');
        $biaya->usb             = $request->input('usb');
        $biaya->sks             = $request->input('sks');
        $biaya->ppspp           = $request->input('ppspp');
        $biaya->almamater       = $request->input('almamater');
        $biaya->save();

        return redirect('/biaya')->with('sukses','Data Biaya berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biaya = Biaya::find($id);
        $biaya->delete();

        return redirect('/biaya')->with('sukses','Data Biaya berhasil dihapus');
    }
}
