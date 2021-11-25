@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
  </ol>
</nav>
@if($header != null)
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
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

        <h6 class="card-title">Header Update</h6>
        <form class="forms-sample" method="post" action="{{route('update.header',['id'=>$header->id])}}" enctype="">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$header->email}}">
          </div>
          <div class="form-group">
            <label>Phone No</label>
            <input type="txt" name="phone" class="form-control"  value="{{$header->phone}}">
          </div>
          <div class="form-group">
            <label>Open Time</label>
            <input type="txt" name="open_time" class="form-control"  value="{{$header->open_time}}">
          </div>
          <div class="form-group">
            <label>Fb Link</label>
            <input type="txt" name="f_link" class="form-control"  value="{{$header->f_link}}">
          </div>
           <div class="form-group">
            <label>Insta Link</label>
            <input type="txt" name="i_link" class="form-control"  value="{{$header->i_link}}">
          </div>
          <div class="form-group">
            <label>Twitter Link</label>
            <input type="txt" name="t_link" class="form-control"  value="{{$header->t_link}}">
          </div>
          <div class="form-group">
            <label>Youtube Link</label>
            <input type="txt" name="u_link" class="form-control"  value="{{$header->u_link}}">
          </div>
            
          <div class="form-group">
            <label>Copyright</label>
            <input type="txt" name="copyright" class="form-control"  value="{{$header->copyright}}">
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
          <button type="submit" class="btn btn-primary mr-2">Update</button>
         <!--  <button class="btn btn-light">Cancel</button> -->
        </form>




      </div>
    </div>
  </div>
 
</div>
@else
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
   @if(session()->has('message'))
               <div class="alert alert-success">
                   {{ session()->get('message') }}
               </div>
            @endif
 Header Create
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
       <h6 class="card-title">Header Update</h6>
        <form class="forms-sample" method="post" action="{{route('post.header')}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Phone No</label>
            <input type="number" name="phone" class="form-control"  placeholder="phone no">
          </div>
          <div class="form-group">
            <label>Open Time</label>
            <input type="txt" name="open_time" class="form-control"  placeholder="Sun - Sat: 9.00 - 18.00, Always Open">
          </div>
          <div class="form-group">
            <label>Fb Link</label>
            <input type="txt" name="f_link" class="form-control"  placeholder="Fb Link">
          </div>
           <div class="form-group">
            <label>Insta Link</label>
            <input type="txt" name="i_link" class="form-control"  placeholder="Insta Link">
          </div>
          <div class="form-group">
            <label>Twitter Link</label>
            <input type="txt" name="t_link" class="form-control"  placeholder="Twitter Link">
          </div>
          <div class="form-group">
            <label>Youtube Link</label>
            <input type="txt" name="u_link" class="form-control"  placeholder="Youtube Link">
          </div>
           <div class="form-group">
            <label>Copyright</label>
            <input type="txt" name="copyright" class="form-control" placeholder="copyright">
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