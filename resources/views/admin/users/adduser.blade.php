@extends('layout.master')
@section('title')
Essential-infotech- All Users
@endsection
@section('content')
<div class="row">
  <div class="col-lg-6 m-auto">
    <div class="card">
      <div class="card-header">
        <h4>Add User</h4>
      </div>
      <div class="card-body">
            @if(session('success'))
	          <div class="alert alert-success">
	            {{session('success')}}
	          </div>
          	@endif
          	<form action="{{url('userpost')}}" method="POST">
              @csrf
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="User Name">
                  @error('name')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
                </div>
                <div class="form-group">
                  <label>User Email</label>
                  <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="User Email">
                  @error('email')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                  <label>User Role</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="role" value="1">&nbsp&nbsp&nbspAdmin
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="role" value="0">&nbsp&nbsp&nbspUser
                  </div>
                  @error('role')
                  <strong class="text-danger">{{$message}}</strong>
                  @enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        	
      </div>
    </div>
</div>
@endsection