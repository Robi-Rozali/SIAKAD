<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kurikulum extends Model
{
    use HasFactory;

    protected $table = 'kurikulum';

    protected $fillable = ['kode','matakuliah','sks','semester','jurusan','Tahun'];

    public static function getKurikulum()
    {
    	$records = DB::table('kurikulum')->select('id','kode','matakuliah','sks','semester','jurusan','Tahun');
    	return $records;
    }
}
