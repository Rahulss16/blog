@extends('layouts.app')
@section('content')

	@include('includes.errors')
	<div class="card">
		<div class="card-header">
		    <h3 class="card-title">Create a new post</h3>
	  	</div>
		<div class="card-body">
			
			<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="featured">Featured Image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Select a category</label>
					<select name="category_id" id="category" class="form-control">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store post</button>
					</div>
				</div>
				
			</form>
		</div>
	</div>

@endsection

