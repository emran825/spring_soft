@extends('layout.master')

@section('content')
@if($cta != null)
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
        <h6 class="card-title">CTA SECTION</h6>
        <form class="forms-sample" method="post" action="{{route('update.cta',['id'=>$cta->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title" id="exampleInputUsername2" value="{{$cta->title}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bold Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="bold_title" id="exampleInputUsername2" value="{{$cta->bold_title}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="phone" id="exampleInputUsername2" value="{{$cta->phone}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details">{{$cta->details}}</textarea>
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
  @if(session()->has('message'))
               <div class="alert alert-success">
                   {{ session()->get('message') }}
               </div>
            @endif
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 
 Cta Create
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
       <h6 class="card-title">CTA SECTION</h6>
        <form class="forms-sample" method="post" action="{{route('post.cta')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title" id="exampleInputUsername2" placeholder="Title">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bold Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="bold_title" id="exampleInputUsername2" placeholder="Bold Part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="phone" id="exampleInputUsername2" placeholder="phone no">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details"></textarea>
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