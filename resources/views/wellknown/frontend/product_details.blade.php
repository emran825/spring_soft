@extends('wellknown.layouts.index')

@section("content")
<style>
.btn1-style-one {
    position: relative;
    display: inline-block;
    font-size: 16px;
    line-height: 1;
    color: #ffffff;
    padding: 15px 7px;
    font-weight: 600;
    overflow: hidden;
    border-radius: 2px;
    background-color: #2c724f;
    text-transform: uppercase;
    font-family: 'Work Sans', sans-serif;
}



</style>
<br><br><br><br><br><br>

<section class="container mt-5">
	<h3 style="color:#2C724F;font-weight:bold">{{ $p_all->product_name }}</h3><hr>
	<p>{{ $p_all->short_description }}</p><hr><br>
    <div class="row">
        <div style="background-color: #FBFBF8;" class="col-md-6 border">
		<div style="padding:20px" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block " src="{{ asset('frontend') }}/admin_product/{{$p_all->image }}" width="300px" height="300px" alt="First slide">
    </div>
    {{-- <div class="carousel-item">
      <img class="d-block w-100 h-100" src="https://thumbs.dreamstime.com/b/hrm-human-resources-management-concept-hrm-human-resources-management-business-concept-203052765.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="https://omc5825sv9k3qyi3q2ord7gk-wpengine.netdna-ssl.com/wp-content/uploads/2021/04/7-HRM-Basics.png" alt="Third slide">
    </div> --}}
  </div>
  {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a  class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span  class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> --}}
</div>
        </div>
        <div class="col-md-5">
            <div style="float:right;" class="card">



                <div class="card-body text-left">

                    <h4>Key Features</h4><hr>
                    <ul style="color:gray">
                    @foreach($key_feature as $key => $key_feature)
                        <li><i style="color:#2C724F" class="fas fa-check"></i> {{ $key_feature->key_features }}</li>
                    @endforeach


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
                    </ul> (<i class="fas fa-user"></i> 13)
                    <hr>
                    <h5 style="font-weight:bold" class="mb-3">
                       {{$p_all->sale_price}}
                    </h5>

                  
                    <a href="{{route('get.product-details',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}" class="theme-btn btn-style-one"><span class="txt"><i class="fas fa-shopping-cart"></i> Buy Now</span></a>

                      {{-- <a href="{{route('add.cart',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}" class="theme-btn btn1-style-one"><span class="txt">Add to Cart</span></a> --}}

                     <a href="{{$p_all->preview_link}}" class="theme-btn btn-style-one"><span class="txt"><i class="fas fa-eye"></i> Preview</span></a>




					{{-- <button type="submit" class="theme-btn btn-style-one"><span class="txt"><i class="fas fa-eye"></i> Preview</span></button> --}}


                </div>

            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div  class="col-md-7 border-right">
            <h3 style="color:#2C724F;font-weight:bold">Description</h3><hr>

               <p >
			  {{ $p_all->description }}

			   </p>

        </div>
        <div class="col-md-4 pl-5">
			<h3 style="color:#2C724F;font-weight:bold">Features</h3><hr>
			<ul style="color:gray">
            @foreach($feature as $key => $feature)
                <li><p><i style="color:#2C724F" class="far fa-check-circle"></i> {{ $feature->product_features }}</p> </li>
            @endforeach

			</ul>
		</div>
    </div>
</section>


@endsection
