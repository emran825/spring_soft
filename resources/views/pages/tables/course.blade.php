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
       @if(session()->has('error'))
               <div class="alert alert-danger">
                   {{ session()->get('error') }}
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
 Course Create
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
        <h6 class="card-title">Course At A Glance</h6>
        <form class="forms-sample" method="post" action="{{route('course.create')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="course_name" id="exampleInputUsername2" >
            </div>
          </div> 
             <div class="form-group row">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Type</label>
            <div class="col-sm-9">
             <select class="form-control" id="inlineFormCustomSelect" name="course_type">
               <option selected>Course Type</option>
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
              <input type="text" class="form-control" name="course_details" id="exampleInputUsername2" >
            </div>
          </div> 
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Duration</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="course_duration" id="exampleInputUsername2" >
            </div>
          </div> 
          
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">No. of Classes</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="no_ofclass" id="exampleInputUsername2">
            </div>
          </div>
             <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Total Hours</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="total_hours" id="exampleInputUsername2">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Deadline</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="reg_deadline" id="exampleInputUsername2" >
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Class Schedule</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="class_schedule" id="exampleInputUsername2">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Why learns</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote" name="why_learns"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Course Content</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote1" name="content"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Teacher</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="ins" id="exampleInputUsername2">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Venue</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="venue" id="exampleInputUsername2">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Crouse Price</label>
           <div class="col-sm-9">
              <input type="number" class="form-control" name="course_price" id="exampleInputUsername2">
            </div>
          </div>
            <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="course_image">
                        
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
                Course Image
                </th>
                <th>
                 Course Name
                </th>
                <th>
                 Course Duration
                </th>
                <th>
               Registation Deadline
                </th>
                <th>
               Vanue
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
            	@foreach($course as $data)
            	
              <tr>
              	
                <td class="py-1">
                  <img src="{{ asset('frontend') }}/course/{{$data->course_image }}" alt="image">
                </td>

                <td>
                 <a href="{{route('get.CourseForm',['id'=>$data->id])}}"> {{$data->course_name}}</a>
                </td>
                <td>
                 {{$data->course_duration}}
                </td>
                <td>
                 {{$data->reg_deadline}}
                </td>
                <td>
                 {{$data->venue}}
                </td>
                <td>
                <a href="{{route('get.CourseForm',['id'=>$data->id])}}">
                Edit
                </a>
                </td>
                 <td>
                <a href="{{route('course.remove',['id'=>$data->id])}}">
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
</script>
<script type="text/javascript">
 
$(document).ready(function() {
  $('#summernote1').summernote();
});
</script>



@endsection