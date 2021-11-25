@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Banner</h6>
        <form class="forms-sample" method="post" action="{{route('post.banner')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Banner Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="banner_name" id="exampleInputUsername2" placeholder="Banner Name">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Highlight Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="highlight_name" id="exampleInputUsername2" placeholder="Banner Name Highlite">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Next Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="next_name" id="exampleInputUsername2" placeholder="Banner next part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Banner Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="banner_details"></textarea>
            </div>
          </div>
          <div class="form-group">
              <label>Backgroung Image</label>
              <input type="file" class="form-control" name="bg_image">
              
          </div>
         <!--  <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
          </div> -->
          <!-- <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
         <!--  <button class="btn btn-light">Cancel</button> -->
        </form>




      </div>
    </div>
  </div>
 
</div>
@endsection
