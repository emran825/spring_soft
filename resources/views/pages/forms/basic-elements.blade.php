@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
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
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">OUR SERVICES</h6>
        <form class="forms-sample" method="post" action="{{route('post.service')}}">

          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="service_name" id="exampleInputUsername2" placeholder="Service Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Service Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="service_details"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Service Class</label>
            <div class="col-sm-9">
               <input type="text" class="form-control" name="service_class">
            </div>
          </div>
         <!--  <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
            </div>
          </div> -->
         <!--  <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
            </div>
          </div> -->
         <!--  <div class="form-check form-check-flat form-check-primary mt-0">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Project</h6>
        <form class="forms-sample" method="post" action="{{route('post.project')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Project Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="project_name" placeholder="project name">
          </div>
          <div class="form-group">
            <label>Project Type</label>
            <input type="text" name="project_type" class="form-control"  placeholder="project type">
          </div>
          <div class="form-group">
              <label>Project Image</label>
              <input type="file" class="form-control" name="project_image">
              
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
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Nav Item</h6>
        <form class="forms-sample" method="post" action="{{route('post.navitem')}}" enctype="multipart/form-data">

          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 1</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_one" id="exampleInputUsername2" placeholder="Nav Manu 1">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 2</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_two" id="exampleInputUsername2" placeholder="Nav Manu 2">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_three" id="exampleInputUsername2" placeholder="Nav Manu 3">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 4</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_four" id="exampleInputUsername2" placeholder="Nav Manu 4">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 5</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_five" id="exampleInputUsername2" placeholder="Nav Manu 5">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nav Manu 6</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nav_six" id="exampleInputUsername2" placeholder="Nav Manu 6">
            </div>
          </div>
          <div class="form-group">
              <label>Logo</label>
          <input type="file" class="form-control" name="logo">
              
          </div>



          

          

         <!--  <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
            </div>
          </div> -->
         <!--  <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="exampleInputPassword2" autocomplete="off" placeholder="Password">
            </div>
          </div> -->
         <!--  <div class="form-check form-check-flat form-check-primary mt-0">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Remember me
            </label>
          </div> -->
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Banner</h6>
        <form class="forms-sample" method="post" action="{{route('post.banner')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Banner Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="banner_name" id="exampleInputUsername2" placeholder="Banner Name">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Highlight Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="highlight_name" id="exampleInputUsername2" placeholder="Banner Name Highlite">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Next Part</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="next_name" id="exampleInputUsername2" placeholder="Banner next part">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Banner Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" name="banner_details"></textarea>
            </div>
          </div>
          <div class="form-group">
              <label>Backgroung Image</label>
              <input type="file" class="form-control" name="bg_image">
              
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
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">About</h6>
        <form class="forms-sample" method="post" action="{{route('post.about')}}" enctype="multipart/form-data">
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

 <div class="row">
  <div class="col-md-6 grid-margin stretch-card">
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
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Video</h6>
        <form class="forms-sample" method="post" action="{{route('post.video')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Video Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="v_name" id="exampleInputUsername2" placeholder="Video Name">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Video Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="v_link" id="exampleInputUsername2" placeholder="Video Link">
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

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">TESTIMONIALS</h6>
        <form class="forms-sample" method="post" action="{{route('post.testimonial')}}" >
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
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Sponsor</h6>
        <form class="forms-sample" method="post" action="{{route('post.sponsor')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sponsor Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="s_name" id="exampleInputUsername2" placeholder="Sponsors Name">
            </div>
          </div>
          <div class="form-group">
              <label>Sponsor Image</label>
              <input type="file" class="form-control" name="sponsor_image">
              
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





<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
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
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Our Blog</h6>
        <form class="forms-sample" method="post" action="{{route('post.blog')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Blog Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="blog_title" id="exampleInputUsername2" placeholder="Blog Title">
            </div>
          </div> 
          
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label"> Blog Details</label>
            <div class="col-sm-9">
               <textarea type="text" class="form-control" id="summernote" name="blog_details"></textarea>
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Blog Author</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="blog_author" id="exampleInputUsername2" placeholder="Blog Author">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Publish Date</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="publish_date" id="exampleInputUsername2" placeholder="Decmber 14th, 2020">
            </div>
          </div>
          
          
          <div class="form-group">
              <label>blog Image</label>
              <input type="file" class="form-control" name="blog_image">
              
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


 <div class="row">
 
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Map</h6>
        <form class="forms-sample" method="post" action="{{route('post.map')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Map location</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="m_location" id="exampleInputUsername2" placeholder="Map Location">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="m_link" id="exampleInputUsername2" placeholder="Link">
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


   <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">About</h6>
        <form class="forms-sample" method="post" action="{{route('post.cta')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="phone" id="exampleInputUsername2" placeholder="phone no">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="bold_title" id="exampleInputUsername2" placeholder="Bold Part">
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
<div class="row">
 
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Footer</h6>
        <form class="forms-sample" method="post" action="{{route('post.footer')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name=title id="exampleInputUsername2" placeholder="Title">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link1" id="exampleInputUsername2" placeholder="Link">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link2" id="exampleInputUsername2" placeholder="Link">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link3" id="exampleInputUsername2" placeholder="Link">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link4" id="exampleInputUsername2" placeholder="Link">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="link5" id="exampleInputUsername2" placeholder="Link">
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


   <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">About</h6>
        <form class="forms-sample" method="post" action="{{route('post.cta')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="phone" id="exampleInputUsername2" placeholder="phone no">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="bold_title" id="exampleInputUsername2" placeholder="Bold Part">
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





 <div class="row">
 
  <div class="col-md-6 grid-margin stretch-card">
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


   <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">About</h6>
        <form class="forms-sample" method="post" action="{{route('post.cta')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">phone</label>
            <div class="col-sm-9">
              <input type="number" class="form-control" name="phone" id="exampleInputUsername2" placeholder="phone no">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="bold_title" id="exampleInputUsername2" placeholder="Bold Part">
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



<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Inputs</h6>
        <form>
          <div class="form-group">
            <label for="exampleInputText1">Text Input</label>
            <input type="text" class="form-control" id="exampleInputText1" value="Amiah Burton" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email Input</label>
            <input type="email" class="form-control" id="exampleInputEmail3" value="amiahburton@gmail.com" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="exampleInputNumber1">Number Input</label>
            <input type="number" class="form-control" id="exampleInputNumber1" value="6473786">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword3">Password Input</label>
            <input type="password" class="form-control" id="exampleInputPassword3" value="amiahburton" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <label for="exampleInputDisabled1">Disabled Input</label>
            <input type="text" class="form-control" id="exampleInputDisabled1" disabled value="Amiah Burton">
          </div>
          <div class="form-group">
            <label for="exampleInputPlaceholder">Placeholder</label>
            <input type="text" class="form-control" id="exampleInputPlaceholder" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="exampleInputReadonly">Readonly</label>
            <input type="text" class="form-control" id="exampleInputReadonly" readonly value="Amiah Burton">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Input</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected disabled>Select your age</option>
              <option>12-18</option>
              <option>18-22</option>
              <option>22-30</option>
              <option>30-60</option>
              <option>Above 60</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="form-groupp">
            <label for="customRange1">Range Input</label>
            <input type="range" class="custom-range" id="customRange1">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Default checkbox
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" checked class="form-check-input">
                Checked
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" disabled class="form-check-input">
                Disabled checkbox
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" disabled checked>
                Disabled checked
              </label>
            </div>
          </div>
          <div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                Inline checkbox
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" checked class="form-check-input">
                Checked
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" disabled class="form-check-input">
                Inline disabled checkbox
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" disabled checked>
                Disabled checked
              </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios" value="option1">
                Default
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1">
                Default
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios2" value="option2" checked="">
                Selected
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios3" id="optionsRadios3" value="option3" disabled="">
                Disabled
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios4" id="optionsRadios4" value="option4" disabled="" checked="">
                Selected and disabled
              </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios5" id="optionsRadios5" value="option5">
                Default
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios5" id="optionsRadios6" value="option5">
                Default
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios7" id="optionsRadios7" value="option6" checked="">
                Selected
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios8" id="optionsRadios8" value="option7" disabled="">
                Disabled
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optionsRadios9" id="optionsRadios9" value="option8" disabled="" checked="">
                Selected and disabled
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Input Size</h6>
        <p class="mb-3">Use class <code>.form-control-lg</code> or <code>.form-control-sm</code></p>								
        <form>
          <div class="form-group">
            <label for="colFormLabelSm">Small</label>
            <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="form-control-sm">
          </div>
          <div class="form-group">
            <label for="colFormLabel">Default</label>
            <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
          </div>
          <div class="form-group mb-0">
            <label for="colFormLabelLg" class="pb-0">Large</label>
            <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="form-control-lg">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Select Size</h6>
        <p class="mb-3">Use class <code>.form-control-lg</code> or <code>.form-control-sm</code></p>
        <div class="form-group">
          <label>Small</label>
          <select class="form-control form-control-sm mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="form-group">
          <label>Default</label>
          <select class="form-control mb-3">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="form-group">
          <label>Large</label>
          <select class="form-control form-control-lg">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Form Grid</h6>
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">First Name</label>
                  <input type="text" class="form-control" placeholder="Enter first name">
                </div>
              </div><!-- Col -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">Last Name</label>
                  <input type="text" class="form-control" placeholder="Enter last name">
                </div>
              </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label">City</label>
                  <input type="text" class="form-control" placeholder="Enter city">
                </div>
              </div><!-- Col -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label">State</label>
                  <input type="text" class="form-control" placeholder="Enter state">
                </div>
              </div><!-- Col -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label">Zip</label>
                  <input type="text" class="form-control" placeholder="Enter zip code">
                </div>
              </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">Email address</label>
                  <input type="email" class="form-control" placeholder="Enter email">
                </div>
              </div><!-- Col -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" autocomplete="off" placeholder="Password">
                </div>
              </div><!-- Col -->
            </div><!-- Row -->
          </form>
          <button type="button" class="btn btn-primary submit">Submit form</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
 
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection