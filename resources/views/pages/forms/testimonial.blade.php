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
        <h6 class="card-title">TESTIMONIALS</h6>
        <form class="forms-sample" method="post" action="{{route('post.testimonial',['id'=>$testimonial->id])}}" >
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Author</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="author" id="exampleInputUsername2" value="{{$testimonial->author}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Designation</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="designation" id="exampleInputUsername2" value="{{$testimonial->designation}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="details">{{$testimonial->details}}
               </textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Total Clint </label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="clint" id="exampleInputUsername2" value="{{$testimonial->clint}}">
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
@endsection