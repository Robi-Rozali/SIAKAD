<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilihkelas extends Model
{
    use HasFactory;
    protected $table = 'pilihkelas';

    protected $fillable = [
    	'nim',
    	'nama',
    	'jurusan',
    	'tahun',
    	'kode',
    	'matakuliah',
    	'kelas',
    	'ruang',
    	'hari',
    	'jam',
    ];

}
