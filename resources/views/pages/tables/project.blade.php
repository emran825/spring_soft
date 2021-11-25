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
 Project Create
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
        <h6 class="card-title">Project</h6>
           <form class="forms-sample" method="post" action="{{route('create.project')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Project Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="project_name" placeholder="Project Name" >
          </div>
          <div class="form-group">
            <label>Client Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="client_name" placeholder="clients Name">
          </div>
          <div class="form-group">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label>Project Type</label>
            
             <select class="form-control" id="inlineFormCustomSelect" name="project_type">
               <option selected>Project Type</option>
               <option value="web">Web</option>
               <option value="app">App</option>
               <option value="card">Card</option>
              </select>
          </div>
          <div class="form-group">
            <label>Project Awards</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="project_awards" placeholder="project awards">
          </div>
            <div class="form-group">
            <label>Project Demo Link</label>
            <input type="txt" class="form-control" id="exampleInputEmail1" name="demo_link" placeholder="link">
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Project Details</label>
               <textarea type="text" class="form-control" id="summernote" name="project_details"></textarea>
          
          </div>
            <div class="form-group">
              <label>Project Image</label>
              <input type="file" class="form-control" name="project_image">
              
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
                Project Image
                </th>
                <th>
                 Project Name
                </th>
                <th>
                 Clint Name
                </th>
                <th>
                 Project Type
                </th>
                 <th>
                  Action
                </th>
                <th>
                  Delete
                </th>
              </tr>
            </thead>
            <tbody>
            	@foreach($project as $data)
            	
              <tr>
              	
                <td class="py-1">
                  <img src="{{ asset('frontend') }}/project/images/{{$data->project_image}}" alt="image">
                </td>

                <td>
                 <a href="{{route('get.projectForm',['id'=>$data->id])}}"> {{ $data->project_name }}
                 </a>
                </td>
                <td>
                 {{ $data->client_name }}
                </td>
                <td>
                 {{ $data->project_type }}
                </td>
               
                <td>
                <a href="{{route('get.projectForm',['id'=>$data->id])}}">
                Edit
                </a>
                </td>
                 <td>
                <a href="{{route('project.remove',['id'=>$data->id])}}">
                delete
              <!--   </a> -->
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
@endsection