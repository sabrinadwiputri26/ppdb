<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }  
    
    public function auth(Request $request)
    {
        $request->validate([
         'email'=>'required|exists:users,email',
         'password'=>'required',
        ],[
            'email.exists' => "This username doesn't exists"
        ]);
        
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        } else {
            return redirect('/')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function home()
    {
        return view('dashboard.home');
    }

    public function view()
    {
        return view('dashboard.view');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daftar()
    {
        $ppdbs = ppdb::all();
        return view ('dashboard.daftar', compact('ppdbs'));
    }

    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function daftarAccount(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'jenisKelamin' => 'required',
            'name' => 'required',
            'asalSekolah' => 'required',
            'email' => 'required',
            'nomor' => 'required',
            'noAyah' => 'required',
            'noIbu' => 'required',
        ]);

        ppdb::create([
            'nisn' => $request->nisn,
            'jenisKelamin'=> $request->jenisKelamin,
            'name' => $request->name,
            'asalSekolah' =>$request->asalSekolah,
            'email'=>$request->email,
            'nomor' =>$request->nomor,
            'noAyah' =>$request->noAyah,
            'noIbu' =>$request->noIbu,
        ]);

        User::create([
            'name' => $request->name,
           
            'email'=>$request->email,
            'password' => bcrypt($request->nisn),
        ]);


        return view('dashboard.view', compact('request'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(Ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppdb $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppdb $ppdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppdb $ppdb)
    {
        //
    }
}
