<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Kelas;
use App\Models\Inputjadwal;
use App\Models\Pilihkelas;
use App\Models\Perwalian;
use App\Models\Mahasiswa;

class PilihkelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nim = Auth::guard('mahasiswa')->user()->nim;
        $jurusan = Auth::guard('mahasiswa')->user()->jurusan;
        $tahun = Auth::guard('mahasiswa')->user()->tahun;

        $maks = Perwalian::where('nim','=',$nim)
                        ->select(DB::raw('max(semester) as maksks'))->first();

        // dd($maks->maksks);

        $perwalian = Perwalian::where('nim','=',$nim)
                        ->where('semester','=',$maks->maksks)
                        ->select('kode','semester')->groupBy('kode','semester')->get();
        
        // dd($perwalian);
        // $n = 0;
        foreach($perwalian as $p){
            $kd[] = $p->kode;
            $sms[] = $p->semester;
        }

        // $jadwal = Inputjadwal::where('kode','=',$kd)
        //                     ->where('semester','=',$sms)
        //                     ->get();
        // dd($jadwal);
        $n = 0;
        foreach($kd as $a){
            $jadwal = Inputjadwal::where('kode','=',$kd[$n])
                            ->where('semester','=',$sms[$n])
                            ->get();
        }
        // dd($jadwal);
        // for ($i=0; $i < count($jadwal) ; $i++) { 
        //     dd($jadwal[$i][$i]['kode']);
        // }
          
        // dd(count($perwalian));
         
        // for ($i=0; $i < count($kd) ; $i++) { 
           
        // }
        
        // dd($jadwal);
        

        // for ($i=0; $i < count($kd) ; $i++) { 
        //     $jadwal = Inputjadwal::where('kode','=',$kd[$i])
        //                 ->where('semester','=',$sms[$i])
        //                 ->get();

        // }



        $data = [
            'krs' => Perwalian::where('nim', '=', $nim)->first(),
            'jadwal' => $jadwal,  
        ];
        return view('mahasiswa.perwalian.pilihkelas')->with($data);
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
}
