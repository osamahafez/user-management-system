@extends('layouts.userLayout')

@section('content')
<div class="container">
        <h3 class="text-center">Edit User</h3>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <form method="POST" action={{url('profile/')}} enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="full_name" value='{{$user->name}}'>
                    @error('name')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value='{{$user->email}}'>
                    @error('email')
                        <div class="invalid-feedback">
                                {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pass">New Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="pass">
                    @error('password')
                    <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" {{($user->gender == 'M')? "checked" : ""}} id="male" name="gender" value="M" class="custom-control-input" />
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" {{($user->gender == 'F')? "checked" : ""}} id="female" name="gender" value="F" class="custom-control-input" />
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birth_date">Birth Date</label>
                    <input type="date" name="birth_date" class="form-control" id="birth_date" value='{{$user->birth_date}}'>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" id="country" value='{{$user->country}}'>
                </div>    
                <div class="form-group">
                    <div class="custom-file">    
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Upload New Image</label>
                    </div>
                </div>
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection