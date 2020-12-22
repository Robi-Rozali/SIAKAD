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


class PerwalianController extends Controller
{
    public function index(){
    	$nim = Auth::guard('mahasiswa')->user()->nim; 	
    	$jurusan = Auth::guard('mahasiswa')->user()->jurusan;
    	$tahun = Auth::guard('mahasiswa')->user()->tahun;
    	$perwalian = Perwalian::where('nim','=',$nim)->get();
    	if (count($perwalian) > 0) {
    		foreach ($perwalian as $p) {
	    		if ($p->semester == '1') {
	    			$kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
	            				->where('tahun', '=', $tahun)
	            				->where('semester', '=', '2')->get();
	    		}
	    	}
    	}else{
    		$kurikulum = Kurikulum::where('jurusan', '=', $jurusan)
	            				->where('tahun', '=', $tahun)
	            				->where('semester', '=', '1')->get();
    	}
    	
    
        $data = [
            'mhs' => Mahasiswa::where('nim', '=', $nim)->first(),
            'krm' => $kurikulum,
        ];
    	return view('mahasiswa.perwalian.perwalian')->with($data);
    }

    public function store(Request $request){
    	$kur = Kurikulum::all();
    	foreach ($kur as $kuri) {
    		$kurikulums[$kuri->id]['semester']=$kuri->semester;
    		$kurikulums[$kuri->id]['kode']=$kuri->kode;
    		$kurikulums[$kuri->id]['matakuliah']=$kuri->matakuliah;
    		$kurikulums[$kuri->id]['sks']=$kuri->sks;
    	}

    	foreach($request->id[0] as $value){
    		// dd($key);
    		// dd($request->id[0]);
    			$data = new Perwalian;
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
