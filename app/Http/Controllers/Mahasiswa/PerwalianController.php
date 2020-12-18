<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\Perwalian;
use App\Models\Mahasiswa;
use App\Models\Kurikulum;


class PerwalianController extends Controller
{
    public function index(){
    	return view('mahasiswa.perwalian.perwalian');
    }
}
