<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proposal;
use App\Pengusul;

use App\Profil;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $proposal = Proposal::get();
        // return view('proposal.index', compact('proposal'));
        return view('inventor.proposal.create');
    }

    public function get($filename){

		$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('proposal')->get($entry->filename);

		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $profil = Profil::pluck('judul', 'id');

        // return view('proposal.create', compact('profil'));
        return view('inventor.proposal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $proposal = new Proposal();
        // $proposal->abstrak = $request->input('abstrak');
        // $proposal->latar_belakang = $request->input('latar_belakang');
        // $proposal->maksud = $request->input('maksud');
        // $proposal->manfaat = $request->input('manfaat');
        // $proposal->spek_teknik = $request->input('spek_teknik');
        // $proposal->keunggulan = $request->input('keunggulan');
        // $proposal->penerapan = $request->input('penerapan');
        // $proposal->biaya_produksi = $request->input('biaya_produksi');
        // $proposal->prospek_bisnis = $request->input('prospek_bisnis');

        // // upload proposal

        // $file       = $request->file('proposal_name');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('proposal_name')->move("proposal/", $fileName);

        // $proposal->proposal_name = $fileName;

        // //upload surat pernyataan keaslian

        // $file2       = $request->file('spk_name');
        // $fileName2   = $file2->getClientOriginalName();
        // $request->file('spk_name')->move("spk/", $fileName2);

        // $proposal->spk_name = $fileName2;

        // // upload lampiran

        // $file3       = $request->file('lampiran_name');
        // $fileName3   = $file3->getClientOriginalName();
        // $request->file('lampiran_name')->move("lampiran/", $fileName3);

        // $proposal->lampiran_name = $fileName3;

        // $proposal->save();

        // $proposal->profils()->attach($request->input('profil_id'));
        $pengusul= new Pengusul();
        $pengusul->nama=$request->input('nama_pengusul');
        $pengusul->jabatan=$request->input('jabatan_pengusul');
        $pengusul->lembaga=$request->input('lembaga_pengusul');
        $pengusul->alamat=$request->input('alamat_pengusul');
        $pengusul->no_telp=$request->input('no_telp_pengusul');
        $profil= Profil::find();
        $profil->kategori=$request->input('bidang_perorangan');
        $profil->alamat=$request->input('alamat_perorangan');
        $profil->pekerjaan=$request->input('pekerjaan_perorangan');
        $profil->email=$request->input('alamat_email_perorangan');
        $profil->no_telp=$request->input('no_telp_perorangan');
        $profil->kategori=$request->input('bidang_kelompok');
        $profil->alamat=$request->input('alamat_kelompok');
        $profil->email=$request->input('alamat_email_kelompok');
        $profil->no_telp=$request->input('no_hp_kelompok');
        $profil->anggota1=$request->input('nama_anggota_kelompok');
        $profil->anggota2=$request->input('nama_anggota_kelompok_2');
        $profil->anggota3=$request->input('nama_anggota_kelompok_3');
        $profil->anggota4=$request->input('nama_anggota_kelompok_4');
        $profil->temuan=$request->input('karya_usul_kelompok');
        $profil->judul=$request->input('temuan_baru_kelompok');
        $profil->pengembangan=$request->input('pengembangan_kelompok');
        $temuan= new Temuans();
        $temuan->temuan_asli=$request->input('temuan_asli');
        $temuan->waktu_produksi=$request->input('waktu_produksi');
        $temuan->sudah_ada=$request->input('orisinalitas_alat');
        $temuan->ide_orang=$request->input('orisinalitas_ide');
        $temuan->komersial=$request->input('implementasi_komersil');
        $temuan->komersial_pihak=$request->input('implementasi_pihak');
        $temuan->asal_usul=$request->input('implementasi_asal_usul');
        $temuan->penerapan=$request->input('penerapan_temuan');
        $temuan->pelaku_penerapan=$request->input('penerapan_pelaku');
        $temuan->cakupan_penerapan=$request->input('penerapan_cakupan');
        $temuan->bahan_lokal=$request->input('bahan_baku_lokal');
        $temuan->kapasitas_produk=$request->input('manfaat_produktifitas');
        $temuan->tenaga_kerja=$request->input('manfaat_lapangan_pekerjaan');
        $temuan->prospek_tempat=$request->input('komersil_dimana');
        $temuan->prospek_cara=$request->input('komersil_cara');
        $temuan->prospek_biaya=$request->input('komersil_biaya');
        $temuan->omset=$request->input('komersil_omset');
        $temuan->asal_bahan=$request->input('komersil_bahan_baku');
        $temuan->quantity_bahan=$request->input('komersil_banyak');
        $temuan->orientasi=$request->input('komersil_kebutuhan');
        $proposal= new Propsal();
        $proposal->abstrak=$request->input('proposal_abstrak');
        $proposal->latar_belakang=$request->input('proposal_latar_belakang');
        $proposal->maksud=$request->input('proposal_maksud_tujuan');
        $proposal->manfaat=$request->input('proposal_manfaat');
        // $proposal->kabupaten=$request->input('proposal_kabupaten');
        $proposal->spek_teknik=$request->input('proposal_spesifikasi');
        $proposal->keunggulan=$request->input('proposal_keunggulan');
        $proposal->penerapan=$request->input('proposal_penerapan');
        $proposal->biaya_produksi=$request->input('proposal_perhitungan');
        $proposal->prospek_bisnis=$request->input('proposal_prospek');
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
}
