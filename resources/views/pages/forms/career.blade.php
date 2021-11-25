@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
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
       <h6 class="card-title">Job</h6>
           <form class="forms-sample" method="post" action="{{route('update.career',['id'=>$job->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Job title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="job_name" value="{{$job->job_name}}" >
          </div>
            <div class="form-group ">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Details</label>
               <textarea type="text" class="form-control"  name="job_details">{{$job->job_details}}</textarea>
          
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Responsibilities</label>
               <textarea type="text" class="form-control" id="summernote" name="job_res">{{$job->job_res}}</textarea>
          
          </div>
            <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Primary Requirements</label>
               <textarea type="text" class="form-control" id="summernote1" name="p_req">{{$job->p_req}}</textarea>
          
          </div>
          <div class="form-group">
            <label>Experience</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="experience" placeholder="Experience" value="{{$job->experience}}">
          </div>
           <div class="form-group">
            <label>Educational Requirements</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="e_req" value="{{$job->e_req}}" placeholder="Educational Requirements">
          </div>
           <div class="form-group">
            <label>Salary Range</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="s_range" value="{{$job->s_range}}" placeholder="BDT(Monthly)">
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Benifits</label>
               <textarea type="text" class="form-control" id="summernote2" name="benifits">{{$job->benifits}}</textarea>
          
          </div>
          <div class="form-group">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label>Job Type</label>
            
             <select class="form-control" id="inlineFormCustomSelect" name="job_type">
               <option selected>{{$job->job_type}}</option>
               <option value="development">Development</option>
               <option value="marketing">Marketing</option>
               <option value="hr">HR</option>
               <option value="editor">Editor</option>
              </select>
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
   
</div>
<script type="text/javascript">
 
$(document).ready(function() {
  $('#summernote').summernote();
});
$(document).ready(function() {
  $('#summernote1').summernote();
});
$(document).ready(function() {
  $('#summernote2').summernote();
});


</script>

@endsection