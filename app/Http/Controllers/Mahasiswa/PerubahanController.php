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


// $ubah = Perwalian::where('nim','=',$nim)
                // ->select(DB::raw('max(semester) as nilaisks'))->first();
        $perwalian = Perwalian::where('nim','=',$nim)
                    // ->where('semester','=',$ubah->nilaisks)
                    ->select(DB::raw('max(semester) as maksks'))->get();

        $kurikulum = [];
        $nguli = [];
        $ngambil = [];
        
        if (count($perwalian) > 0) {
            foreach ($perwalian as $p) {
                $sksprev = $p->maksks - 2;
                $ngulang = Nilai::where('nim','=',$nim)
                        ->where('semester','=',$sksprev)
                        ->where('grade','=','D')
                        ->orWhere([['grade','=','E'],['semester','=',$sksprev]])
                        ->get();
                    
                                          
                        if (count($ngulang) > 0) {
                            foreach ($ngulang as $ng) {
                            if ($ng->grade == 'D' || 'E') {
                                
                                $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $p->maksks)->get();

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
                           
                                    $kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $p->maksks)->get();

                                $sksngam = $p->maksks + 2;
                                    $ngambil = Kurikulum::where('jurusan', '=', $jurusan)
                                ->where('tahun', '=', $tahun)
                                ->where('semester', '=', $sksngam)->get();

                        }
                
            }
        }else{
             $kurikulum = [];
        $nguli = [];
        $ngambil = [];
            
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

        foreach($request->id[0] as $value){
            // dd($key);
            // dd($request->id[0]);
                $data = Perwalian::where($kurikulums[$value]);
                $data->nim = Auth::guard('mahasiswa')->user()->nim;
                $data->nama = Auth::guard('mahasiswa')->user()->nama;
                $data->jurusan = Auth::guard('mahasiswa')->user()->jurusan;
                $data->semester = $kurikulums[$value]['semester'];
                $data->kode = $kurikulums[$value]['kode'];
                $data->matakuliah = $kurikulums[$value]['matakuliah'];
                $data->sks = $kurikulums[$value]['sks'];
                $data->save();
        }

        return back()->with('sukses','Data Jadwal berhasil ditambah');
    }

}
