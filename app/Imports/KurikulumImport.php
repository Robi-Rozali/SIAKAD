<?php

namespace App\Imports;

use App\Models\Kurikulum;
use Maatwebsite\Excel\Concerns\ToModel;

class KurikulumImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kurikulum([
            'kode'          => $row['kode'],
            'matakuliah'    => $row['matakuliah'],
            'sks'           => $row['sks'],
            'semester'      => $row['semester'],
            'jurusan'       => $row['jurusan'],
            'tahun'         => $row['tahun'],
        ]);
    }
}
