<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Ruang;
use App\Models\Kelas;

class AdminController extends Controller
{ 
    
    public function index(){
    	$data = [
    		'jumlah' => Mahasiswa::select(DB::raw('COUNT(nim) as total'))->get(),
    		'jumdos' => Dosen::select(DB::raw('COUNT(nidn) as total'))->get(),
    		'jumruang' => Ruang::select(DB::raw('COUNT(id) as total'))->get(),
            'jumkelas' => Kelas::select(DB::raw('COUNT(kelas) as total'))->get(),
    	];
    	// dd($data);
    	
    	return view('admin.index')->with($data);
    } 


}
