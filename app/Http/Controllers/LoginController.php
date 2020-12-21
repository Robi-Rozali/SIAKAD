<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function login(Request $request){
        $request->validate([
            'nim'       => 'required',
            'username'  => 'required',
            'password'  => 'required',

        ]);
        $data = $request->only('nim','username','password');

        if (Auth::guard('mahasiswa')->attempt($data)) {
            return redirect()->intended('/mhs/dashboard');
        }elseif (Auth::guard('admin')->attempt($data)) {
            return redirect()->intended('/adm/index');
        }elseif (Auth::guard('prodi')->attempt($data)) {
            return redirect()->intended('/prodi/index');
        }elseif (Auth::guard('keuangan')->attempt($data)) {
            return redirect()->intended('/keuangan/index');
        }else{
            return redirect('/index')->with('info','Username Atau Password Salah');
        }
    }

    public function logout(){
        if (Auth::guard('mahasiswa')->check()){
            Auth::guard('mahasiswa')->logout();
        }
        if (Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }
        if (Auth::guard('prodi')->check()){
            Auth::guard('prodi')->logout();
        }
        if (Auth::guard('keuangan')->check()){
            Auth::guard('keuangan')->logout();
        }

        return redirect('/index');
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
