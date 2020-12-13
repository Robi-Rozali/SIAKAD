<?php

namespace App\Exports;

use App\Models\Kurikulum;
use Maatwebsite\Excel\Concerns\FromCollection;

class KurikulumExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kurikulum::all();
    }
}
