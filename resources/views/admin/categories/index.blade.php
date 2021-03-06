@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-header">
		    <h5>Categories</h5>	
	  	</div>
	
		<div class="card-body">
						
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
					@forelse($categories as $category)
						<tr>
							<td>
								{{$category->name}}
							</td>
							<td><a href="{{route('category.edit',['id' => $category->id])}}" class="btn btn-info">Edit</a></td>
							<td><a href="{{route('category.delete',['id' => $category->id])}}" class="btn btn-danger">Delete</a></td>
						</tr>
					@empty
						<tr>
							<th colspan="5" class="text-center">No categories yet.</th>
						</tr>
					@endforelse
				</tbody>
				
			</table>
		</div>
		
	</div>



@endsection