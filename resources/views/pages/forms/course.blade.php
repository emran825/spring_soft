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

             @if(session()->has('errormessage'))
               <div class="alert alert-danger">
                   {{ session()->get('errormessage') }}
               </div></small>
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
        <h6 class="card-title">Course At A Glance</h6>
        <form class="forms-sample" method="post" action="{{route('post.course',['id'=>$course->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="course_name" id="exampleInputUsername2" value="{{$course->course_name}}">
            </div>
          </div> 
            <div class="form-group row">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Type</label>
            <div class="col-sm-9">
             <select class="form-control" id="inlineFormCustomSelect" name="course_type">
               <option selected>{{$course->course_type}}</option>
               <option value="web">Web</option>
               <option value="app">App</option>
               <option value="cms">Cms</option>
               <option value="graphics">Graphics</option>
              </select>
               </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Details</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="course_details" value="{{$course->course_details}}" id="exampleInputUsername2" >
            </div>
          </div> 
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Duration</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="course_duration" id="exampleInputUsername2" value="{{$course->course_duration}}">
            </div>
          </div> 
          
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">No. of Classes</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="no_ofclass" id="exampleInputUsername2" value="{{$course->no_ofclass}}">
            </div>
          </div>
         
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Course_done</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="course_done" id="exampleInputUsername2" value="{{$course->course_done}}">
            </div>
          </div>
        
             <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Total Hours</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="total_hours" id="exampleInputUsername2" value="{{$course->total_hours}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Deadline</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="reg_deadline" id="exampleInputUsername2" value="{{$course->reg_deadline}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Class Schedule</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="class_schedule" id="exampleInputUsername2" value="{{$course->class_schedule}}">
            </div>
          </div>
            <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Why learns</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote" name="why_learns"> {!! $course->why_learns !!}</textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Course Content</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote1" name="content"> {!! $course->course_content !!}</textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Teacher</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ins" id="exampleInputUsername2" value="{{$course->course_instructor}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Venue</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="venue" id="exampleInputUsername2" value="{{$course->venue}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Crouse Price</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="course_price" id="exampleInputUsername2" value="{{$course->course_price}}">
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
          @if(session()->has('logomessage'))
               <div class="alert alert-success">
                   {{ session()->get('logomessage') }}
               </div>
            @endif
        <h6 class="card-title">Course Image</h6>
        <form class="forms-sample" method="post" action="{{route('post.courseimage',['id'=>$course->id])}}" enctype="multipart/form-data">
      
          {{ csrf_field() }}

           <div class="text-center">
                <img class="img-fluid" src="{{asset('frontend') }}/course/{{$course->course_image}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="course_image">
                        
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
  
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<script type="text/javascript">
  
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>

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
<script type="text/javascript">
 
$(document).ready(function() {
  $('#summernote1').summernote();
});
</script>


@endsection