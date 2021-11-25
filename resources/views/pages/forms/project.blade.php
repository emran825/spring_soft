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
        <h6 class="card-title">Project</h6>
        <form class="forms-sample" method="post" action="{{route('post.project',['id'=>$project->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Project Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="project_name" value="{{$project->project_name}}">
          </div>
          <div class="form-group">
            <label>Client Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="client_name" value="{{$project->client_name}}">
          </div>
          <div class="form-group">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
            
             <select class="form-control" id="inlineFormCustomSelect" name="project_type">
               <option selected>{{$project->project_type}}</option>
               <option value="web">Web</option>
               <option value="app">App</option>
               <option value="card">Card</option>
              </select>
          </div>
          <div class="form-group">
            <label>Project Awards</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="project_awards"value="{{$project->project_awards}}">
          </div>
           <div class="form-group">
            <label>Project Demo link</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="demo_link"value="{{$project->demo_link}}">
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Project Details</label>
               <textarea type="text" class="form-control" id="summernote" name="project_details">{{$project->project_details}}</textarea>
          
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
        <h6 class="card-title">Project Image Update</h6>
        <form class="forms-sample" method="post" action="{{route('post.projectlogo',['id'=>$project->id])}}" enctype="multipart/form-data">
         
          {{ csrf_field() }}

            <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/project/images/{{$project->project_image}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="project_image">
                        
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