@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
				<h3>FORMULIR PENDAFTARAN KRENOVA 2018</h3>
				<h4>PENGUSUL</h4>
				<div class="form-group">
					<hr>
					{!! Form::label('nama_pengusul', 'Nama') !!}
					
					{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('jabatan', 'Jabatan') !!}
					{!! Form::text('jabatan', old('jabatan'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('Lembaga', 'Lembaga/instansi') !!}
					{!! Form::text('lembaga', old('Lembaga'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('Alamat', 'Alamat') !!}
					{!! Form::text('alamat', old('Alamat'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>

				<div class="form-group">
					<hr>
					{!! Form::label('no_telp', 'No Telp/HP') !!}
					{!! Form::text('no_telp', old('no_telp'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>
				<p>
					Dengan ini kami merekomendasikan / mengusulkan nama tersebut di bawah ini untuk mengikuti pendaftaran Lomba Krenova Provinsi Jawa Tengah Tahun 2018.
				</p>

				<div class="form-group">
					<hr>
					{!! Form::label('jenis_produk', 'Jenis Produk ') !!}
					{!! Form::select('jenis_produk', [ 
						'agribisnis' => 'Agribisnis',
						'energi' => 'Energi',
						'kehutanan dan lingkungan hidup '=> 'Kehutanan dan lingkungan hidup',
						'kelautan dan perikanan' => 'Kelautan dan Perikanan',
						'kesehatan obat-obatan dan kosmetika' => 'Kesehatan, obat-obatan dan kosmetika',
						'pendidikan' => 'Pendidikan',
						'rekayasa Teknologi dan manufaktur' => ' Rekayasa Teknologi dan manufaktur',
						'kerajinan dan industri rumah tangga' => 'Kerajinan dan industri rumah tangga',

						'sosial' => 'Sosial'
						], null, 
						['class'=>'form-control']) !!}
				
				</div>
				<hr>
				<h4>PESERTA</h4>

				<div class="form-group">
					<hr>
					{!! Form::label('nama', 'Nama') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('alamat', 'alamat') !!}
					{!! Form::text('alamat', old('alamat'), ['class'=>'form-control', 'placeholder' => 'alamat']) !!}
					
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('jenis kelamin', 'jenis kelamin') !!}
					{!! Form::text('jenis kelamin', old('jenis kelamin'), ['class'=>'form-control', 'placeholder' => 'jenis kelamin']) !!}
					
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('No Telp', 'No Telp/HP') !!}
					{!! Form::text('No Telp', old('No Telp'), ['class'=>'form-control', 'placeholder' => 'No Telp']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('email', 'email') !!}
					{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder' => 'email']) !!}
				</div>

				<div class="form-group">
					<hr>
					{!! Form::label('nama kelompok', 'Nama Anggota Kelompok') !!}
					{!! Form::text('nama1', old('nama1'), ['class'=>'form-control', 'placeholder' => 'nama1']) !!}
					{!! Form::text('nama2', old('nama'), ['class'=>'form-control', 'placeholder' => 'nama']) !!}
					{!! Form::text('nama3', old('nama1'), ['class'=>'form-control', 'placeholder' => 'nama1']) !!}
					{!! Form::text('nama4', old('nama1'), ['class'=>'form-control', 'placeholder' => 'nama1']) !!}
					{!! Form::text('nama5', old('nama1'), ['class'=>'form-control', 'placeholder' => 'nama1']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('karya', 'Karya yang diusulkan') !!}
					{!! Form::text('karya', old('karya'), ['class'=>'form-control', 'placeholder' => 'Karya yang diusulkan']) !!}
				</div>
				<div class="form-group">
					<hr>
				<div class="form-group">
					<hr>
					{!! Form::label('kategori', 'Kategori ') !!}
					{!! Form::select('kategori', [ 
						'agribisnis' => 'Agribisnis',
						'energi' => 'Energi',
						'kehutanan dan lingkungan hidup '=> 'Kehutanan dan lingkungan hidup',
						'kelautan dan perikanan' => 'Kelautan dan Perikanan',
						'kesehatan obat-obatan dan kosmetika' => 'Kesehatan, obat-obatan dan kosmetika',
						'pendidikan' => 'Pendidikan',
						'rekayasa Teknologi dan manufaktur' => ' Rekayasa Teknologi dan manufaktur',
						'kerajinan dan industri rumah tangga' => 'Kerajinan dan industri rumah tangga',

						'sosial' => 'Sosial'
						], null, 
						['class'=>'form-control']) !!}
				
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('temuan baru', 'Temuan baru') !!}
					{!! Form::text('temuan baru', old('temuan baru'), ['class'=>'form-control', 'placeholder' => 'Temuan baru']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('pengembangan', 'Pengembangan dari ') !!}
					{!! Form::text('pengembangan', old('pengembangan'), ['class'=>'form-control', 'placeholder' => 'Pengembangan dari ']) !!}
				</div>

				<h4>Deskripsi Produk</h4>
				<div class="form-group">
					<hr>
					{!! Form::label('uraian', 'Uraian Kreasi dan Inovasi') !!}
					{!! Form::textarea('uraian', old('uraian'), ['class' => 'form-control']) !!}
				
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('keunggulan', 'Keunggulan Teknologi') !!}
					{!! Form::textarea('keunggulan', old('keunggulan'), ['class' => 'form-control']) !!}
				
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('manfaat', 'Manfaat') !!}
					{!! Form::textarea('manfaat', old('manfaat'), ['class' => 'form-control']) !!}
				
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('penerapan', 'Penerapan di Masyarakat') !!}
					{!! Form::textarea('penerapan', old('penerapan'), ['class' => 'form-control']) !!}
				
				</div>
				<h4>Lampiran :</h4>

				<div class="form-group">
					<hr>
					{!! Form::label('spk', 'Surat Pernyataan Keaslian') !!}
					{!! Form::file('SPK') !!}
				
				</div>
				<div>
					<hr>
					{!! Form::label('ktp', 'Foto Kopi Kartu Tanda Pengenal / Kartu Identitas') !!}
					{!! Form::file('ktp') !!}
				
				</div>
				{!! Form::checkbox('agree', 1, null, ['class' => 'field']) !!}
				<a href="/upload" class="btn btn-success">Daftar</a>
					<table class="table" id="scheduletable">
				</div>
				<div class="form-group">
					{!! Form::submit($submitButton, ['class' => 'btn btn-success']) !!}		
				</div>	
		</div>
	</div>
@endsection