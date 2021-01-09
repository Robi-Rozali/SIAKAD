<?php

namespace App\Http\Controllers\Prodi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

use App\Models\Nilai;

class KhsadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$result = KHS::when($request->search, function($query) use ($request){
          //  $query->where('nim', 'like', "%{$request->search}%")
            //        ->orWhere('nama', 'like', "%{$request->search}%");
        //})->paginate(2);
        $data = [
            'nilai' => Nilai::all(),
            'semester' => Nilai::select('semester')->groupBy('semester')->get(),
        ];
        return view('Prodi.khs.Khsadm')->with($data);
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

    public function cari($id){

        $nilai = Nilai::where('nim', '=', $id)->orWhere('nama', '=', $id)
                ->select('nim','nama','jurusan','semester')
                ->groupBy('nim','nama','jurusan','semester')->get();

        return response()->json([
            'data' =>$nilai,
        ]);
    }

       public function nilai($semester,$nim){
        $nilai = Nilai::where('semester','=',$semester)
                        ->where('nim', '=', $nim)->get();
        return response()->json([
            'data' => $nilai,
        ]);
    }

    public function cetak(Request $request){
        $id = $request->input('idnim');
        $semester = $request->input('oioi');
        $data = [
            'mhs' => Nilai::where('nim','=', $id)
                        ->where('semester','=',$semester)->first(),

            'nilai' => Nilai::where('nim','=', $id)->where('semester', '=', $semester)
                        ->select('semester','kode','matakuliah','sks','grade')->groupBy('semester','kode','matakuliah','sks','grade')->get(),
        ];


        $pdf = PDF::loadview('Prodi.Khs.cetak',$data);
        return $pdf->stream('Nilai.pdf'); 
        // return view('prodi.khs.cetak')->with($data);
    }

}
