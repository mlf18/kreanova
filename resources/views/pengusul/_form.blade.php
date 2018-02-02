@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
				<h3>FORMULIR PENDAFTARAN KRENOVA 2018</h3>
				<h4>PENGUSUL</h4>
				<div class="form-group">
					<hr>
					{!! Form::label('nama_pengusul', 'Nama') !!}
					
					{!! Form::text('nama', null,  ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('jabatan', 'Jabatan') !!}
					{!! Form::text('jabatan', null, ['class'=>'form-control', 'placeholder' => 'jabatan']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('Lembaga', 'Lembaga/instansi') !!}
					{!! Form::text('lembaga', null,  ['class'=>'form-control', 'placeholder' => 'Lembaga']) !!}
				</div>
				<div class="form-group">
					<hr>
					{!! Form::label('Alamat', 'Alamat') !!}
					{!! Form::text('alamat', null,  ['class'=>'form-control', 'placeholder' => 'Alamat']) !!}
				</div>

				<div class="form-group">
					<hr>
					{!! Form::label('no_telp', 'No Telp/HP') !!}
					{!! Form::text('no_telp', null,  ['class'=>'form-control', 'placeholder' => 'No Telp/HP']) !!}

				</div>

				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		     		<button type="submit" class="btn btn-primary">Submit</button>
				</div>
		</div>
	</div>
@endsection