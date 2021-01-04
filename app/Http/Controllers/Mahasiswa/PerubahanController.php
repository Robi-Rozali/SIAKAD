<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Perwalian;
use App\Models\Mahasiswa;
use App\Models\Kurikulum;
use App\Models\Nilai;


class PerubahanController extends Controller
{
    public function index(){
        $nim = Auth::guard('mahasiswa')->user()->nim;   
        $jurusan = Auth::guard('mahasiswa')->user()->jurusan;
        $tahun = Auth::guard('mahasiswa')->user()->tahun;

        $perwalian = Perwalian::where('nim','=',$nim)
                    ->where('atas','=','0')
                    ->select(DB::raw('max(semester) as maksks'))->get();

        $nilai = Nilai::where('nim','=',$nim)->get();
        $numero_uno = count($perwalian);

        $kurikulum = [];
        $nguli = [];
        $ngambil = [];
        
        if (count($perwalian) > 0) {
            foreach ($perwalian as $p) {
                if ($p->maksks != 1) {
                        $sksprev = $p->maksks - 1;
                        $ngulang = Nilai::where('nim','=',$nim)
                        ->where('semester','=',$sksprev)
                    ->where('grade','=','D')
                    ->orWhere([['grade','=','E'],['semester','=',$sksprev]])->get();

                    if ($p->maksks > 1 && $p->maksks < 8 ) {
                                            
                        if (count($ngulang) > 0) {
                            foreach ($ngulang as $ng) {
                            if ($ng->grade == 'D' || 'E') {
                                $sksnext = $p->maksks + 1;
                                $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksnext)->get();

                                $nguli = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $ng->semester)
                                ->where('kode', '=', $ng->kode)->get();

                                $sksngam = $p->maksks + 2;
                                    $ngambil = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksngam)->get();
                            }
                        }

                        }else{

                            $sksnext = $p->maksks + 1;
                                    $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksnext)->get();

                            $sksngam = $p->maksks + 2;
                                    $ngambil = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksngam)->get();

                        }
                    }else{
                          if ($p->maksks == 1) {
                                $ngambil = [];
                                $sksnext = $p->maksks;
                                    $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksnext)->get();
                            }else{
                                $sksnext = $p->maksks + 1;
                                    $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksnext)->get();

                            $sksngam = $p->maksks + 2;
                                    $ngambil = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksngam)->get();
                            }
                        }   


                 }  
            
            }
            // dd($p->maksks);
            if ($p->maksks == null) {
                // if($numero_uno == '1'){
                  
                // }
                                $kurikulum = [];
                    $ngambil = [];
            }else{
                $sksnext = $p->maksks + 1;
                  $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $p->maksks)->get();
            }
        }



        $data = [
            'mhs' => Mahasiswa::where('nim', '=', $nim)->first(),
            'krm' => $kurikulum,
            'nguli' => $nguli,
            'ngambil' => $ngambil,
        ];
        return view('mahasiswa.perwalian.perubahan')->with($data);
    }

    public function store(Request $request){

        $kur = Kurikulum::all();
        foreach ($kur as $kuri) {
            $kurikulums[$kuri->kode]['semester']=$kuri->semester;
            $kurikulums[$kuri->kode]['kode']=$kuri->kode;
            $kurikulums[$kuri->kode]['matakuliah']=$kuri->matakuliah;
            $kurikulums[$kuri->kode]['sks']=$kuri->sks;
        }


        foreach($request->id[0] as $del){
            $data = Perwalian::where($kurikulums[$del]);
            $data->delete();
        }

        foreach($request->id[0] as $value){   
        // dd($key);
            // dd($request->id[0]);        
                $data1 =  new Perwalian;
                $data1->nim = Auth::guard('mahasiswa')->user()->nim;
                $data1->nama = Auth::guard('mahasiswa')->user()->nama;
                $data1->jurusan = Auth::guard('mahasiswa')->user()->jurusan;
                $data1->semester = $kurikulums[$value]['semester'];
                $data1->kode = $kurikulums[$value]['kode'];
                $data1->matakuliah = $kurikulums[$value]['matakuliah'];
                $data1->sks = $kurikulums[$value]['sks'];
                $data1->atas = '0';
                $data1->save();
        }

        foreach($request->id[1] as $value){   
        // dd($key);
            // dd($request->id[0]);        
                $data2 =  new Perwalian;
                $data2->nim = Auth::guard('mahasiswa')->user()->nim;
                $data2->nama = Auth::guard('mahasiswa')->user()->nama;
                $data2->jurusan = Auth::guard('mahasiswa')->user()->jurusan;
                $data2->semester = $kurikulums[$value]['semester'];
                $data2->kode = $kurikulums[$value]['kode'];
                $data2->matakuliah = $kurikulums[$value]['matakuliah'];
                $data2->sks = $kurikulums[$value]['sks'];
                $data2->atas = '1';
                $data2->save();
        }

        return back()->with('sukses','Data Jadwal berhasil ditambah');

    }

}
