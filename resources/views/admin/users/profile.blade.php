@extends('layouts.app')
@section('content')

    @include('includes.errors')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit profile</h3>
        </div>
        <div class="card-body">
            
            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="Password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook profile</label>
                    <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
                </div>
                <div class="form-group">
                    <label for="youtube">Youtube profile</label>
                    <input type="text" name="youtube" class="form-control"value="{{$user->profile->youtube}}">
                </div>
                <div class="form-control">
                    <label for="about">About you</label>
                    <textarea name="about" cols="6" rows="6" id="about" class="form-control">{{$user->profile->about}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

@endsection

