<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputjadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = [
    	'kode',
        'matakuliah',
        'kelas',
        'ruang',
        'hari',
        'jam',
        'namadosen',
        'semester',
        'jurusan',
        'tahun',
        'sks',
    ];
}
