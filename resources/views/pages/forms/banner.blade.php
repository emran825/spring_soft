@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-lg-6 grid-margin stretch-card">
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
        <h6 class="card-title">Banner</h6>
        <form class="forms-sample" method="post" action="{{route('post.banner',['id'=>$banner->id])}}">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Banner Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="banner_name" id="exampleInputUsername2" value="{{$banner->banner_name}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Highlight Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="highlight_name" id="exampleInputUsername2" value="{{$banner->highlight_name}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Next Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="next_name" id="exampleInputUsername2" value="{{$banner->next_name}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Banner Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="banner_details">{{$banner->banner_details}}</textarea>
            </div>
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
          <button type="submit" class="btn btn-primary mr-2">Save</button>
         <!--  <button class="btn btn-light">Cancel</button> -->
        </form>




      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
         @if(session()->has('bannermessage'))
               <div class="alert alert-success">
                   {{ session()->get('bannermessage') }}
               </div>
            @endif
        <h6 class="card-title">Banner Image Update</h6>
        <form class="forms-sample" method="post" action="{{route('post.banner-image',['id'=>$banner->id])}}" enctype="multipart/form-data">

          {{ csrf_field() }}

           <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/main-slider/{{$banner->bg_image}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="bg_image">
                        
              </div>
          
              </div>
          
         
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
 
</div>

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
