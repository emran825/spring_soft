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
 Testimonial Create
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
        <h6 class="card-title">TESTIMONIALS</h6>
        <form class="forms-sample" method="post" action="{{route('crete.testimonial')}}" >
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Author</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="author" id="exampleInputUsername2" placeholder="Author">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Designation</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="designation" id="exampleInputUsername2" placeholder="Bold Part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Total Clint </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="clint" id="exampleInputUsername2" placeholder="Total clint ">
            </div>
          </div>
         <!--  <div class="form-group">
              <label>Backgroung Image</label>
              <input type="file" class="form-control" name="bg_image">
              
          </div> -->
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
                Author Name
                </th>
                <th>
                  Designation
                </th>
                <th>
                Details
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
            	@foreach($testimonial as $data)
            	
              <tr>
              	
               
                <td>
                 <a href="{{route('get.testimonialForm',['id'=>$data->id])}}">{{ $data->author }}
                 </a>
                </td>
                <td>
                  {{$data->designation}}
                 
                </td>
                <td>
                 {{$data->details}}
                </td>
               
                <td>
               <a href="{{route('get.testimonialForm',['id'=>$data->id])}}">
                Edit
                </a>
                </td>
                 <td>
                <a href="{{route('testimonial.remove',['id'=>$data->id])}}">
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