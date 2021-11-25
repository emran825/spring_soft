@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('feature.view') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "> Product feature List

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
                <form class="forms-sample" method="post" action="{{route('product.feature.update')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden"  name="id" value="{{ $product_feature->id }}">
                    
                   

                     <div class="form-group row">
                   
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Product Feature</label>
                        <div class="col-sm-9">
                           <p><strong><h4 style="color:red">{{ $product_feature->adm_pro->product_name }}</h4></strong></p>


                        </div>
                      
                    </div>



                     
                    <div id="education_fields">

                    </div>
                    @foreach($features as $features)
                     <input type="hidden"  name="features_id[]" value="{{ $features->id }}">
                     <div class="form-group row nopadding">
                   
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Features</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_features[]" value="{{ $features->product_features }}" id="exampleInputUsername2" placeholder="Banner Name Highlite">


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





@endsection

