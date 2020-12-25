<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Pembayarankeu;
use App\Models\Biaya;

class PembayaranController extends Controller
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
            'semester' => Pembayarankeu::where('nim', '=', $nim)
                                    ->select('semester')
                                    ->groupBy('semester')->get(),
        ];
        return view('Mahasiswa.pembayaran.pembayaran')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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

    public function bayar($semester,$nim){
    if ($semester == '1') {
        $bayar = Pembayarankeu::where('pembayaran.semester','=',$semester)
            ->where('pembayaran.nim', '=', $nim)
            ->join('biaya','pembayaran.jurusan','=','biaya.jurusan')
            ->join('perwalian','pembayaran.nim','=','perwalian.nim')
            ->where('biaya.semester','=',$semester)
            ->where('perwalian.semester','=',$semester)
            ->select('pembayaran.jenisbayar','pembayaran.jumlah','biaya.semester','biaya.pendaftaran','biaya.upp','biaya.usb','biaya.sks','biaya.ppspp','biaya.almamater',DB::raw('SUM(perwalian.sks) as jumlahsks'))
            ->groupBy('pembayaran.jenisbayar','pembayaran.jumlah','biaya.semester','biaya.pendaftaran','biaya.upp','biaya.usb','biaya.sks','biaya.ppspp','biaya.almamater')
            ->get();
    }else{
        $bayar = Pembayarankeu::where('pembayaran.semester','=',$semester)
            ->where('pembayaran.nim', '=', $nim)
            ->join('biaya','pembayaran.jurusan','=','biaya.jurusan')
            ->join('perwalian','pembayaran.nim','=','perwalian.nim')
            ->where('biaya.semester','=','1')
            ->where('perwalian.semester','=',$semester)
            ->select('pembayaran.jenisbayar','pembayaran.jumlah','biaya.semester','biaya.upp','biaya.sks',DB::raw('SUM(perwalian.sks) as jumlahsks'))
            ->groupBy('pembayaran.jenisbayar','pembayaran.jumlah','biaya.semester','biaya.upp','biaya.sks')
            ->get();
    }

           // dd($bayar);          
        return response()->json([
            'data' => $bayar,
        ]);
    }



}
