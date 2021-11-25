@extends('wellknown.layouts.index')

@section("content")
<br><br><br><br><br><br><br>
<!-- <i class="fas fa-check"></i> -->

<div class="bg-image card shadow-1-strong" style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/79731568097599.5b50bca477735.jpg');">
    <div class="card-body text-center text-white">
        <h3 class="card-title text-white">2021 Complete {{$course->course_name}} Course Zero to Hero</h3><br>
        <p class="card-tex">
            {{$course->course_details}}
        </p><br>
        <a href="{{route('get.course_enroll',['id'=>$course->id])}}" class="btn btn-success">Enroll</a>&nbsp
        <a href="#!" class="btn btn-success"><i class="far fa-heart"></i> Wish List</a>
    </div>
</div>

<section class="container mt-5">
    <div class="row">
        <div style="background-color: #FBFBF8;" class="col-md-8 border">
            <h3>Why you'll learn</h3><br>
            <ul>
                 @if($course->why_learns != null)
               {!! $course->why_learns !!}</li>
                @else
                 <h5 style="text-align: center; color:red">No Why learns Is Found </h5>
                @endif
               
                

             
            </ul>
        </div>
        <div class="col-md-4">
            <div style="width:300px;float:right;" class="card">



                <div class="card-body text-left">

                    <h5>This Course includes</h5><br>
                    <ul>
                        <li>Date :{{$course->course_duration}}</li>
                        <li>No. of Classes/ Sessions :{{$course->no_ofclass}}</li>
                        <li>Total Hours :{{$course->total_hours}}</li>
                        <li>Last Date of Registration :{{$course->reg_deadline}}</li>
                        <li>Class Schedule :{{$course->class_schedule}}</li>
                        <li>venue :{{$course->venue}}</li>

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
                        Course Price:{{$course->course_price}}
                    </h6>

                   <a href="{{route('get.course_enroll',['id'=>$course->id])}}" class="btn btn-success">Enroll</a>

                    <button type="button" class="btn btn-danger btn-sm px-3 mb-2 material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to wishlist">
                        <i class="far fa-heart"></i>
                    </button>

                </div>

            </div>
        </div>
    </div>
</section>
<section class="container mt-5">
    <div class="row">
        <div style="background-color: #FBFBF8;" class="col-md-8 border">
            <h3>Course Content</h3><br>
            <ul>
               @if($course->course_content != null)
               {!! $course->course_content !!}</li>
                @else
                 <h5 style="text-align: center; color:red">No Course Content Is Found </h5>
                @endif

            </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
</section>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                {{-- <form class="forms-sample" method="post" action="{{route('post.course_enroll',['id'=>$course->id])}}"> --}}
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
                                            <input type="hidden" value="{{ $course->course_price }}" name="amount" id="total_amount" required />
                                            <input type="hidden" value="{{ $course->id }}" name="course_id" id="course_id" required />
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
</div> -->
</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- If you want to use the popup integration, -->
<script>
    var obj = {};
    obj.cus_name = $('#customer_name').val();
    obj.cus_phone = $('#mobile').val();
    obj.cus_email = $('#email').val();
    obj.cus_addr1 = $('#address').val();
    obj.amount = $('#total_amount').val();

    $('#sslczPayBtn').prop('postdata', obj);

    (function(window, document) {
        var loader = function() {
            var script = document.createElement("script")
                , tag = document.getElementsByTagName("script")[0];
            // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);

</script>






@endsection
