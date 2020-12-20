<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

use App\Models\Inputjadwal;
use App\Models\Prodi;
use App\Models\Kurikulum;
use App\Models\Dosen;
use App\Models\Ruang;
use App\Models\Kelas;

class InputjadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'inputjadwal' => Inputjadwal::all(),
            'prodi' => Prodi::select('prodi')->get(),
            'semester' => Kurikulum::select('semester')->groupBy('semester')->get(),
            'tahun' => Kurikulum::select('tahun')->groupBy('tahun')->get(),
            'namadosen' => Dosen::select('namadosen')->get(),
            'nama' => Ruang::select('nama')->get(),
            'lantai' => Ruang::select('lantai','nama')->get(),
            'kelas' => Kelas::select('kelas')->get(),

        ];   
        return view('prodi.jadwal.inputjadwal')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];
        return view('prodi.jadwal.inputjadwal')-with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'kode'          => 'required',
        //     'matakuliah'    => 'required',
        //     'kelas'         => 'required',
        //     'ruang'         => 'required',
        //     'hari'          => 'required',
        //     'jam'           => 'required',
        //     'namadosen'     => 'required',
        //     'semester'      => 'required',
        //     'jurusan'       => 'required',
        //     'tahun'         => 'required',
        //     'sks'           => 'required',
        // ]);


        // $inputjadwal = new Inputjadwal;
        // $inputjadwal->kode        = $request->input('kode');
        // $inputjadwal->matakuliah  = $request->input('matakuliah');
        // $inputjadwal->kelas       = $request->input('kelas');
        // $inputjadwal->ruang       = $request->input('ruang');
        // $inputjadwal->hari        = $request->input('hari');
        // $inputjadwal->jam         = $request->input('jam');
        // $inputjadwal->namadosen   = $request->input('namadosen');
        // $inputjadwal->semester    = $request->input('semester');
        // $inputjadwal->jurusan     = $request->input('jurusan');
        // $inputjadwal->tahun       = $request->input('tahun');
        // $inputjadwal->sks         = $request->input('sks');
        // $inputjadwal->save();   

        // $request->validate([
        //     'fields.*.kode'          => 'required',
        //     'fields.*.matakuliah'    => 'required',
        //     'fields.*.kelas'         => 'required',
        //     'fields.*.ruang'         => 'required',
        //     'fields.*.hari'          => 'required',
        //     'fields.*.jam'           => 'required',
        //     'fields.*.namadosen'     => 'required',
        //     'fields.*.semester'      => 'required',
        //     'fields.*.jurusan'       => 'required',
        //     'fields.*.tahun'         => 'required',
        //     'fields.*.sks'           => 'required',
        // ]);

        foreach($request->fields as $key => $value){
            Inputjadwal::create($value);
            // dd($request->fields);
            // dd($key);
            // dd($value);
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
        $data = [
            'inputjadwal' => Inputjadwal::find($id),
            
        ];
        return view('prodi.jadwal.inputjadwal')-with($data);
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

    public function matkul($prodi,$smtr,$tahun){
        $matkul = Kurikulum::where('jurusan','=',$prodi)
                            ->where('semester','=',$smtr)
                            ->where('tahun','=',$tahun)->get();

        return response()->json([
            'data' => $matkul,
        ]);
    }

    public function detail($id){
        $matkul = Kurikulum::where('matakuliah','=',$id)->get();
        return response()->json([
            'data' => $matkul,
        ]);
    }


}
