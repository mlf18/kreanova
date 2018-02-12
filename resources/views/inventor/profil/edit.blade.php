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
                        @foreach($profils as $profil)
                        <form method="post" action="{{url('profil/edit')}}">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama/Kelompok</label>
                                <input type="text" class="form-control" id="Nama" name="nama" value="{{$profil->nama}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" name="alamat" value="{{$profil->alamat}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kabupaten/Kota</label>
                                <select class="form-control" id="Kabupaten" name="kabupaten">
                                    <option value="banjarnegara" select="{{$profil->kabupaten=='banjarnegara'?'selected':''}}">Kabupaten Banjarnegara</option>
                                    <option value="banyumas" select="{{$profil->kabupaten=='banyumas'?'selected':''}}">Kabupaten Banyumas</option>
                                    <option value="batang" select="{{$profil->kabupaten=='batang'?'selected':''}}">Kabupaten Batang</option>
                                    <option value="blora" select="{{$profil->kabupaten=='blora'?'selected':''}}">Kabupaten Blora</option>
                                    <option value="boyolali" select="{{$profil->kabupaten=='boyolali'?'selected':''}}">Kabupaten Boyolali</option>
                                    <option value="brebes" select="{{$profil->kabupaten=='brebes'?'selected':''}}">Kabupaten Brebes</option>
                                    <option value="cilacap" select="{{$profil->kabupaten=='cilacap'?'selected':''}}">Kabupaten Cilacap</option>
                                    <option value="demak" select="{{$profil->kabupaten=='demak'?'selected':''}}">Kabupaten Demak</option>
                                    <option value="grobogan" select="{{$profil->kabupaten=='grobogan'?'selected':''}}">Kabupaten Grobogan</option>
                                    
                                    <option value="jepara" select="{{$profil->kabupaten=='jepara'?'selected':''}}">Kabupaten Jepara</option>
                                    <option value="karanganyar" select="{{$profil->kabupaten=='karanganyar'?'selected':''}}">Kabupaten Karanganyar</option>
                                    <option value="kebumen" select="{{$profil->kabupaten=='kebumen'?'selected':''}}">Kabupaten Kebumen</option>
                                    <option value="kendal" select="{{$profil->kabupaten=='kendal'?'selected':''}}">Kabupaten Kendal</option>
                                    <option value="klaten" select="{{$profil->kabupaten=='klaten'?'selected':''}}">Kabupaten Klaten</option>
                                    <option value="kudus" select="{{$profil->kabupaten=='kudus'?'selected':''}}">Kabupaten Kudus</option>
                                    <option value="magelang" select="{{$profil->kabupaten=='magelang'?'selected':''}}">Kabupaten Magelang</option>
                                    <option value="pati" select="{{$profil->kabupaten=='pati'?'selected':''}}">Kabupaten Pati</option>
                                    <option value="pekalongan" select="{{$profil->kabupaten=='pekalongan'?'selected':''}}">Kabupaten Pekalongan</option>
                                    
                                    <option value="pemalang" select="{{$profil->kabupaten=='pemalang'?'selected':''}}">Kabupaten Pemalang</option>
                                    <option value="purbalingga" select="{{$profil->kabupaten=='purbalingga'?'selected':''}}">Kabupaten Purbalingga</option>
                                    <option value="purworejo" select="{{$profil->kabupaten=='purworejo'?'selected':''}}">Kabupaten Purworejo</option>
                                    <option value="rembang" select="{{$profil->kabupaten=='rembang'?'selected':''}}">Kabupaten Rembang</option>
                                    <option value="semarang" select="{{$profil->kabupaten=='semarang'?'selected':''}}">Kabupaten Semarang</option>
                                    <option value="sragen" select="{{$profil->kabupaten=='sragen'?'selected':''}}">Kabupaten Sragen</option>
                                    <option value="sukoharjo" select="{{$profil->kabupaten=='sukoharjo'?'selected':''}}">Kabupaten Sukoharjo</option>
                                    <option value="tegal" select="{{$profil->kabupaten=='tegal'?'selected':''}}">Kabupaten Tegal</option>
                                    <option value="temanggung" select="{{$profil->kabupaten=='temanggung'?'selected':''}}">Kabupaten Temanggung</option>
                                    
                                    <option value="wonogiri" select="{{$profil->kabupaten=='wonogiri'?'selected':''}}">Kabupaten Wonogiri</option>
                                    <option value="wonosobo" select="{{$profil->kabupaten=='wonosobo'?'selected':''}}">Kabupaten Wonosobo</option>
                                    <option value="kota magelang" select="{{$profil->kabupaten=='kota magelang'?'selected':''}}">Kota Magelang</option>
                                    <option value="kota pekalongan" select="{{$profil->kabupaten=='kota pekalongan'?'selected':''}}">Kota Pekalongan</option>
                                    <option value="kota salatiga" select="{{$profil->kabupaten=='kota salatiga'?'selected':''}}">Kota Salatiga</option>
                                    <option value="kota semarang" select="{{$profil->kabupaten=='kota semarang'?'selected':''}}">Kota Semarang</option>
                                    <option value="kota surakarta" select="{{$profil->kabupaten=='kota surakarta'?'selected':''}}">Kota Surakarta</option>
                                    <option value="kota tegal" select="{{$profil->kabupaten=='kota tegal'?'selected':''}}">Kota Tegal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">No Telepon/HP</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{$profil->no_telp}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$profil->email}}"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Judul Temuan/Inovasi</label>
                                <input type="text" class="form-control" id="inovasi" name="inovasi" value="{{$profil->temuan}}" />
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection