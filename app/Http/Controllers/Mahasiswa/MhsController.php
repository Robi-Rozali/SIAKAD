<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Nilai;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nim = Auth::guard('mahasiswa')->user()->nim;
        $smtr = Nilai::where('nim','=',$nim)
                        ->select('semester')->groupBy('semester')->get();
    if (count($smtr) > 0) {
        foreach ($smtr as $s) {
            $sms[] = 'Smtr '.$s->semester;
        }
    }else{
        $sms = [];
    }

        
        // awal
        $smtr0 = Nilai::where('nim','=',$nim)->get();
        $mutu0 = 0;
        $jumlah_sks0 = 0;
        foreach ($smtr0 as $s0) {
            
            if ($s0->grade == 'A') {
                $g0 = 4;
            }elseif ($s0->grade == 'B') {
                $g0 = 3;
            }elseif ($s0->grade == 'C') {
                $g0 = 2;
            }elseif ($s0->grade == 'D') {
                $g0 = 1;
            }elseif ($s0->grade == 'E') {
                $g0 = 0;
            }

            $mutu0 += $s0->sks * $g0;
            $jumlah_sks0 = $jumlah_sks0 + $s0->sks;
            $ipks0 = $mutu0/$jumlah_sks0;
        }
        // akhir
        // awal
        $smtr1 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','1')->get();
        $mutu1 = 0;
        $jumlah_sks1 = 0;
        foreach ($smtr1 as $s1) {
            
            if ($s1->grade == 'A') {
                $g1 = 4;
            }elseif ($s1->grade == 'B') {
                $g1 = 3;
            }elseif ($s1->grade == 'C') {
                $g1 = 2;
            }elseif ($s1->grade == 'D') {
                $g1 = 1;
            }elseif ($s1->grade == 'E') {
                $g1 = 0;
            }

            $mutu1 += $s1->sks * $g1;
            $jumlah_sks1 = $jumlah_sks1 + $s1->sks;
            $ipks1 = $mutu1/$jumlah_sks1;
        }
        // akhir
        $smtr2 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','2')->get();
        $mutu2 = 0;
        $jumlah_sks2 = 0;
        foreach ($smtr2 as $s2) {
            
            if ($s2->grade == 'A') {
                $g2 = 4;
            }elseif ($s2->grade == 'B') {
                $g2 = 3;
            }elseif ($s2->grade == 'C') {
                $g2 = 2;
            }elseif ($s2->grade == 'D') {
                $g2 = 1;
            }elseif ($s2->grade == 'E') {
                $g2 = 0;
            }

            $mutu2 += $s2->sks * $g2;
            $jumlah_sks2 = $jumlah_sks2 + $s2->sks;
            $ipks2 = $mutu2/$jumlah_sks2;
        }
        $smtr3 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','3')->get();
        $mutu3 = 0;
        $jumlah_sks3 = 0;
        foreach ($smtr3 as $s3) {
            
            if ($s3->grade == 'A') {
                $g3 = 4;
            }elseif ($s3->grade == 'B') {
                $g3 = 3;
            }elseif ($s3->grade == 'C') {
                $g3 = 2;
            }elseif ($s3->grade == 'D') {
                $g3 = 1;
            }elseif ($s3->grade == 'E') {
                $g3 = 0;
            }

            $mutu3 += $s3->sks * $g3;
            $jumlah_sks3 = $jumlah_sks3 + $s3->sks;
            $ipks3 = $mutu3/$jumlah_sks3;
        }
        $smtr4 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','4')->get();
        $mutu4 = 0;
        $jumlah_sks4 = 0;
        foreach ($smtr4 as $s4) {
            
            if ($s4->grade == 'A') {
                $g4 = 4;
            }elseif ($s4->grade == 'B') {
                $g4 = 3;
            }elseif ($s4->grade == 'C') {
                $g4 = 2;
            }elseif ($s4->grade == 'D') {
                $g4 = 1;
            }elseif ($s4->grade == 'E') {
                $g4 = 0;
            }

            $mutu4 += $s4->sks * $g4;
            $jumlah_sks4 = $jumlah_sks4 + $s4->sks;
            $ipks4 = $mutu4/$jumlah_sks4;
        }
        $smtr5 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','5')->get();
        $mutu5 = 0;
        $jumlah_sks5 = 0;
        foreach ($smtr5 as $s5) {
            
            if ($s5->grade == 'A') {
                $g5 = 4;
            }elseif ($s5->grade == 'B') {
                $g5 = 3;
            }elseif ($s5->grade == 'C') {
                $g5 = 2;
            }elseif ($s5->grade == 'D') {
                $g5 = 1;
            }elseif ($s5->grade == 'E') {
                $g5 = 0;
            }

            $mutu5 += $s5->sks * $g5;
            $jumlah_sks5 = $jumlah_sks5 + $s5->sks;
            $ipks5 = $mutu5/$jumlah_sks5;
        }
        $smtr6 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','6')->get();
        $mutu6 = 0;
        $jumlah_sks6 = 0;
        foreach ($smtr6 as $s6) {
            
            if ($s6->grade == 'A') {
                $g6 = 4;
            }elseif ($s6->grade == 'B') {
                $g6 = 3;
            }elseif ($s6->grade == 'C') {
                $g6 = 2;
            }elseif ($s6->grade == 'D') {
                $g6 = 1;
            }elseif ($s6->grade == 'E') {
                $g6 = 0;
            }

            $mutu6 += $s6->sks * $g6;
            $jumlah_sks6 = $jumlah_sks6 + $s6->sks;
            $ipks6 = $mutu6/$jumlah_sks6;
        }
        $smtr7 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','7')->get();
        $mutu7 = 0;
        $jumlah_sks7 = 0;
        foreach ($smtr7 as $s7) {
            
            if ($s7->grade == 'A') {
                $g7 = 4;
            }elseif ($s7->grade == 'B') {
                $g7 = 3;
            }elseif ($s7->grade == 'C') {
                $g7 = 2;
            }elseif ($s7->grade == 'D') {
                $g7 = 1;
            }elseif ($s7->grade == 'E') {
                $g7 = 0;
            }

            $mutu7 += $s7->sks * $g7;
            $jumlah_sks7 = $jumlah_sks7 + $s7->sks;
            $ipks7 = $mutu7/$jumlah_sks7;
        }

        $smtr8 = Nilai::where('nim','=',$nim)
                    ->where('semester','=','8')->get();
        $mutu8 = 0;
        $jumlah_sks8 = 0;
        foreach ($smtr8 as $s8) {
            
            if ($s8->grade == 'A') {
                $g8 = 4;
            }elseif ($s8->grade == 'B') {
                $g8 = 3;
            }elseif ($s8->grade == 'C') {
                $g8 = 2;
            }elseif ($s8->grade == 'D') {
                $g8 = 1;
            }elseif ($s8->grade == 'E') {
                $g8 = 0;
            }

            $mutu8 += $s8->sks * $g8;
            $jumlah_sks8 = $jumlah_sks8 + $s8->sks;
            $ipks8 = $mutu8/$jumlah_sks8;
        }


        $data = [
            'sms' => $sms,
            'sms1' => (!empty($ipks0)) ? number_format((float)$ipks0, 2, '.', '') : 0,
            'semester1' => (!empty($ipks1)) ? number_format((float)$ipks1, 2, '.', '') : 0,
            'semester2' => (!empty($ipks2)) ? number_format((float)$ipks2, 2, '.', '') : 0,
            'semester3' => (!empty($ipks3)) ? number_format((float)$ipks3, 2, '.', '') : 0,
            'semester4' => (!empty($ipks4)) ? number_format((float)$ipks4, 2, '.', '') : 0,
            'semester5' => (!empty($ipks5)) ? number_format((float)$ipks5, 2, '.', '') : 0,
            'semester6' => (!empty($ipks6)) ? number_format((float)$ipks6, 2, '.', '') : 0,
            'semester7' => (!empty($ipks7)) ? number_format((float)$ipks7, 2, '.', '') : 0,
            'semester8' => (!empty($ipks8)) ? number_format((float)$ipks8, 2, '.', '') : 0,
        ];
        return view('Mahasiswa.dashboard')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
