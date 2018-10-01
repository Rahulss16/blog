@extends('layouts.app')
@section('content')
	<div class="card">
		<div class="card-header">
		    <h5>Users</h5>	
	  	</div>
	
		<div class="card-body">
						
			<table class="table table-hover">
				<thead>
					<th>
						Image
					</th>
					<th>
						Name
					</th>
					<th>
						Permissions
					</th>
					<th>
						Delete
					</th>
				</thead>
				<tbody>
					@forelse($users as $user)
						<tr>
							<td>
								<img src="{{asset($user->profile->avatar)}}" alt="" width="60px" height="60px" style="border-radius: 50%;">
							</td>
							<td>
								{{$user->name}}
							</td>
							<td>
								@if($user->admin)
									<a href="{{route('user.not.admin',['id'=>$user->id])}}" class="btn btn-danger btn-xs">Remove Permission</a>
								@else
									<a href="{{route('user.admin',['id'=>$user->id])}}" class="btn btn-success btn-xs">Make admin</a>
								@endif
							</td>
							<td>
								@if(Auth::id() !== $user->id)
									<a href="{{route('user.delete',['id'=>$user->id])}}" class="btn btn-danger btn-xs">Delete</a>
								@else
									Logged In
								@endif
							</td>							
						</tr>
					@empty
						<tr>
							<th colspan="5" class="text-center">No users.</th>
						</tr>
					@endforelse
				</tbody>
				
			</table>
		</div>
		
	</div>



@endsection