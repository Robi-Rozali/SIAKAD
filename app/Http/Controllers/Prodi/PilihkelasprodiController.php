<?php

namespace App\Http\Controllers\Prodi;

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

class PilihkelasprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $maks = Perwalian::where('nim','=',$mahasiswa->nim)
        //                 ->select(DB::raw('max(semester) as maksks'))->first();

        // $perwalian = Perwalian::where('nim','=',$mahasiswa->nim)
        //                 ->where('semester','=',$maks->maksks)
        //                 ->select('kode','semester')->groupBy('kode','semester')->get();
        

        // foreach($perwalian as $p){
        //     $kd[] = $p->kode;
        //     $sms[] = $p->semester;
        // }

        // for ($i=0; $i < count($kd) ; $i++) { 
        //     // dd($kd[$i]);
        //     $jadwal[] = Inputjadwal::where('jadwal.kode','=',$kd[$i])
        //                     ->where('jadwal.semester','=',$sms[$i])
        //                     ->join('kelas','jadwal.kelas','=','kelas.kelas')
        //                     ->leftjoin('pilihkelas',function($nunu){
        //                     $nunu->on('jadwal.kode','=','pilihkelas.kode');
        //                     $nunu->where('pilihkelas.nim','=',Auth::guard('mahasiswa')->user()->nim);
        //                     })
        //                     ->whereNull('pilihkelas.kode')
        //                     ->select('jadwal.id','jadwal.kode','jadwal.matakuliah','jadwal.kelas','jadwal.ruang','jadwal.hari','jadwal.jam','jadwal.namadosen','kelas.kuota')->get();

        //     $isi[] = pilihkelas::where('pilihkelas.kode','=',$kd[$i])
        //          ->join('kelas','pilihkelas.kelas','=','kelas.kelas')
        //         ->select('kelas.kelas',DB::raw('count(pilihkelas.kode) as eusi'))
        //         ->groupBy('kelas.kelas')->get();

        // }

        // // dd($isi);

        // $data = [
        //     'krs' => Perwalian::where('nim', '=', $mahasiswa->nim)->first(),
        //     'jadwal' => $jadwal,  
        //     'isi' => $isi,  
        // ];
        // return view('mahasiswa.perwalian.pilihkelas')->with($data);
        return view('prodi.pilihkelas.pilihkelasprodi');
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
       $jadwal = Inputjadwal::all();
        foreach ($jadwal as $jdwl) {            
            $jadwals[$jdwl->id]['id']=$jdwl->id;
            $jadwals[$jdwl->id]['kode']=$jdwl->kode;
            $jadwals[$jdwl->id]['matakuliah']=$jdwl->matakuliah;
            $jadwals[$jdwl->id]['semester']=$jdwl->semester;
            $jadwals[$jdwl->id]['kelas']=$jdwl->kelas;
            $jadwals[$jdwl->id]['ruang']=$jdwl->ruang;
            $jadwals[$jdwl->id]['hari']=$jdwl->hari;
            $jadwals[$jdwl->id]['jam']=$jdwl->jam;
            $jadwals[$jdwl->id]['tahun']=$jdwl->tahun;
        }
        // dd($jdwl);

        foreach($request->id[0] as $key => $value){
            // dd($request->id);
                $data = new Pilihkelas;
                $data->nim = $request->nim;
                $data->nama = $request->nama;
                $data->jurusan = $request->jurusan;
                $data->tahun = $jadwals[$value]['tahun'];
                $data->kode = $jadwals[$value]['kode'];
                $data->matakuliah = $jadwals[$value]['matakuliah'];
                $data->semester = $jadwals[$value]['semester'];
                $data->kelas = $jadwals[$value]['kelas'];
                $data->ruang = $jadwals[$value]['ruang'];
                $data->hari = $jadwals[$value]['hari'];
                $data->jam = $jadwals[$value]['jam'];
                $data->id_jadwal = $jadwals[$value]['id'];
                $data->save();
        }

        return back()->with('sukses','Data Jadwal berhasil ditambah');
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
     * @return \Illuminate\Http\Responseo
     */
    public function destroy($id)
    {
        //
    }
    public function pilihkelasprodi($nim){

        $mahasiswa = Mahasiswa::where('mahasiswa.nim', '=', $nim)
                    ->join('perwalian','mahasiswa.nim','=','perwalian.nim')
                    ->select('mahasiswa.nim','mahasiswa.nama','mahasiswa.jurusan','mahasiswa.tahun',DB::raw('max(perwalian.semester) as smt'))->groupBy('mahasiswa.nim','mahasiswa.nama','mahasiswa.jurusan','mahasiswa.tahun')->first();    

        $maks = Perwalian::where('nim','=',$mahasiswa->nim)
                        ->select(DB::raw('max(semester) as maksks'))->first();

        $perwalian = Perwalian::where('nim','=',$mahasiswa->nim)
                        ->where('semester','=',$maks->maksks)
                        ->select('kode','semester')->groupBy('kode','semester')->get();
        

        foreach($perwalian as $p){
            $kd[] = $p->kode;
            $sms[] = $p->semester;
        }

        for ($i=0; $i < count($kd) ; $i++) { 
             $anjay =  $mahasiswa->nim;
            $jadwal[] = Inputjadwal::where('jadwal.kode','=',$kd[$i])
                            ->where('jadwal.semester','=',$sms[$i])
                            ->join('kelas','jadwal.kelas','=','kelas.kelas')
                            ->leftjoin('pilihkelas',function($nunu){
                            $nunu->on('jadwal.kode','=','pilihkelas.kode');
                            // $nunu->where('pilihkelas.nim','=',$anjay);
                            })
                            ->whereNull('pilihkelas.kode')
                            ->select('jadwal.semester','jadwal.id','jadwal.kode','jadwal.matakuliah','jadwal.kelas','jadwal.ruang','jadwal.hari','jadwal.jam','jadwal.namadosen','kelas.kuota')
                            ->groupBy('jadwal.semester','jadwal.id','jadwal.kode','jadwal.matakuliah','jadwal.kelas','jadwal.ruang','jadwal.hari','jadwal.jam','jadwal.namadosen','kelas.kuota')->get();

            $isi[] = pilihkelas::where('pilihkelas.kode','=',$kd[$i])
                 ->join('kelas','pilihkelas.kelas','=','kelas.kelas')
                ->select('pilihkelas.id_jadwal','pilihkelas.kode','kelas.kelas',DB::raw('count(pilihkelas.kode) as eusi'))
                ->groupBy('pilihkelas.id_jadwal','pilihkelas.kode','kelas.kelas')->get();

        }

$kela=[]; 
$jangar=[]; 
        for ($i = 0; $i < count($jadwal) ; $i++){
                // $isian[] = $isi[$i][$j];
                // break;
            foreach ($isi[$i] as $key) {
                    $kela[] = $key;
            }

            foreach ($jadwal[$i] as $k => $value) {
                $jangar[] = $value;
            }
        }


        return response()->json([
            'data' =>$mahasiswa,
            // 'krs' => Perwalian::where('nim', '=', $mahasiswa->nim)->first(),
            'jadwal' => $jangar,
            // 'isi' => $kela,
        ]);
    }
}
