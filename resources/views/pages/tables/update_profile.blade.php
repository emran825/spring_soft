@extends('layout.master_customer')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-3">
               
                <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;">Profile Update</h6>
            </div>
            <div class="card-body">


                @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

<form  method="post" action="{{route('update.customer.profile')}}">
   {{ csrf_field() }}


    <div class="form-group row">
        <label class="col-sm-2 col-form-label">First Name</label>
        <div class="col-sm-6">
            <input type="text" name="f_name" value="{{ $update_profile->f_name }}" class="form-control">
             <input type="hidden" name="id" value="{{ $update_profile->id }}" class="form-control">
        </div>
    </div>



    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Last Name</label>
        <div class="col-sm-6">
            <input type="text" name="l_name" value="{{ $update_profile->l_name }}"  class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-6">
            <input type="text" name="phone" value="{{ $update_profile->phone }}"  class="form-control">
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-6">
            <input type="email" name="email" value="{{ $update_profile->email }}" class="form-control" placeholder="Email">
        </div>
    </div>




    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-6">
            <input type="password" name="password" class="form-control" id="myInput" placeholder="Password">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" onclick="myFunction()" id="showpaswd">
                <label class="form-check-label" for="gridCheck1">
                    Show Password
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </div>
</form>

</div>
</div>
</div>

</div>


<script>
  



 function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>







@endsection

