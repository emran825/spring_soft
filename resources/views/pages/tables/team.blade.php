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
 team Create
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
        <h6 class="card-title">Team Create</h6>
        <form class="forms-sample" method="post" action="{{route('create.team')}}" enctype="multipart/form-data">

          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="name" id="exampleInputUsername2" placeholder="Name">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Designation</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="designation" id="exampleInputUsername2" placeholder="Designation">
            </div>
          </div>
          <!--  <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Type</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="service_type" id="exampleInputUsername2" placeholder="Service Type">
            </div>
          </div> -->
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Fb Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="f_link" id="exampleInputUsername2" placeholder="Fb Link">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Instagram Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="i_link" id="exampleInputUsername2" placeholder="Instagram Link">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Twitter Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="t_link" id="exampleInputUsername2" placeholder="Twitter Link">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Linkdin Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="l_link" id="exampleInputUsername2" placeholder="Linkdin Link">
            </div>
          </div>
           <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" name="image">
              
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
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
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
                 Image
                </th>
                <th>
                  Name
                </th>
                <th>
                  Designation
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
            	@foreach($team as $data)
            	
              <tr>
              	
                <td class="py-1">
                  <img src="{{ asset('frontend') }}/images/team/{{$data->image}}" alt="image">
                </td>

                <td>
                 <a href="{{route('get.teamForm',['id'=>$data->id])}}"> {{ $data->name }}
                 </a>
                </td>
                <td>
                 {{ $data->designation }}
                </td>
               
               
                <td>
                <a href="{{route('get.teamForm',['id'=>$data->id])}}">
                Edit
                </a>
                </td>
                 <td>
                <a href="{{route('team.remove',['id'=>$data->id])}}">
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


@endsection