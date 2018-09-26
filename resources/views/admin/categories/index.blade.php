@extends('layouts.app')
@section('content')
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>Categories</h3>
			<table class="table table-hover">
				<thead>
					<th>
						Category name
					</th>
					<th>
						Editing
					</th>
					<th>
						Deleting
					</th>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>
								{{$category->name}}
							</td>
							<td><a class="btn btn-info">Edit</a></td>
							<td><a class="btn btn-danger">Delete</a></td>
						</tr>
					@endforeach
				</tbody>
				
			</table>
		</div>
	</div>



@endsection