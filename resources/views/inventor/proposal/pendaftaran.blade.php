<div class="tab-pane fade show active" id="pendaftaran" role="tabpanel" aria-labelledby="pendaftaran-tab">
        <form method="post" action="{{url('/proposals')}}">
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
                    <select class="form-control" id="kabupaten_pengusul" name="kabupaten_pengusul">
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
                            <option>Agribisnis dan pangan</option>
                            <option>Energi</option>
                            <option>Kehutanan dan lingkungan hidup</option>
                            <option>Kelautan dan perikanan</option>
                            <option>Kesehatan, obat-obatan dan kosmetika</option>
                            <option>Pendidikan</option>
                            <option>Rekayasa Teknologi dan manufaktur</option>
                            <option>Kerajinan dan industri rumah tangga</option>
                            <option>Sosial</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat_perorangan">Alamat</label>
                        <input type="text" class="form-control" id="alamat_perorangan" name="alamat_perorangan">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_perorangan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan_perorangan" name="pekerjaan_perorangan">
                    </div>
                    <div class="form-group">
                        <label for="no_telp_perorangan">No Telepon/HP</label>
                        <input type="text" class="form-control" id="no_telp_perorangan" name="no_telp_perorangan" >
                    </div>
                    <div class="form-group">
                        <label for="alamat_email_perorangan">Alamat E-mail</label>
                        <input type="e-mail" class="form-control" id="alamat_email_perorangan" name="alamat_email_perorangan">
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-kelompok" role="tabpanel" aria-labelledby="nav-kelompok-tab">
                    <br>
                    <h4>Peserta Kelompok</h4>
                    <div class="form-group">
                        <label for="bidang_kelompok">Bidang</label>
                        <select class="form-control" id="bidang_kelompok" name="bidang_kelompok">
                            <option>Agribisnis dan pangan</option>
                            <option>Energi</option>
                            <option>Kehutanan dan lingkungan hidup</option>
                            <option>Kelautan dan perikanan</option>
                            <option>Kesehatan, obat-obatan dan kosmetika</option>
                            <option>Pendidikan</option>
                            <option>Rekayasa Teknologi dan manufaktur</option>
                            <option>Kerajinan dan industri rumah tangga</option>
                            <option>Sosial</option>
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
                        <input type="text" class="form-control" id="alamat_kelompok" name="alamat_kelompok">
                    </div>
                    <div class="form-group">
                        <label for="no_hp_kelompok">No Telepon/HP Ketua</label>
                        <input type="text" class="form-control" id="no_hp_kelompok" name="no_hp_kelompok">
                    </div>
                    <div class="form-group">
                        <label for="alamat_email_kelompok">Alamat E-mail</label>
                        <input type="e-mail" class="form-control" id="alamat_email_kelompok" name="alamat_email_kelompok">
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
                        <input type="text" class="form-control" id="karya_usul_kelompok" name="karya_usul_kelompok">
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
            <button type="button" class="btn btn-primary">Simpan Daft</button> <a href="#" class="btn btn-secondary" id="lanjutkan_pendaftaran">Lanjutkan</a> 
        </form>
    </div>