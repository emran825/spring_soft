@extends('layout.master')

@section('content')
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
        <h6 class="card-title">OUR SERVICES</h6>
        <form class="forms-sample" method="post" action="{{route('post.service',['id'=>$service->id])}}" enctype="multipart/form-data">

          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="service_name" id="exampleInputUsername2" value="{{$service->service_name}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Topic</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="service_topic" id="exampleInputUsername2" value="{{$service->service_topic}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Service Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote" name="service_details">{{$service->service_details}}</textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Service Class</label>
            <div class="col-sm-9">
               <input type="text" class="form-control" name="service_class" value="{{$service->service_class}}">
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
        <h6 class="card-title">Service logo</h6>
        <form class="forms-sample" method="post" action="{{route('post.servicelogo',['id'=>$service->id])}}" enctype="multipart/form-data">

          {{ csrf_field() }}

           <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/service/{{$service->service_image}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="servicelogo">
                        
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