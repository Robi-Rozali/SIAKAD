<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
    protected $fillable = ['nim','nama','jurusan','semester','status_smt','tahun','kode','matakuliah','sks','kehadiran','tugas','uts','uas','jumlah','grade'];

    public static function getKurikulum()
    {
    	$records = DB::table('nilai')->select('id','nim','nama','jurusan','semester','status_smt','tahun','kode','matakuliah','sks','kehadiran','tugas','uts','uas','jumlah','grade');
    	return $records;
    }
}
