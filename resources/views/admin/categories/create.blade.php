@extends('layouts.app')
@section('content')

	@include('includes.errors')

	<div class="card">
		<div class="card-header">
		    <h3 class="card-title">Create category</h3>
	  	</div>
		<div class="card-body">
			
			<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store category</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>

@endsection

