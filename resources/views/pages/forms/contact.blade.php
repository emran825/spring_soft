@extends('layout.master')

@section('content')
@if($contact != null)
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
        <h6 class="card-title">Our Details</h6>
        <form class="forms-sample" method="post" action="{{route('update.details',['id'=>$contact->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Thana</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="thana" id="exampleInputUsername2" value="{{$contact->thana}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Div/District</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="district" id="exampleInputUsername2" value="{{$contact->district}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">House No</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="house_no" id="exampleInputUsername2" value="{{$contact->house_no}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Floor No</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="floor_no" id="exampleInputUsername2" value="{{$contact->floor_no}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Road No</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="road_no" id="exampleInputUsername2" value="{{$contact->road_no}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sector</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="sector" id="exampleInputUsername2" value="{{$contact->sector}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Uk Office Road Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="uk_road" id="exampleInputUsername2" value="{{$contact->uk_road}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Uk Office Phone Number</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="uk_phone" id="exampleInputUsername2" value="{{$contact->uk_phone}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Working Hours</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="working_hours" id="exampleInputUsername2" value="{{$contact->working_hours}}">
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
</div>
@else
  @if(session()->has('message'))
               <div class="alert alert-success">
                   {{ session()->get('message') }}
               </div>
            @endif
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 
 Contact Create
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
         <h6 class="card-title">Our Details</h6>
        <form class="forms-sample" method="post" action="{{route('our.details')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Thana</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="thana" id="exampleInputUsername2" placeholder="Thana">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Div/District</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="district" id="exampleInputUsername2" placeholder="Div/District">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">House No</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="house_no" id="exampleInputUsername2" placeholder="House No">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Floor No</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="floor_no" id="exampleInputUsername2" placeholder="Floor No">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Road No</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="road_no" id="exampleInputUsername2" placeholder="Road No">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sector</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="sector" id="exampleInputUsername2" placeholder="Sector#9, Dhaka 1230">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Uk Office Road Number</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="uk_road" id="exampleInputUsername2" placeholder="">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Uk Office Phone Number</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="uk_phone" id="exampleInputUsername2">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Working Hours</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="working_hours" id="exampleInputUsername2" placeholder="Sun - Sat: 10.00 - 18.00, Friday closed">
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
 @endif

@endsection