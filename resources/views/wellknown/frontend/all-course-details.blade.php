@extends('wellknown.layouts.index')

@section("content")
<br><br><br><br><br><br><br><br><br><br>

    
  

<section class="container mt-5">
    
    @foreach($course as $data)
        

    
    <br>

 
<h3>{{$count++}}.{{$data->course_name}}</h3><br>
    <div class="row">
        <div style="background-color: #FBFBF8;" class="col-md-8 border">
            <h3>Why you'll learn</h3><br>
            <ul>
                
                <li>{!! $data->why_learns !!}</li><br>
                

              
               
            </ul>
        </div>
        <div class="col-md-4">
            <div style="width:300px;float:right;" class="card">



                <div class="card-body text-left">

                    <h5>This Course includes</h5><br>
                    <ul>
                        <li>Date :{{$data->course_duration}}</li>
                        <li>No. of Classes/ Sessions :{{$data->no_ofclass}}</li>
                        <li>Total Hours :{{$data->total_hours}}</li>
                        <li>Last Date of Registration :{{$data->reg_deadline}}</li>
                        <li>Class Schedule :{{$data->class_schedule}}</li>
                        <li>venue :{{$data->venue}}</li>

                    </ul>
                    <ul class="rating d-inline-flex">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                    <hr>
                    <h6 class="mb-3">
                        Course Price:{{$data->course_price}}
                    </h6>
                    <a href="{{route('get.course-details',['id'=>$data->id])}}"  class="btn btn-success">Enroll Now</a>

                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$data->id}}">
                       Cleck heae
                    </button> -->

                    <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>

                </div>

            </div>
        </div>
    </div>
    <br><br>
   
    <div class="row">
        <div style="background-color: #FBFBF8;" class="col-md-8 border">
            <h3>Course Content</h3><br>
            <ul>
               
                <li>{!! $data->course_content !!}</li>
                
               

            </ul>
        </div>
    
        <div class="col-md-4"></div>

    </div>

    <!-- Modal -->
<!-- <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Course Enroll</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">

                                {{-- <form class="forms-sample" method="post" action="{{route('post.course_enroll',['id'=>$data->id])}}"> --}}
                                <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="firstName">Full name</label>
                                            <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="" value="John Doe" required>

                                            <div class="invalid-feedback">
                                                Valid customer name is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="mobile">Mobile</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+88</span>
                                            </div>
                                            <input type="text" name="customer_mobile" class="form-control" id="mobile" placeholder="01711xxxxxx" required>
                                            <input type="hidden" value="{{ $data->course_price }}" name="amount" id="total_amount" required />
                                            <input type="hidden" value="{{ $data->id }}" name="course_id" id="course_id" required />
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Your Mobile number is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" name="customer_email" class="form-control" id="email" placeholder="you@example.com" value="you@example.com" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" value="93 B, New Eskaton Road" required>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="country">Country</label>
                                            <select class="custom-select d-block w-100" id="country" name="country" required>
                                                <option value="">Choose...</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid country.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="state">City</label>
                                            <select class="custom-select d-block w-100" name="city" id="state" required>
                                                <option value="">Choose...</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Dhaka">Chittagong</option>
                                                <option value="Dhaka">Khulna</option>
                                                <option value="Dhaka">Rajshahi</option>
                                                <option value="Dhaka">Sylhet</option>
                                                <option value="Dhaka">Barisal</option>
                                                <option value="Dhaka">Rangpur</option>
                                                <option value="Dhaka">Mymensingh</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>

                                    </div>


                                    <hr class="mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay</button>
                                </form>




                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
   -->

      
    @endforeach

    <br>
    <div class="styled-pagination">
                        <ul class="clearfix">
                    
    
    {!! $course->links() !!}
</div> 

                            <!-- <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="next"><a href="#"><span class="ti-angle-right"></span> </a></li> -->
                        </ul>
                    </div>
</section>




@endsection