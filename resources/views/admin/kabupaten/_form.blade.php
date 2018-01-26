@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
				<h3>FORMULIR KUESIONER BUPATI/WALIKOTA PELOPOR INOVASI DAERAH</h3>

				<div class="form-group">
					<hr>
					<h4>ALOKASI ANGGARAN</h4>
					{!! Form::label('nama', 'Berapa alokasi anggaran untuk kelitbangan Iptekin dari total APBD?  ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jelaskan secara spesifik dalam Rp.      dan ']) !!}
				</div>
				<div class="form-group">
					<hr>
					<h4>PERATURAN DAERAH</h4>
					<hr>
					{!! Form::label('nama', 'Adakah peraturan-peraturan daerah yang mendukung kelitbangan Iptekin.? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jelaskan dengan singkat']) !!}
				</div>
				<div class="form-group">
					<hr>
					<h4>MoU/KERJASAMA</h4>
					{!! Form::label('nama', 'Adakah MoU/Kerjasama terkait Kelitbangan Iptekin dengan Kementerian, Lembaga Litbang Pusat & Daerah serta Perguruan Tinggi?') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Lengkapi/lampirkan dengan bukti']) !!}
				</div>
				<div class="form-group">
					<hr>
					<h4>PAMERAN / LOMBA</h4>
					{!! Form::label('nama', 'a)	Adakah penyelenggaraan lomba Krenova tingkat kab/kota?  ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jelaskan']) !!}
					{!! Form::label('nama', 'b) Adakah penyelenggaraan pameran produk inovasi tingkat kab/kota.?') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'jelaskan']) !!} 
				</div>
				<div class="form-group">
					<hr>
					<h4>JUMLAH PESERTA LOMBA KRENOVA / PAMERAN</h4>
					{!! Form::label('nama', 'a)	Berapa jumlah peserta yang mengikuti lomba krenova kab/kota.? ') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => '(Lengkapi/lampirkan dengan bukti)']) !!}
					{!! Form::label('nama', 'b)	Berapa jumlah peserta pameran produk inovasi (PPI) ?') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => 'Lengkapi/lampirkan dengan bukti)']) !!} 
				</div>
				<div class="form-group">
					<hr>
					<h4>JUMLAH PEMENANG LOMBA KRENOVA TINGKAT PROVINSI</h4>
					{!! Form::label('nama', 'Berapa jumlah pemenang Lomba Krenova di tingkat Provins Tahun 2018 ?) ?') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control', 'placeholder' => ' diisi oleh tim Bappeda Provinsi']) !!}

				</div>
				
			</div>	
		</div>
	</div>
@endsection