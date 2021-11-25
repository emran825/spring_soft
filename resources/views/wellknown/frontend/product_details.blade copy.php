@extends('wellknown.layouts.index')
@section("product_details")
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section("content")

<style>
 .bodyclass{
    font-family: 'Roboto Condensed', sans-serif;
    background-color: #f5f5f5
}
.hedding{
	font-size: 20px;
	color:#ab8181`;
}
.main-section{
	position: absolute;
	left:50%;
	right:50%;
	transform: translate(-50%,5%);
}
.equel{
	width: 100%;
}
.left-side-product-box img{
	width: 100%;
}
.left-side-product-box .sub-img img{
	margin-top:5px;
	width:83px;
	height:100px;
}
.right-side-pro-detail span{
	font-size:15px;
}
.right-side-pro-detail p{
	font-size:25px;
	color:#a1a1a1;
}
.right-side-pro-detail .price-pro{
	color:#E45641;
}
.right-side-pro-detail .tag-section{
	font-size:18px;
	color:#5D4C46;
}
.pro-box-section .pro-box img{
	width: 100%;
	height:100%;
}
@media (min-width:360px) and (max-width:640px) {
	.pro-box-section .pro-box img{
		height:auto;
	}
}

</style>

<br><br><br><br><br><br><br><br>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />



<div class="container">




	

<div class="container">
	<div class="col-lg-8  p-3 main-section bg-white">
		
		<div class="row m-0">
			<div class="col-lg-4 left-side-product-box  pb-4">
				<img src="{{ asset('frontend') }}/admin_product/{{$p_all->image }}" alt="{{$p_all->product_name  }}" class=" p-3">
				
			</div>
			<div class="col-lg-8 eque">
				<div class="right-side-pro-detail border p-3 m-0">
					<div class="row">
						<div class="col-lg-12">
							
							<p class="m-0 p-0">{{$p_all->product_name  }}</p>
						</div>
						<div class="col-lg-12">
							<p class="m-0 p-0 price-pro">$ {{$p_all->sale_price  }}</p>
							<hr class="p-0 m-0">
						</div>
						<div class="col-lg-12 pt-2">
							<h5>Product Detail</h5>
							{{$p_all->description  }}
						</div>
					
						
						<div class="col-lg-12 mt-3">
							<div class="row">
								<div class="col-lg-6 pb-2">
									<a  href="{{route('get.product-details',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}" class="btn btn-danger w-100">Add To Cart</a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		
	</div>
</div>


	
	

   

</div>



  

<hr>




 

    


@endsection
