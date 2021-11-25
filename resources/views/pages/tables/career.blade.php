@extends('layout.master')

@section('content')

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description">
          Add class <code>.table-striped</code>
        </p>
        <!-- Button trigger modal -->
          @if(session()->has('message'))
               <div class="alert alert-success">
                   {{ session()->get('message') }}
               </div>
            @endif
       @if(session()->has('delete'))
               <div class="alert alert-danger">
                   {{ session()->get('delete') }}
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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Job Create
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
        <h6 class="card-title">Job</h6>
           <form class="forms-sample" method="post" action="{{route('post.job')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Job title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="job_name" placeholder="Job Title" >
          </div>
          <div class="form-group">
            <label>Job Details</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="job_details" placeholder="Job Details">
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Job Responsibilities</label>
               <textarea type="text" class="form-control" id="summernote" name="job_res"></textarea>
          
          </div>
            <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Primary Requirements</label>
               <textarea type="text" class="form-control" id="summernote1" name="p_req"></textarea>
          
          </div>
          <div class="form-group">
            <label>Experience</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="experience" placeholder="Experience">
          </div>
           <div class="form-group">
            <label>Educational Requirements</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="e_req" placeholder="Educational Requirements">
          </div>
           <div class="form-group">
            <label>Salary Range</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="s_range" placeholder="BDT(Monthly)">
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Benifits</label>
               <textarea type="text" class="form-control" id="summernote2" name="benifits"></textarea>
          
          </div>

          <div class="form-group">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label>Job Type</label>
            
             <select class="form-control" id="inlineFormCustomSelect" name="job_type">
               <option selected>Job Type</option>
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
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
         <!--  <button class="btn btn-light">Cancel</button> -->
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
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
               
                <th>
                Job Title
                </th>
                <th>
                 job Details
                </th>
                <th>
                 Job Type
                </th>
                 <th>
                Edit
                </th>
                <th>
                  Delete
                </th>
              </tr>
            </thead>
            <tbody>
            	@foreach($career as $data)
            	
              <tr>
              	
               

                <td>
                 <a href="{{route('get.careeradminforms',['id'=>$data->id])}}">
                  {{ $data->job_name }}
                </a>
                </td>
                <td>
                 {{Str::limit($data->job_details, 15)}} 
                <td>
                 {{ $data->job_type }}
                </td>
              
                <td>
                <a href="{{route('get.careeradminforms',['id'=>$data->id])}}">
                Edit
                </a>
                </td>
                 <td>
                <a href="{{route('job.delete',['id'=>$data->id])}}">
                delete
                </a>
            
                </td>
           
              </tr>
          
              @endforeach
              
            </tbody>
          </table>
        </div>
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