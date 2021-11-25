@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('tables/why-learn-course') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "> Why to Learn List

            </a>
            <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;">   Edit</h6>
        </div>
            <div class="card-body">
              @if(Session::has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
                <form class="forms-sample" method="post" action="{{route('why-learn-course.update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden"  name="id" value="{{ $learn->id }}">
                    
                    {{-- <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="educationDate" name="course_id">

                                @foreach($course as $course)
                                 <option value="{{ $course->id }}" {{$learn->course_id  == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                                
                                @endforeach

                            </select>
                        </div>
                    </div> --}}

                     <div class="form-group row">
                   
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Course Name</label>
                        <div class="col-sm-9">
                           <p><strong><h4 style="color:red">{{ $course->course_name }}</h4></strong></p>


                        </div>
                      
                    </div>



                     
                    <div id="education_fields">

                    </div>
                    @foreach($whylearns as $whylearns)
                     <input type="hidden"  name="why_id[]" value="{{ $whylearns->id }}">
                     <div class="form-group row nopadding">
                   
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Why To Learn</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="why_learn[]" value="{{ $whylearns->why_learn }}" id="exampleInputUsername2" placeholder="Banner Name Highlite">


                        </div>
                        {{-- <div class="input-group-btn col-sm-2">
                            <button class="btn btn-success btn-sm" style="float:right;" type="button" onclick="education_fields();">add </button>
                        </div> --}}
                    </div>
                        
                    @endforeach
                   

                    <div class="clear"></div>



                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <!--  <button class="btn btn-light">Cancel</button> -->
                </form>


            </div>
        </div>
    </div>
</div>


<script>
    var room = 1;

    function education_fields() {

        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<input type="hidden"  name="why_id[]" value="{{ $whylearns->id }}"><div class="form-group row nopadding"><label for="exampleInputUsername2" class="col-sm-3 col-form-label">Why To Learn </label><div class="col-sm-7"><input type="text" class="form-control" name="why_learn[]" id="exampleInputUsername2" placeholder="Banner Name Highlite"></div><div class="input-group-btn col-sm-2"><button class="btn btn-danger btn-sm" style="float:right;" type="button" onclick="remove_education_fields(' + room + ');">remove</button></div></div><div class="clear"></div>';

        objTo.appendChild(divtest)
    }

    function remove_education_fields(rid) {
        $('.removeclass' + rid).remove();
    }

</script>


@endsection

