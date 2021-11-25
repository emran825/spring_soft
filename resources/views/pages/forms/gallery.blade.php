 @extends('layout.master')

@section('content')
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
         <h6 class="card-title">Gallery</h6>
        <form class="forms-sample" method="post" action="{{route('update.gallery',['id'=>$gallery->id])}}" enctype="multipart/form-data">
          {{ csrf_field() }}

           <div class="form-group">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label>Gallary Type</label>
            
             <select class="form-control" id="inlineFormCustomSelect" name="gallery_type">
               <option selected>{{$gallery->gallery_type}}</option>
               <option value="events">Events</option>
               <option value="seminar1">Seminar1</option>
               <option value="seminar2">Seminar2</option>
               <option value="seminar3">Seminar3</option>
               <option value="award1">Award1</option>
               <option value="award2">Award2</option>
               <option value="award3">Award3</option>
               <option value="award4">Award4</option>
               <option value="award5">Award5</option>
               <option value="award5">Award6</option>
              </select>
             </div>
           
         
                <div class="text-center">
                <img class="img-fluid" src="{{ asset('frontend') }}/images/gallery/{{$gallery->gallery_image}}" id="imgPreview" height="100">
                <br>
                <br>
                <div class="form-group">
                  <input type="file" class="form-control-file" id="imageIn" name="gallery_image">
                        
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
  <script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#imgPreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

  $("#imageIn").change(function() {
    readURL(this);
  });
</script>

  @endsection