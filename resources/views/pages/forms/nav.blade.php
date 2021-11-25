@extends('layout.master')

@section('content')

@if($nav != null)
<div class="row">

  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          @if(session()->has('message'))
               <div class="alert alert-success">
                   {{ session()->get('message') }}
               </div>
            @endif
            @if(count($errors)>0)

  <div class="alert alert-danger" >
   <ul>
       @foreach($errors->all() as $error)

      <li>{{$error}}</li>

      @endforeach
  </ul>
</div>

   
   @endif 
        <h6 class="card-title">Nav Item</h6>
        <form class="forms-sample" method="post" action="{{route('post.navitem',['id'=>$nav->id])}}" enctype="multipart/form-data">

          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 1</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_one" id="exampleInputUsername2" value="{{$nav->nav_one}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_two" id="exampleInputUsername2"  value="{{$nav->nav_two}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_three" id="exampleInputUsername2"  value="{{$nav->nav_three}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 4</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_four" id="exampleInputUsername2"  value="{{$nav->nav_four}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 5</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_five" id="exampleInputUsername2"  value="{{$nav->nav_five}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 6</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_six" id="exampleInputUsername2"  value="{{$nav->nav_six}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 7</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_seven" id="exampleInputUsername2"  value="{{$nav->nav_seven}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 8</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_seven" id="exampleInputUsername2"  value="{{$nav->nav_eight}}">
            </div>
          </div>
         
         



          

          

         <!--  <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
            </div>
          </div> -->
         <!--  <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
            </div>
          </div> -->
         <!--  <div class="form-check form-check-flat form-check-primary mt-0">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          @if(session()->has('logomessage'))
               <div class="alert alert-success">
                   {{ session()->get('logomessage') }}
               </div>
            @endif
        <h6 class="card-title">Nav logo</h6>
        <form class="forms-sample" method="post" action="{{route('post.logo',['id'=>$nav->id])}}" enctype="multipart/form-data">

          {{ csrf_field() }}

           <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/logo/{{$nav->logo}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="logo">
                        
              </div>
          
              </div>
          
         
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
</div>
@else
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    @if(session()->has('message'))
               <div class="alert alert-success">
                   {{ session()->get('message') }}
               </div>
            @endif
 Navbar Create
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Nav Item</h6>
        <form class="forms-sample" method="post" action="{{route('create.navitem')}}" enctype="multipart/form-data">

          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 1</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_one" id="exampleInputUsername2" placeholder="Nav Manu 1">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_two" id="exampleInputUsername2" placeholder="Nav Manu 2">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_three" id="exampleInputUsername2" placeholder="Nav Manu 3">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 4</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_four" id="exampleInputUsername2" placeholder="Nav Manu 4">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 5</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_five" id="exampleInputUsername2" placeholder="Nav Manu 5">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 6</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_six" id="exampleInputUsername2" placeholder="Nav Manu 6">
            </div>
          </div>
            <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 7</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_seven" id="exampleInputUsername2" placeholder="Nav Manu 7">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 8</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_eight" id="exampleInputUsername2" placeholder="Nav Manu 8">
            </div>
          </div>
          

          <div class="form-group">
              <label>Logo</label>
          <input type="file" class="form-control" name="logo">
              
          </div>



          

          

         <!--  <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
            </div>
          </div> -->
         <!--  <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
            </div>
          </div> -->
         <!--  <div class="form-check form-check-flat form-check-primary mt-0">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>



      </div>
    </div>
  </div>
 
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
 <!-- end modal -->

@endif
<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imgPreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

  $("#imageIn").change(function() {
    readURL(this);
  });
</script>
@endsection