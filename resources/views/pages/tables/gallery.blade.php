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
 Gallery Create
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
        <h6 class="card-title">Gallery</h6>
        <form class="forms-sample" method="post" action="{{route('create.gallery')}}" enctype="multipart/form-data">
          {{ csrf_field() }}

           <div class="form-group">
            <!-- <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type"> -->
              <label>Gallary Type</label>
            
             <select class="form-control" id="inlineFormCustomSelect" name="gallery_type">
               <option selected>Gallary Type</option>
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
           
         
          <div class="form-group">
              <label>Gallery Image</label>
              <input type="file" class="form-control" name="gallery_image">
              
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
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>
               Gallery Image
                </th>
                <th>
               Gallery Type
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
              @foreach($gallery as $data)
              
              <tr>
                
                <td class="py-1">
                  <img src="{{ asset('frontend') }}/images/gallery/{{$data->gallery_image}}" alt="image">
                </td>

                <td>
                 <a href="{{route('get.GalleryForm',['id'=>$data->id])}}"> {{ $data->gallery_type }}
                 </a>
                </td>
               <td>
                <a href="{{route('get.GalleryForm',['id'=>$data->id])}}">
                Edit
                </a>
                </td>
                 <td>
                <a href="{{route('sponsor.remove',['id'=>$data->id])}}">
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