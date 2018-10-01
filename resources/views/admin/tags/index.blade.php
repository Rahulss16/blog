@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-header">
		    <h5>Tags</h5>	
	  	</div>
	
		<div class="card-body">
						
			<table class="table table-hover">
				<thead>
					<th>
						Tag name
					</th>
					<th>
						Editing
					</th>
					<th>
						Deleting
					</th>
				</thead>
				<tbody>
					@forelse($tags as $tag)
						<tr>
							<td>
								{{$tag->tag}}
							</td>
							<td><a href="{{route('tag.edit',['id' => $tag->id])}}" class="btn btn-info">Edit</a></td>
							<td><a href="{{route('tag.delete',['id' => $tag->id])}}" class="btn btn-danger">Delete</a></td>
						</tr>
					@empty
						<tr>
							<th colspan="5" class="text-center">No tag yet.</th>
						</tr>
					@endforelse
				</tbody>
				
			</table>
		</div>
		
	</div>



@endsection