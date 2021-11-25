@extends('layout.master')

@section('content')
@if($chooseus != null)
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
        <h6 class="card-title">WHY CHOOSE US</h6>
        <form class="forms-sample" method="post" action="{{route('update.choose',['id'=>$chooseus->id])}}" >
          {{ csrf_field() }}
          
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bullet Point 1</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="b_point1" id="exampleInputUsername2" value="{{$chooseus->b_point1}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details1">{{$chooseus->details1}}</textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bullet Point 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="b_point2" id="exampleInputUsername2" value="{{$chooseus->b_point2}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details2">{{$chooseus->details2}}</textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bullet Point 3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="b_point3" id="exampleInputUsername2" value="{{$chooseus->b_point3}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details3">{{$chooseus->details3}}</textarea>
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
          <button type="submit" class="btn btn-primary mr-2">Save</button>
         <!--  <button class="btn btn-light">Cancel</button> -->
        </form>




      </div>
    </div>
  </div>

</div>
@else
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Why Choose Us Create
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
        <h6 class="card-title">WHY CHOOSE US</h6>
        <form class="forms-sample" method="post" action="{{route('post.choose')}}" >
          {{ csrf_field() }}
          
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bullet Point 1</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="b_point1" id="exampleInputUsername2" placeholder="Bold Part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details1"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bullet Point 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="b_point2" id="exampleInputUsername2" placeholder="Bold Part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details2"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bullet Point 3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="b_point3" id="exampleInputUsername2" placeholder="Bold Part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details3"></textarea>
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
@endif

@endsection