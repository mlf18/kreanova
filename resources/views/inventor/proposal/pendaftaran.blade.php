<div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
        <form method="POST" action="{{url('/proposals')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <br>
                <h4>PENGUSUL</h4>
                <label for="nama_pengusul">Nama</label>
                <input type="text" class="form-control" id="nama_pengusul" name="nama_pengusul">
            </div>
            <div class="form-group">
                <label for="jabatan_pengusul">Jabatan</label>
                <input type="text" class="form-control" id="jabatan_pengusul" name="jabatan_pengusul">
            </div>
            <div class="form-group">
                <label for="lembaga_pengusul">Lembaga/Instansi</label>
                <input type="text" class="form-control" id="lembaga" name="lembaga_pengusul">
            </div>
            <div class="form-group">
                <label for="alamat_pengusul">Alamat</label>
                <input type="text" class="form-control" id="alamat_pengusul" name="alamat_pengusul">
            </div>
            <div class="form-group">
                <label for="kabupaten_pengusul">Kabupaten/Kota</label>
                    <select class="form-control" id="kabupaten_pengusul" name="kabupaten_pengusul" disabled>
                            <option value="banjarnegara" {{$profil->kabupaten=='banjarnegara'?'selected':''}}>Kabupaten Banjarnegara</option>
                            <option value="banyumas" {{$profil->kabupaten=='banyumas'?'selected':''}}>Kabupaten Banyumas</option>
                            <option value="batang" {{$profil->kabupaten=='batang'?'selected':''}} >Kabupaten Batang</option>
                            <option value="blora" {{$profil->kabupaten=='blora'?'selected':''}}>Kabupaten Blora</option>
                            <option value="boyolali" {{$profil->kabupaten=='boyolali'?'selected':''}}>Kabupaten Boyolali</option>
                            <option value="brebes" {{$profil->kabupaten=='brebes'?'selected':''}}>Kabupaten Brebes</option>
                            <option value="cilacap" {{$profil->kabupaten=='cilacap'?'selected':''}}>Kabupaten Cilacap</option>
                            <option value="demak" {{$profil->kabupaten=='demak'?'selected':''}}>Kabupaten Demak</option>
                            <option value="grobogan" {{$profil->kabupaten=='grobogan'?'selected':''}}>Kabupaten Grobogan</option>
                            
                            <option value="jepara" {{$profil->kabupaten=='jepara'?'selected':''}}>Kabupaten Jepara</option>
                            <option value="karanganyar" {{$profil->kabupaten=='karanganyar'?'selected':''}}>Kabupaten Karanganyar</option>
                            <option value="kebumen" {{$profil->kabupaten=='kebumen'?'selected':''}}>Kabupaten Kebumen</option>
                            <option value="kendal" {{$profil->kabupaten=='kendal'?'selected':''}}>Kabupaten Kendal</option>
                            <option value="klaten" {{$profil->kabupaten=='klaten'?'selected':''}}>Kabupaten Klaten</option>
                            <option value="kudus" {{$profil->kabupaten=='kudus'?'selected':''}}>Kabupaten Kudus</option>
                            <option value="magelang" {{$profil->kabupaten=='magelang'?'selected':''}}>Kabupaten Magelang</option>
                            <option value="pati" {{$profil->kabupaten=='pati'?'selected':''}}>Kabupaten Pati</option>
                            <option value="pekalongan" {{$profil->kabupaten=='pekalongan'?'selected':''}}>Kabupaten Pekalongan</option>
                            
                            <option value="pemalang" {{$profil->kabupaten=='pemalang'?'selected':''}}>Kabupaten Pemalang</option>
                            <option value="purbalingga" {{$profil->kabupaten=='purbalingga'?'selected':''}}>Kabupaten Purbalingga</option>
                            <option value="purworejo" {{$profil->kabupaten=='purworejo'?'selected':''}}>Kabupaten Purworejo</option>
                            <option value="rembang" {{$profil->kabupaten=='rembang'?'selected':''}}>Kabupaten Rembang</option>
                            <option value="semarang" {{$profil->kabupaten=='semarang'?'selected':''}}>Kabupaten Semarang</option>
                            <option value="sragen" {{$profil->kabupaten=='sragen'?'selected':''}}>Kabupaten Sragen</option>
                            <option value="sukoharjo" {{$profil->kabupaten=='sukoharjo'?'selected':''}}>Kabupaten Sukoharjo</option>
                            <option value="tegal" {{$profil->kabupaten=='tegal'?'selected':''}}>Kabupaten Tegal</option>
                            <option value="temanggung" {{$profil->kabupaten=='temanggung'?'selected':''}}>Kabupaten Temanggung</option>
                            
                            <option value="wonogiri" {{$profil->kabupaten=='wonogiri'?'selected':''}}>Kabupaten Wonogiri</option>
                            <option value="wonosobo" {{$profil->kabupaten=='wonosobo'?'selected':''}}>Kabupaten Wonosobo</option>
                            <option value="kota magelang" {{$profil->kabupaten=='kota magelang'?'selected':''}}>Kota Magelang</option>
                            <option value="kota pekalongan" {{$profil->kabupaten=='kota pekalongan'?'selected':''}}>Kota Pekalongan</option>
                            <option value="kota salatiga" {{$profil->kabupaten=='kota salatiga'?'selected':''}}>Kota Salatiga</option>
                            <option value="kota semarang" {{$profil->kabupaten=='kota semarang'?'selected':''}}>Kota Semarang</option>
                            <option value="kota surakarta" {{$profil->kabupaten=='kota surakarta'?'selected':''}}>Kota Surakarta</option>
                            <option value="kota tegal" {{$profil->kabupaten=='kota tegal'?'selected':''}}>Kota Tegal</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="no_telp_pengusul">No Telepon/HP</label>
                    <input type="text" class="form-control" id="no_telp_pengusul" name="no_telp_pengusul">
            </div>
            <p>Dengan ini kami merekomendasikan/mengusulkan nama tersebut di bawah ini untuk mengikuti pendaftaran Lomba Krenova Provinsi Jawa Tengah Tahun 2018.</p>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-perorangan-tab" data-toggle="tab" href="#nav-perorangan" role="tab" aria-controls="nav-perorangan" aria-selected="true">Perorangan</a>
                    <a class="nav-item nav-link" id="nav-kelompok-tab" data-toggle="tab" href="#nav-kelompok" role="tab" aria-controls="nav-kelompok" aria-selected="false">Kelompok</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-perorangan" role="tabpanel" aria-labelledby="nav-perorangan-tab">
                    <br>
                    <h4>Peserta Perorangan</h4>
                    <div class="form-group">
                        <label for="bidang_perorangan">Bidang</label>
                        <select class="form-control" id="bidang_perorangan" name="bidang_perorangan">
                            <option value="agribisnis dan pangan">Agribisnis dan pangan</option>
                            <option value="energi">Energi</option>
                            <option value="kehutanan dan lingkungan hidup">Kehutanan dan lingkungan hidup</option>
                            <option value="kelautan dan perikanan">Kelautan dan perikanan</option>
                            <option value="kesehatan, obat-obatan dan kosmetika">Kesehatan, obat-obatan dan kosmetika</option>
                            <option value="pendidikan">Pendidikan</option>
                            <option value="rekayasa teknologi dan manufaktur">Rekayasa Teknologi dan manufaktur</option>
                            <option value="kerajinan dan industri rumah tangga">Kerajinan dan industri rumah tangga</option>
                            <option value="sosial">Sosial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat_perorangan">Alamat</label>
                        <input type="text" class="form-control" id="alamat_perorangan" name="alamat_perorangan" value="{{$profil->alamat}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_perorangan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan_perorangan" name="pekerjaan_perorangan">
                    </div>
                    <div class="form-group">
                        <label for="no_telp_perorangan">No Telepon/HP</label>
                        <input type="text" class="form-control" id="no_telp_perorangan" name="no_telp_perorangan" value="{{$profil->no_telp}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat_email_perorangan">Alamat E-mail</label>
                        <input type="e-mail" class="form-control" id="alamat_email_perorangan" name="alamat_email_perorangan" value="{{$profil->email}}" disabled>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-kelompok" role="tabpanel" aria-labelledby="nav-kelompok-tab">
                    <br>
                    <h4>Peserta Kelompok</h4>
                    <div class="form-group">
                        <label for="bidang_kelompok">Bidang</label>
                        <select class="form-control" id="bidang_kelompok" name="bidang_kelompok">
                            <option value="agribisnis dan pangan">Agribisnis dan pangan</option>
                            <option value="energi">Energi</option>
                            <option value="kehutanan dan lingkungan hidup">Kehutanan dan lingkungan hidup</option>
                            <option value="kelautan dan perikanan">Kelautan dan perikanan</option>
                            <option value="kesehatan, obat-obatan dan kosmetika">Kesehatan, obat-obatan dan kosmetika</option>
                            <option value="pendidikan">Pendidikan</option>
                            <option value="rekayasa teknologi dan manufaktur">Rekayasa Teknologi dan manufaktur</option>
                            <option value="kerajinan dan industri rumah tangga">Kerajinan dan industri rumah tangga</option>
                            <option value="sosial">Sosial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kelompok">Nama Kelompok</label>
                        <input type="text" class="form-control" id="nama_kelompok" name="nama_kelompok">
                    </div>
                    <div class="form-group">
                        <label for="ketua_kelompok">Nama Ketua Kelompok</label>
                        <input type="text" class="form-control" id="ketua_kelompok" name="ketua_kelompok">
                    </div>
                    <div class="form-group">
                        <label for="alamat_kelompok">Alamat Kelompok</label>
                        <input type="text" class="form-control" id="alamat_kelompok" name="alamat_kelompok" value="{{$profil->alamat}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="no_hp_kelompok">No Telepon/HP Ketua</label>
                        <input type="text" class="form-control" id="no_hp_kelompok" name="no_hp_kelompok" value="{{$profil->no_telp}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat_email_kelompok">Alamat E-mail</label>
                        <input type="e-mail" class="form-control" id="alamat_email_kelompok" name="alamat_email_kelompok" value="{{$profil->email}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nama_anggota_kelompok">Nama Anggota</label>
                        <input type="text" class="form-control" id="nama_anggota_kelompok" name="nama_anggota_kelompok" placeholder="Nama Anggota 1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_anggota_kelompok_2" name="nama_anggota_kelompok_2" placeholder="Nama Anggota 2">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_anggota_kelompok_3" name="nama_anggota_kelompok_3" placeholder="Nama Anggota 3">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_anggota_kelompok_4" name="nama_anggota_kelompok_4" placeholder="Nama Anggota 4">
                    </div>
                    <div class="form-group">
                        <label for="karya_usul_kelompok">Karya Yang Diusulkan</label>
                        <input type="text" class="form-control" id="karya_usul_kelompok" name="karya_usul_kelompok" value="{{$profil->temuan}}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="temuan_baru_kelompok">Temuan Baru</label>
                        <input type="text" class="form-control" id="temuan_baru_kelompok" name="temuan_baru_kelompok">
                    </div>
                    <div class="form-group">
                        <label for="pengembangan_dari_kelompok">Pengembangan dari</label>
                        <input type="text" class="form-control" id="pengembangan_dari_kelompok" name="pengembangan_dari_kelompok">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Daft</button> <a href="#" class="btn btn-secondary" id="lanjutkan_pendaftaran">Lanjutkan</a> 
        </form>
    </div>