@extends('wellknown.layouts.index')

@section("content")
<br><br><br><br><br><br>

<div role="dialog" aria-labelledby="exampleModalLabel">
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
</div>
@endsection