<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pengusul;

use App\Profil;

class PengusulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengusul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pengusul = new Pengusul();
        $pengusul->nama = $request->input('nama');
        $pengusul->jabatan = $request->input('jabatan');
        $pengusul->lembaga = $request->input('lembaga');
        $pengusul->alamat = $request->input('alamat');
        $pengusul->no_telp = $request->input('no_telp');
        $pengusul->save();     
      


        $profil = new Profil();
        $profil->kategori = $request->input('kategori');
        $profil->nama = $request->input('nama');
        $profil->alamat = $request->input('alamat');
        $profil->kabupaten = $request->input('kabupaten');
        $profil->pekerjaan = $request->input('pekerjaan');
        $profil->jk = $request->input('jk');
        $profil->no_telp = $request->input('no_telp');
        $profil->email = $request->input('email');
        $profil->anggota_1 = $request->input('anggota_1');
        $profil->anggota_2 = $request->input('anggota_2');
        $profil->anggota_3 = $request->input('anggota_3');
        $profil->anggota_4 = $request->input('anggota_4');
        $profil->anggota_5 = $request->input('anggota_5');
        $profil->judul = $request->input('judul');
        $profil->temuan = $request->input('temuan');
        $profil->pengembangan = $request->input('pengembangan');
        $profil->save();


        return redirect('/')->with('success', 'Saved');

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

    // public function upload()
    // {
    //     return view('page.pengusul.upload_krenova');
    // }

    // public function quesioner()
    // {
    //     return view('page.pengusul.quesioner_krenova');
    // }
}
