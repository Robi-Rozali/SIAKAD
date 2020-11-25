<?php

namespace App\Http\Controllers\Keuangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Pembayarankeu;

class PembayarankeuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pembayarankeu' => Pembayarankeu::all(),
        ];
        return view('Keuangan.Pembayarankeu')->with($data);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keuangan.pembayarankeu');
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
            'tgltransaksi'  => 'required',
            'nim'           => 'required',
            'nama'          => 'required',
            'jurusan'       => 'required',
            'jenisbayar'    => 'required',
            'jumlah'        => 'required',
        ]);


        $pembayarankeu = new Pembayarankeu;
        $pembayarankeu->tgltransaksi           = $request->input('tgltransaksi');
        $pembayarankeu->nim         = $request->input('nim');
        $pembayarankeu->nama     = $request->input('nama');
        $pembayarankeu->jurusan             = $request->input('jurusan');
        $pembayarankeu->jenisbayar             = $request->input('jenisbayar');
        $pembayarankeu->jumlah             = $request->input('jumlah');
        $pembayarankeu->save();

        return redirect('/pembayarankeu')->with('sukses','Data Pembayaran berhasil ditambah');
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
            'pembayarankeu'     => Pembayarankeu::find($id),
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
            'pembayarankeu' => Pembayarankeu::find($id),
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
            'tgltransaksi'  => 'required',
            'nim'           => 'required',
            'nama'          => 'required',
            'jurusan'       => 'required',
            'jenisbayar'    => 'required',
            'jumlah'        => 'required',
        ]);


        $pembayarankeu =  Pembayarankeu::find($id);
        $pembayarankeu->tgltransaksi    = $request->input('tgltransaksi');
        $pembayarankeu->nim             = $request->input('nim');
        $pembayarankeu->nama            = $request->input('nama');
        $pembayarankeu->jurusan         = $request->input('jurusan');
        $pembayarankeu->jenisbayar      = $request->input('jenisbayar');
        $pembayarankeu->jumlah          = $request->input('jumlah');
        $pembayarankeu->save();

        return redirect('/pembayarankeu')->with('sukses','Data Pembayaran berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayarankeu = Pembayarankeu::find($id);
        $pembayarankeu->delete();

        return redirect('/pembayarankeu')->with('sukses','Data Biaya berhasil dihapus');
    }
}
