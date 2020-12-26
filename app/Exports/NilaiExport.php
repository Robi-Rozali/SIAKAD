<?php

namespace App\Exports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Nilai::all();
    }
}
