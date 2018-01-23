
	<div class="container">
		<div class="row">
				{{-- <div class="form-group"> --}}

					{!! Form::label('nama', 'Nama') !!}
					{!! Form::text('nama', old('nama'), ['class'=>'form-control']) !!}
				{{-- </div> --}}
				<div class="form-group">
					{!! Form::label('ttl', 'Tempat') !!}
					{!! Form::text('ttl', old('ttl'), ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('telp', 'Telephone') !!}
					{!! Form::text('ttl', old('ttl'), ['class'=>'form-control']) !!}
				</div>
				<div class="form-group">

					{!! Form::label('jenis_produk', 'jenis Produk ') !!}
					{!! Form::select('jenis_produk', [ 
						'jenis' => 'jenis',
						'jenis' => 'jenis',
						'jenis dan jenis' => 'jenis jenis jenis'
						], null, 
						['class'=>'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('uraian', 'Uraian') !!}
					{!! Form::text('uraian', old('uraian'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('keunggulan', 'keunggulan') !!}
					{!! Form::text('keunggulan', old('keunggulan'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('manfaat', 'manfaat') !!}
					{!! Form::text('manfaat', old('manfaat'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('penerapan', 'penerapan') !!}
					{!! Form::text('penerapan', old('penerapan'), ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('spk', 'Surat Pernyataan Keaslian') !!}
					{!! Form::file('SPK') !!}
				</div>
				<div>
					{!! Form::label('ktp', 'Foto Kopi Kartu Tanda Pengenal / Kartu Identitas') !!}
					{!! Form::file('ktp') !!}
				</div>
			</div>	
		</div>
	</div>

{{-- uraian
	Nama
	Tempat Tanggal Lahir

	Alamat
	Phone
	Jenis produk

	Deskripsi Produk
		Uraian Kreasi dan inovasi
		Keungggulan Teknologi
		Manfaat
		Penerapan di Masyarakat
		Lampiran 
			Surat Pernyataan Keaslian
			Fotokopi Kartu Identitas / Tanda Pengenal --}}
