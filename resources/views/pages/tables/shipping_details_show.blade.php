@extends('layout.master_customer')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-3">
                <a href="{{ route('order.show',['id'=> Session::get('customer_id')]) }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Order Page

                </a>
                <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;"><i class="fa fa-table" aria-hidden="true"></i>Shipping Details</h6>
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


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Full Name</label>
                        <input type="text" class="form-control" id="inputEmail4" value="{{ $shipping_details->fname }} {{ $shipping_details->lname }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Email</label>
                        <input type="email" class="form-control" id="inputPassword4" value="{{ $shipping_details->email }}"  readonly>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Phone</label>
                        <input type="text" class="form-control" id="inputEmail4" value="{{ $shipping_details->phone }}"  readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Country</label>
                        <input type="text" class="form-control" id="inputPassword4" value="{{ $shipping_details->country }}"  readonly>
                    </div>
                </div>



                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Address</label>
                        <input type="email" class="form-control" id="inputEmail4" value="{{ $shipping_details->add }}"  readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Zip Code</label>
                        <input type="text" class="form-control" id="inputPassword4" value="{{ $shipping_details->zip_code }}"  readonly>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">City</label>
                        <input type="text" class="form-control" id="inputEmail4" value="{{ $shipping_details->city }}"  readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Order Date</label>
                        <input type="text" class="form-control" id="inputPassword4" value="{{ $shipping_details->created_at }}"  readonly>
                    </div>
                </div>
















            </div>
        </div>
    </div>

</div>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

</script>







@endsection

