<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nim'       => $row['nim'],
            'nama'       => $row['nama'],
            'jurusan'       => $row['jurusan'],
            'alamat'       => $row['alamat'],
            'email'       => $row['email'],
            'password'       => \Hash::make($row['password']),
            'tempat'       => $row['tempat'],
            'tgllahir'       => $row['tgllahir'],
            'telp'       => $row['telp'],
        ]);
    }
}
