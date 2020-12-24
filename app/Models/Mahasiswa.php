<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\ContractAutMustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nim',
        'nama',
        'jenis_kelamin',
        'jurusan',
        'alamat',
        'email',
    	'username',
    	'password',
        'tempat',
        'tgllahir',
        'telp',
        'gambar',
    ];

    protected $hidden = [
    	'password',
    	'remember_token',
    ];

    public static function getMahasiswa()
    {
        $records = DB::table('mahasiswa')->select('id','nim','nama','jenis_kelamin','jurusan','alamat','email','username','password','tempat','tgllahir','telp','gambar',);
        return $records;
    }
}
