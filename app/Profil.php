<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = ['id', 'kategori', 'nama', 'alamat', 'kabupaten', 'pekerjaan', 'jk', 'no_telp',' email', 'anggota_1', 'anggota_2', 'anggota_3', 'anggota_4', 'anggota_5', 'judul', 'temuan', 'pengembangan'];

    // public function pengusuls()
    // {
    // 	return $this->belongsToMany(Pengusul::class);
    // }

    public function proposals()
    {
    	return $this->belongsToMany(Proposal::class);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function pengusul(){
        return $this->belongsTo('App\Pengusul');
    }
    public function temuans(){
        return $this->hasOne('App\Temuan');
    }
    public function proposal(){
        return $this->hasOne('App\Proposal');
    }
}
