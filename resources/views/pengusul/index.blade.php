@extends('layouts.app')
@section('content')
<div class="row">
	<div class="panel panel-success">
		<div class="panel panel-heading">
			<h4>Applicant Data</h4>
		</div>

		<div class="panel panel-body">
			<div class="col-md-12">
				<div class="pull-right">
					<a href="{{ route('applicant.create') }}" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-plus"></span> New Applicant</a>
				</div>
				<table class="table table-default" id="applicantTable"  >
					<thead>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>School</th>
						<th>Department</th>
						<th>GPA</th>
						<th>Graduated</th>
						<th>Phone</th>
						<th>Position</th>
						<th>Status</th>
						<th>Created At</th>
						<th></th>
					</thead>
					<tbody>
						<?php $no = 0;?>
						@foreach ($applicants as $a)
							<tr>
								<td> {{ $no = $no +1 }} , {{ $a->id }} </td>
								<td> {{ $a->name }} </td>
								<td> {{ $a->email }} </td>
								<td> {{ $a->address }} </td>
								<td> {{ $a->school }}</td>
								<td> {{ $a->sch_department }} </td>
								<td> {{ $a->gpa }} </td>
								<td> {{ $a->graduated_years }}</td>
								<td> {{ $a->phone }}</td>
								<td> {{ $a->position }} </td>
								<td> {{ $a->status }}</td>
								<td> {{ date('d-m-Y', strtotime($a->created_at)) }}</td>

								<td>
									<div class="box-button">
										<a href="{{ route('applicant.edit', $a->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>			
									</div>
									<div class="box-button">
										<form action="{{ route('applicant.destroy', $a->id) }}" method="POST">
				 							{{ csrf_field() }}
				 							<input name="_method" type="hidden" value="DELETE">
											<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Delete</button>
										</form>	
									</div>							
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<div class="pagination justify-content-center">
					{{ $applicants->links() }}
				</div>	
			</div>
		</div>
	</div>
</div>

		
@endsection