<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Perwalian;
use App\Models\Mahasiswa;
use App\Models\Kurikulum; 
use App\Models\Nilai;

class PerwalianadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Prodi.perwalian.perwalianadm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kur = Kurikulum::all();
        foreach ($kur as $kuri) {
            $kurikulums[$kuri->id]['semester']=$kuri->semester;
            $kurikulums[$kuri->id]['kode']=$kuri->kode;
            $kurikulums[$kuri->id]['matakuliah']=$kuri->matakuliah;
            $kurikulums[$kuri->id]['sks']=$kuri->sks;
        }


        // dd($request->id[0]);
        foreach($request->id[0] as $value){
            // dd($key);
                $data = new Perwalian;
                $data->nim = $request->input('nim');
                $data->nama = $request->input('nama');
                $data->jurusan = str_replace(' ', '_', $request->input('jurusan'));
                $data->semester = $kurikulums[$value]['semester'];
                $data->kode = $kurikulums[$value]['kode'];
                $data->matakuliah = $kurikulums[$value]['matakuliah'];
                $data->sks = $kurikulums[$value]['sks'];
                $data->save();
        }

        return back()->with('sukses','Data Jadwal berhasil ditambah');
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

    public function mahasiswa($id){
        $mhs = Mahasiswa::where('nim','=',$id)->orWhere('nama','=',$id)->get();

        return response()->json([
            'mhs' => $mhs,
        ]);
    }

    public function matakuliah($prodi,$smtr,$tahun){
        $matkul = Kurikulum::where('jurusan','=',$prodi)
                            ->where('semester','=',$smtr)
                            ->where('tahun','=',$tahun)->get();

        return response()->json([
            'matkul' => $matkul,
        ]);
    }

    public function disposisi($nim){
        $mhs = Mahasiswa::where('nim', '=', $nim)->first();

        $perwalian = Perwalian::where('nim','=',$nim)
                    ->select(DB::raw('max(semester) as maksks'))->get();

        $nilai = Nilai::where('nim','=',$nim)->get();
        $numero_uno = count($perwalian);

        $kurikulum = [];
        $nguli = [];
        $ngambil = [];
        
        if (count($perwalian) > 0) {
            foreach ($perwalian as $p) {
                $maksmt = $p->maksks + 1;
                foreach ($nilai as $n) {
                    if ($n->semester == $p->maksks) {

                        $sksprev = $p->maksks - 1;
                        $ngulang = Nilai::where('nim','=',$nim)
                        ->where('semester','=',$sksprev)
                    ->where('grade','=','D')
                    ->orWhere([['grade','=','E'],['semester','=',$sksprev]])->get();

                    if ($p->maksks > 1 && $p->maksks < 8 ) {
                                            
                        if (count($ngulang) > 0) {
                            foreach ($ngulang as $ng) {
                            if ($ng->grade == 'D' || 'E') {
                                $sksnext = $p->maksks + 1;
                                $kurikulum = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $sksnext)->get();

                                $nguli = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $ng->semester)
                                ->where('kode', '=', $ng->kode)->get();

                                $sksngam = $p->maksks + 3;
                                    $ngambil = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $sksngam)->get();
                            }
                        }

                        }else{
                            $sksnext = $p->maksks + 1;
                                    $kurikulum = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $sksnext)->get();

                            $sksngam = $p->maksks + 3;
                                    $ngambil = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $sksngam)->get();

                        }
                    }else{
                            $sksnext = $p->maksks + 1;
                                    $kurikulum = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $sksnext)->get();

                            $sksngam = $p->maksks + 3;
                                    $ngambil = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', $sksngam)->get();

                        }   


                    }else{
                        $kurikulum = [];
                        $ngambil = [];
                        
                    }
                }
            }
            // dd($p->maksks);
            if ($p->maksks +1 == '1') {
                // if($numero_uno == '1'){
                    $kurikulum = Kurikulum::where('jurusan', '=', $mhs->jurusan)
                                ->where('tahun', '=', $mhs->tahun)
                                ->where('semester', '=', '1')->get();
                // }
            }
        }

        return response()->json([
            'mhs' => $mhs,
            'maksmt' => ($maksmt == null) ? $maksmt = 1 : $maksmt,
            'krm' => $kurikulum,
            'nguli' => $nguli,
            'ngambil' => $ngambil,
        ]);
    }

}
