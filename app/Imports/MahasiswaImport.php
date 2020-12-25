<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class MahasiswaImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mahasiswa([
            'nim'           => $row['nim'],
            'nama'          => $row['nama'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'jurusan'       => $row['jurusan'],
            'alamat'        => $row['alamat'],
            'email'         => $row['email'],
            'username'      => $row['username'],
            'password'      => Hash::make($row['password']),
            'tempat'        => $row['tempat'],
            'tgllahir'      => $row['tgllahir'],
            'telp'          => $row['telp'],
            'gambar'         => $row['gambar'],
        ]);
    }
}
