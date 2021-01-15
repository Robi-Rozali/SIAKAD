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

        $perwalian = Perwalian::where('nim','=',$nim)
                        ->where('semester','=',$maks->maksks)
                        ->select('kode','semester')->groupBy('kode','semester')->get();
        

        foreach($perwalian as $p){
            $kd[] = $p->kode;
            $sms[] = $p->semester;
        }

        for ($i=0; $i < count($kd) ; $i++) { 
            // dd($kd[$i]);
            $jadwal[] = Inputjadwal::where('jadwal.kode','=',$kd[$i])
                            ->where('jadwal.semester','=',$sms[$i])
                            ->join('kelas','jadwal.kelas','=','kelas.kelas')
                            ->leftjoin('pilihkelas',function($nunu){
                            $nunu->on('jadwal.kode','=','pilihkelas.kode');
                            $nunu->where('pilihkelas.nim','=',Auth::guard('mahasiswa')->user()->nim);
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
        for ($i = 0; $i < count($jadwal) ; $i++){
                // $isian[] = $isi[$i][$j];
                // break;
            foreach ($isi[$i] as $key) {
                    $kela[] = $key;
            }

            // foreach ($jadwal[$i] as $k => $value) {
            //     $jangar[] = $value;
            // }
        }


// dd($jangar);
        // dd($kela);
        // dd($isi);
        // foreach ($isi as $key => $value) {
        //     dd($value);
        // }
        // $arr = array_column($isian, 'eusi');
        // dd($arr);

        $data = [
            'krs' => Perwalian::where('nim', '=', $nim)->first(),
            'jadwal' => $jadwal,
            'isi' => $kela,
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
                $data->nim = Auth::guard('mahasiswa')->user()->nim;
                $data->nama = Auth::guard('mahasiswa')->user()->nama;
                $data->jurusan = Auth::guard('mahasiswa')->user()->jurusan;
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
