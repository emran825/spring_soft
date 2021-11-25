@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
  </ol>
</nav>

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
        <h6 class="card-title">Blog</h6>
        <form class="forms-sample" method="post" action="{{route('post.blog',['id'=>$blog->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Blog Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="blog_title" id="exampleInputUsername2" value="{{$blog->blog_title}}">
            </div>
          </div> 
          
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Blog Discription</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control"  name="blog_discription">{{$blog->blog_discription}}</textarea>
            </div>
          </div>
            <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Blog Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote" name="blog_details">{{$blog->blog_details}}</textarea>
            </div>
          </div>
             <div class="form-group row">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Blog Type</label>
            <div class="col-sm-9">
             <select class="form-control" id="inlineFormCustomSelect" name="blog_type">
               <option selected>{{$blog->blog_type}}</option>
               <option value="business">Business</option>
               <option value="Tips">Tips</option>
               <option value="bank">Bank</option>
              </select>
          </div>
        </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Blog Author</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="blog_author" id="exampleInputUsername2" value="{{$blog->blog_author}}">
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
           @if(session()->has('imagemessage'))
               <div class="alert alert-success">
                   {{ session()->get('imagemessage') }}
               </div>
        @endif
        <h6 class="card-title">Blog logo</h6>
        <form class="forms-sample" method="post" action="{{route('post.blogLogo',['id'=>$blog->id])}}" enctype="multipart/form-data">

          {{ csrf_field() }}

           <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/resource/{{$blog->blog_image}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="blog_image">
                        
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
<script type="text/javascript">
  
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>

@endsection