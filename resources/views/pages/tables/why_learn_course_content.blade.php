@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
       <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <a href="{{ route('category.add') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Category Add

            </a> --}}

            <button type="button" class="btn btn-primary"  style="float: right;" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button>
            <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;"><i class="fa fa-table" aria-hidden="true"></i> Course Content</h6>
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
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button> --}}

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
                                                <h6 class="card-title">Course Content</h6>
                                                <form class="forms-sample" method="post" action="{{route('why-learn-course-content')}}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Name</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" id="educationDate" name="course_id">

                                                               @foreach($course as $course)
                                                                   <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                               @endforeach
                                                              
                                                            </select>
                                                        </div>
                                                    </div>


                                                     

                                                      <div id="education_fields">

                                                     </div>



                                                    <div class="form-group row nopadding">
                                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Content</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="course_content[]" id="exampleInputUsername2" placeholder="Course Content">


                                                        </div>
                                                        <div class="input-group-btn col-sm-2">
                                                            <button class="btn btn-success btn-sm" style="float:right;" type="button" onclick="education_fields();">add </button>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>




                                                   



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
                                   Course Name
                                </th>
                                <th>
                                  Action
                                </th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($learns as $learns)

                            <tr>

                               
                                   
                                <td>
                                    {{$learns->course_name}}
                                </td>
                                 <td>
                                    <a href="{{route('why-learn-course-content.edit',['id'=>$learns->id])}}">
                                        Edit
                                    </a>||
                                    <a href="{{route('why-learn-course-content.delete',['id'=>$learns->id])}}">
                                        Delet
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


<script>

var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="form-group row nopadding"><label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Content </label><div class="col-sm-7"><input type="text" class="form-control" name="course_content[]" id="exampleInputUsername2" placeholder="Banner Name Highlite"></div><div class="input-group-btn col-sm-2"><button class="btn btn-danger btn-sm" style="float:right;" type="button" onclick="remove_education_fields('+ room +');">remove</button></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }


</script>




<script>

var room = 1;
function education_fields1() {
 
    room++;
    var objTo = document.getElementById('education_fields1')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass1"+room);
	var rdiv = 'removeclass1'+room;
    divtest.innerHTML = '<div class="form-group row nopadding1"><label for="exampleInputUsername2" class="col-sm-3 col-form-label">Course Content </label><div class="col-sm-7"><input type="text" class="form-control" name="course_content[]" id="exampleInputUsername2" placeholder="Banner Name Highlite"></div><div class="input-group-btn col-sm-2"><button class="btn btn-danger btn-sm" style="float:right;" type="button" onclick="remove_education_fields1('+ room +');">remove</button></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields1(rid) {
	   $('.removeclass1'+rid).remove();
   }


</script>


@endsection
