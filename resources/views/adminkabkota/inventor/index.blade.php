@extends('adminkabkota.layouts.app')
@section('content')
<div class="content-wrapper">
		<div class="container-fluid">
      <!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="{{url('/adminkabkota/inventor')}}">Dashboard</a>
				</li>
				<li class="breadcrumb-item active">Data Inventor</li>
			</ol>
			<div class="row">
				<div class="col-12">
					<div class="card mb-3">
						<div class="card-header"><a href="tambahinventor" class="btn btn-primary">Tambah Inventor</a> </div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
										  <th width="5%">No</th>
										  <th>Nama</th>
										  <th>Alamat</th>
										  <th>Pekerjaan</th>
										  <th>No Telp</th>
										  <th>Email</th>
										  <th>Pilihan</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th width="5%">No</th>
											<th>Nama</th>
											<th>Alamat</th>
											<th>Pekerjaan</th>
											<th>No Telp</th>
											<th>Email</th>
											<th>Pilihan</th>
										</tr>
									</tfoot>
									<tbody>
                                        @foreach($profils as $profil)
										<tr>
											<td></td>
											<td>{{$profil->nama}}</td>
											<td>{{$profil->alamat}}</td>
											<td>{{$profil->pekerjaan}}</td>
											<td>{{$profil->no_telp}}</td>
											<td>{{$profil->email}}</td>
											<td><a href="editinventor.html"  class="btn btn-primary">Edit</a> 
												<button type="button" class="btn btn-danger">Hapus</button></td>
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
@endsection