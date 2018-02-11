@extends('inventor.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="index.html">Dashboard Inventor</a>
            </li>
            <li class="breadcrumb-item active">Profil Inventor</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3">
                    <div class="card-header">Profil Inventor</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama/Kelompok</label>
                                <input type="text" class="form-control" id="Nama" name="nama" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kabupaten/Kota</label>
                                <select class="form-control" id="Kabupaten" name="kabupaten">
                                    <option>Kabupaten Banjarnegara</option>
                                    <option>Kabupaten Banyumas</option>
                                    <option>Kabupaten Batang</option>
                                    <option>Kabupaten Blora</option>
                                    <option>Kabupaten Boyolali</option>
                                    <option>Kabupaten Brebes</option>
                                    <option>Kabupaten Cilacap</option>
                                    <option>Kabupaten Demak</option>
                                    <option>Kabupaten Grobogan</option>
                                    
                                    <option>Kabupaten Jepara</option>
                                    <option>Kabupaten Karanganyar</option>
                                    <option>Kabupaten Kebumen</option>
                                    <option>Kabupaten Kendal</option>
                                    <option>Kabupaten Klaten</option>
                                    <option>Kabupaten Kudus</option>
                                    <option>Kabupaten Magelang</option>
                                    <option>Kabupaten Pati</option>
                                    <option>Kabupaten Pekalongan</option>
                                    
                                    <option>Kabupaten Pemalang</option>
                                    <option>Kabupaten Purbalingga</option>
                                    <option>Kabupaten Purworejo</option>
                                    <option>Kabupaten Rembang</option>
                                    <option>Kabupaten Semarang</option>
                                    <option>Kabupaten Sragen</option>
                                    <option>Kabupaten Sukoharjo</option>
                                    <option>Kabupaten Tegal</option>
                                    <option>Kabupaten Temanggung</option>
                                    
                                    <option>Kabupaten Wonogiri</option>
                                    <option>Kabupaten Wonosobo</option>
                                    <option>Kota Magelang</option>
                                    <option>Kota Pekalongan</option>
                                    <option>Kota Salatiga</option>
                                    <option>Kota Semarang</option>
                                    <option>Kota Surakarta</option>
                                    <option>Kota Tegal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">No Telepon/HP</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Judul Temuan/Inovasi</label>
                                <input type="text" class="form-control" id="inovasi" name="inovasi">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection