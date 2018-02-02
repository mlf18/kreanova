@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="{{ route('permission.create') }}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Create</a>
			<table class="table" id="permissionTable">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Permission</th>
					<th>Name Role</th>
					<th> </th>
				</thead>
				<tbody>
					<?php $no = 0; ?>
					@foreach ($permissions as $permission)
						<tr>
							<td>{{ $no = $no +1 }}</td>
							<td>{{ $permission->name }}</td>
							<td>
								@foreach ($permission->roles as $role)
									{{ $role->name }},
								@endforeach
							</td>
							<td>
								<div class="box-button">
									<a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
								</div>
								<div class="box-button">
	 								<form action="{{ route('permission.destroy', $permission->id) }}" method="POST">
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
			<div class="pagination">
				{{ $permissions->links() }}
			</div>	
		</div>
		
	</div>

@endsection

@section('scripts')
	@include('permission._js')
@endsection