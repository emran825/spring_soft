@extends('layout.master')

@section('content')

@if($about != null)
<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
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
        <h6 class="card-title">About</h6>
        <form class="forms-sample" method="post" action="{{route('post.about',['id'=>$about->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title_name" id="exampleInputUsername2" value="{{$about->title_name}}">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title Highlight</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="highlite_name" id="exampleInputUsername2" value="{{$about->highlite_name}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title Next</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="next_title" id="exampleInputUsername2" value="{{$about->next_title}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">About Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="about_details">{{$about->about_details}}</textarea>
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
   <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
         @if(session()->has('ceomessage'))
               <div class="alert alert-success">
                   {{ session()->get('ceomessage') }}
               </div>
         @endif
        <h6 class="card-title">CEO Image</h6>
        <form class="forms-sample" method="post" action="{{route('post.ceologo',['id'=>$about->id])}}" enctype="multipart/form-data">
         
          {{ csrf_field() }}

            <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/about/{{$about->ceo_image}}" id="ceoImage" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="ceoInput" name="ceo_image">
                        
              </div>
          
              </div>
         
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
         @if(session()->has('aboutmessage'))
               <div class="alert alert-success">
                   {{ session()->get('aboutmessage') }}
               </div>
        @endif
        <h6 class="card-title">About Image</h6>
        <form class="forms-sample" method="post" action="{{route('post.bglogo',['id'=>$about->id])}}" enctype="multipart/form-data">
         
          {{ csrf_field() }}

            <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/background/{{$about->bg_image}}" id="bgImage" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="bgImageIn" name="bg_image">
                        
              </div>
          
              </div>
         
          <button type="submit" class="btn btn-primary mr-2">Save</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
</div>
@else
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 About Create
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
      <h6 class="card-title">About</h6>
        <form class="forms-sample" method="post" action="{{route('create.about')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="title_name" id="exampleInputUsername2" placeholder="Banner Name">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title Highlight</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="highlite_name" id="exampleInputUsername2" placeholder="Banner Name Highlite">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title Next</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="next_title" id="exampleInputUsername2" placeholder="Banner next part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">About Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="about_details"></textarea>
            </div>
          </div>
          <div class="form-group">
              <label>Banner Image</label>
              <input type="file" class="form-control" name="bg_image">
              
          </div>
          <div class="form-group">
              <label>CEO Image</label>
              <input type="file" class="form-control" name="ceo_image">
              
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
<script type="text/javascript">
  ceoInput.onchange = evt => {
  const [file] = ceoInput.files
  if (file) {
          ceoImage.src = URL.createObjectURL(file)
  }
}
 bgImageIn.onchange = evt => {
  const [file] = bgImageIn.files
  if (file) {
          bgImage.src = URL.createObjectURL(file)
  }
}

</script>



@endsection