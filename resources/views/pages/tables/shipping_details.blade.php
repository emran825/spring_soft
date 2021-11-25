@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-3">
                <a href="{{ route('Customer.Order') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Order Page

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

<form method="post" action="{{route('update.status')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row nopadding">

        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Change Status</label>
         <input type="hidden" name="id" value="{{ $shipping_details->id }}">
        <div class="col-sm-5">
            <select class="form-control" id="educationDate" name="shipping_status">
                <option value="">-- Select Status --</option>
                 <option value="Pending"{{($shipping_details->shipping_status ==='Pending') ? 'selected' : ''}}>Pending</option>
                 <option value="Delivered"{{($shipping_details->shipping_status ==='Delivered') ? 'selected' : ''}}>Delivered</option>
                {{-- <option value="Pending">Pending </option>
                <option value="Delivered">Delivered </option> --}}
            </select>
        </div>
        <div class="input-group-btn col-sm-1">
            <button type="submit" class="btn btn-success btn-sm" style="float:right;" type="button" >update </button>
        </div>


    </div>
</form>














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

