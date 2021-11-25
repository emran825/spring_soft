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
        <h6 class="card-title">Footer</h6>
        <form class="forms-sample" method="post" action="{{route('update.footer',['id'=>$sk->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title" id="exampleInputUsername2" value="{{$sk->title}}
">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link1" id="exampleInputUsername2" value="{{$sk->link1}}
">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link2" id="exampleInputUsername2" value="{{$sk->link2}}
">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link3" id="exampleInputUsername2" value="{{$sk->link3}}
">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link4" id="exampleInputUsername2" value="{{$sk->link4}}
">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link5" id="exampleInputUsername2" value="{{$sk->link5}}
">
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

@endsection