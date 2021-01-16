<?php

namespace App\Imports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;

class NilaiImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Nilai([
            'nim'           => $row['nim'],
            'nama'          => $row['nama'],
            'jurusan'       => $row['jurusan'],
            'semester'       => $row['semester'],
            'status_smt'       => $row['semester'],
            'tahun'       => $row['tahun'],
            'kode'       => $row['kode'],
            'matakuliah'       => $row['matakuliah'],
            'sks'       => $row['sks'],
            'kehadiran'       => $row['kehadiran'],
            'tugas'       => $row['tugas'],
            'uts'       => $row['uts'],
            'uas'       => $row['uas'],
            'jumlah'       => $row['jumlah'],
            'grade'       => $row['grade'],
        ]);
    }
}
