@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
				<h3>FORMULIR KUESIONER TEMUAN KRENOVA</h3>

				<div class="form-group">
					<hr>
					<h4>ORISINALITAS DAN KEPIONIRAN</h4>
					{!! Form::label('nama', 'Apakah temuan ini merupakan hasil temuan asli? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Apakah sudah ada alat sejenis yang sudah ada? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Apakah temuan saudara/i merupakan hasil pengembangan ide orang lain? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Darimanakah asal-usul ide temuan? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}	
				</div>
				<div class="form-group">
					<hr>
					<h4>PENERAPAN</h4>
					<hr>
					<h5>Implementasi</h5>
					{!! Form::label('nama', 'Apakah sudah dipersiapkan untuk komersial /dijual? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Dimana/oleh siapa? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					<h5>Penerapan</h5>
					{!! Form::label('nama', 'Apakah temuan saudara sudah diterapkan? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Dimana/oleh siapa? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					{!! Form::label('nama', 'Cakupan/Skala Penerapan (Kab/Kota, Provinsi, Nasional ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jawaban singkat']) !!}
					

				</div>
				<div class="form-group">
					<hr>
					<h4>MANFAAT</h4>
					<hr>
					<h5>Penyerapan Bahan Baku Lokal</h5>
					{!! Form::label('nama', 'Apakah temuan saudara sudah diterapkan? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					<h5>Peningkatan proses/kapasitas/produktifitas</h5>
					{!! Form::label('nama', 'Seberapa besar produktifitas yang dihasilkan? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					<h5>Penyerapan Tenaga Kerja</h5>
					{!! Form::label('nama', 'Berapa banyak tenaga kerja yang diserap dalam penciptaan/penerapan produk (lapangan kerja)? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>
				<div class="form-group">
					<hr>
					<h4>KEBERLANGSUNGAN / KOMERSIALISASI</h4>
					<hr>
					<h5>Prospek Bisnis / Komersiaisasi </h5>
					{!! Form::label('nama', 'Oleh siapa dan dimana? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					{!! Form::label('nama', 'Bagaimana caranya ? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					<h5>Kemelimpahan Bahan Baku </h5>
					{!! Form::label('nama', 'Dimana bahan baku pembuatan temuan ini bisa saudara/i  diperoleh (diakses) ? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					{!! Form::label('nama', 'Banyak tidaknya ketersedian bahan baku untuk produksi temuan/inovasi?') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
					<h5>Berorientasi Kebutuhan Masa Depan </h5>
					{!! Form::label('nama', 'Menjawab kebutuhan teknologi bagi masyarakat (saat ini & ke depan), jelaskan') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}	 
				</div>
				
			</div>	
		</div>
	</div>
@endsection