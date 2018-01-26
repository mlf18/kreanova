@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
				<h3>PENGAJUAN KRENOVA</h3>

				<div class="form-group">
					<hr>
					{!! Form::text('judul', old('judul'), ['class'=>'form-control', 'placeholder' => 'judul ']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::text('abstrak', old('abstrak'), ['class'=>'form-control', 'placeholder' => 'abstrak ']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::text('spekteknik', old('spekteknik'), ['class'=>'form-control', 'placeholder' => 'Spesifikasi Teknis ']) !!}		
				</div>


				<div class="form-group">
					<hr>
					{!! Form::text('keunggulan', old('keunggulan'), ['class'=>'form-control', 'placeholder' => 'Keunggulan bila dibandingkan dengan penemuan yang terdahulu ']) !!}		
				</div>

				<div class="form-group">
					<hr>
					{!! Form::text('penerapan', old('penerapan'), ['class'=>'form-control', 'placeholder' => 'Penerapan pada Masyarakat dan Dunia Industri ']) !!}		
				</div>
				
				<div class="form-group">
					<hr>
					{!! Form::text('prospek', old('prospek'), ['class'=>'form-control', 'placeholder' => 'Prospek Pengembangan ']) !!}		
				</div>
				
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
				<h4>Lampiran :</h4>
				<h5>a.Foto KTP</h5>
				<h5>b.Daftar Riwayat Hidup</h5>
				<h5>c.Surat Pernyataan Keorisinilan</h5>
			</div>	
		</div>
	</div>
@endsection