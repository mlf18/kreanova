<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Profil;
use App\User;
use DB;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('inventor.profil.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminkabkota.inventor.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil =  new Profil();
        $user = new User();
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->pekerjaan=$request->input('pekerjaan');
        $profil->kabupaten=$request->input('kabupaten');
        $profil->email=$request->input('email');
        $profil->temuan=$request->input('inovasi');
        $profil->pengusul_id=Auth::user()->id;
        $user->name=$request->input('username');
        $user->password=bcrypt($request->input('password'));
        $user->email=$request->input('email');
        $user->role="inventor";
        $user->save();
        $profil->user_id=$user->id;
        $profil->save();
        // return redirect('adminkabkota/inventor');
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
        $profil=Auth::user()->profils;
        return view('inventor.profil.edit')->with(['profil'=>$profil]);
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
        $profil= Profil::find($id);
        $this->validate($request,[
            'nama'=> 'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'kabupaten'=>'required',
            'email'=>'required',
            'inovasi'=>'required'
        ]);
        $profil->nama=$request->input('nama');
        $profil->alamat=$request->input('alamat');
        $profil->no_telp=$request->input('no_telp');
        $profil->kabupaten=$request->input('kabupaten');
        $profil->email=$request->input('email');
        $profil->temuan=$request->input('inovasi');
        $profil->save();
        return redirect('profil/create')->with('success','Data Telah Diubah');
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
