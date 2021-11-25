@extends('layout.master')
@section('title')
Essential-infotech Dashboard
@endsection
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
@if(Auth::user()->role == 1)
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
  </div>
  
</div>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Total Admin</h6>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <!-- <h3 class="mb-2">{{$total_users}}</h3> -->
                <h3 class="mb-2">@isset($total_users)
                                    {{$total_users}}
                                 @endisset
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <h6 class="card-title mb-0">Total Subscriber</h6>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">@isset($total_subscriber)
                                    {{$total_subscriber}}
                                 @endisset</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
             <a href="{{url('/tables/project') }}"> <h6 class="card-title mb-0">Total Project</h6></a>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">@isset($total_project)
                                    {{$total_project}}
                                 @endisset</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row -->
<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
             <a href="{{url('/tables/blog') }}"> <h6 class="card-title mb-0">Total Blog</h6></a>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <!-- <h3 class="mb-2">{{$total_users}}</h3> -->
                <h3 class="mb-2">@isset($total_blog)
                                    {{$total_blog}}
                                 @endisset
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
              <a href="{{url('/tables/course') }}"><h6 class="card-title mb-0">Total Course</h6></a>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">@isset($total_course)
                                    {{$total_course}}
                                 @endisset</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-baseline">
             <a href="{{url('/tables/Admin/Product-View') }}"> <h6 class="card-title mb-0">Total Product</h6></a>
            </div>
            <div class="row">
              <div class="col-6 col-md-12 col-xl-5">
                <h3 class="mb-2">@isset($total_product)
                                    {{$total_product}}
                                 @endisset</h3>
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
    
    <div class="col-lg-7 m-auto">
      <div class="card">
        <div class="card-header">
          Your Question
        </div>
        <div class="card-body">
          
            <form action="{{url('answerpost')}}" method="POST">
              @csrf

              @php $i = 0; @endphp
             
              @foreach($get_questions as $question)
                <div class="form-group">

                  <table class="table">
                    <tr>
                      <th>{{$question->question}}</th>
                      <input type="hidden" name="id" value="{{$question->id}}">
                      <td>
                        <div>

                          <!-- <select name="answer" class="form-control"> -->
                            <!-- @foreach($get_answer as $answer)
                          <option value="{{$answer->id}}">{{$answer->give_answer}}</option>
                          @endforeach -->
                    <!--       <option value="1">yes</option>
                          <option value="0">no</option> -->
                          
                        <!-- </select> -->
                        <input type="radio" name="answer[{{$i}}]" value="1">Yes &nbsp;<input type="radio" name="answer[{{$i}}]" value="0">No 
                        </div>
                      </td> 
                    </tr>
                  </table>
                </div>
                @php $i++; @endphp
              @endforeach
              <div class="form-group">
                <textarea name="comment" class="form-control" rows="3" cols="5" placeholder="Comment"></textarea>
                <input type="hidden" name="user_id" value="{{Auth::id()}}">
              </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
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
