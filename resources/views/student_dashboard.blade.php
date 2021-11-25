@extends('layout.master3')
@section('title')
Essential-infotech Dashboard
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Student Dashboard   <a href="{{url('/')}}">   Home</a></h4>
  </div>
  
</div>

@if($curr_course_details !=null)

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Course Name</h6>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
               
                <h5 class="mb-2">
                {{$curr_course_details->course_name}}
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
     
       <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Class Schedule</h6>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-xl-12">
               
    
        <h5>{{$curr_course_details->class_schedule}}</h5>
       
              </div>
         
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Course Duration</h6>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-xl-12">
               
    
        <h5>{{$curr_course_details->course_duration}}</h5>
       
              </div>
         
            </div>
          </div>
        </div>
      </div>
    


     </div>
 </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Course Instructor</h6>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
               
                <h5 class="mb-2">
                {{$curr_course_details->course_instructor}}
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
     
       <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Vanue</h6>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-xl-12">
               
    
        <h5>{{$curr_course_details->venue}}</h5>
       
              </div>
         
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Total Class</h6>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-xl-12">
               
    
        <h5>{{$curr_course_details->no_ofclass}}</h5>
       
              </div>
         
            </div>
          </div>
        </div>
      </div>
    


     </div>
 </div>
</div>
<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Class Pending</h6>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-xl-12">
               
    
        <h5>{{$curr_course_details->no_ofclass - $curr_course_details->course_done }}</h5>
       
              </div>
         
            </div>
          </div>
        </div>
      </div>
     


     </div>
 </div>
</div>
@else
<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Course Name</h6>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
               
                <h5 class="mb-2">
                 You are not enroll any courses
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      
           
    


     </div>
 </div>
</div>
@endif


@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush
