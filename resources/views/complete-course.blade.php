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
   
  </div>
  
</div>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Total Course</h6>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
               
                <h3 class="mb-2">
                	@isset($total_course)
                   {{$total_course}}
                    @endisset
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      @foreach($course as $data)
       <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">{{$data->course_name}}</h6>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-xl-12">
               
         Course Duration:<br>{{$data->course_duration}}<br>
         Class Schedule:<br>{{$data->class_schedule}}<br>
         Course instructor :<br>{{$data->course_instructor}}<br>
         
              </div>
         
            </div>
          </div>
        </div>
      </div>
      @endforeach


     </div>
 </div>
</div>


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
