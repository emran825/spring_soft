{{-- @extends('wellknown.layouts.index')

@section("content")

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
<div class="row">
@foreach($p_all as $p_all)
  


<div class="col-lg-3 col-md-4 col-sm-12">
    
    <div style="box-shadow:0px 0px 5px 3px lightgray; border-radius:10px" class="card mt-5" style="width: 19rem;">
     <a href=""> <img class="card-img-top"  src="{{ asset('frontend') }}/admin_product/{{$p_all->image }}"  alt="Card image cap"></a>
     <div class="card-body ">
       <a href=""><h5 style="color:#2C724F; font-weight:600" class="card-title">{{$p_all->product_name  }}</h5></a>
       <p class="card-text">TK.  {{ $p_all->sale_price }}<br>
        Quentity: {{ $p_all->quantity }}<br>
          Stock : {{ $p_all->stock_status }}<br>
      
       </p>
       
       <a href="{{route('get.product-details',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}" class="enroll-btn">Cart</a>
       
     </div>
   
     </div>
   </div>
     
    
 
</div>
@endforeach

    
 
</div>
</div>

</div>






@endsection --}}


@extends('wellknown.layouts.index')

@section("content")

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>
.enroll-btn {
  color: #fff !important;
  
  text-decoration: none;
  background: #2C724F;
  padding: 8px;
  width: 80px;
  border-radius: 5px;
  display: inline-block;
  border: none;
  transition: all 0.4s ease 0s;
  text-align:center;
}
.enroll-btn:hover {
  background: #434343;
  letter-spacing: 1px;
  -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
  box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
  transition: all 0.4s ease 0s;
}
</style>

  <!-- Page Title Section -->
<div class="container">
<div class="row">
 @foreach($p_all as $p_all)
 
  <div class="col-lg-3 col-md-4 col-sm-12">
    
 <div class="card shadow mt-5" style="width: 17rem;">
  <a  href="{{route('get.product-details',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}"> <img class="card-img-top" src="{{ asset('frontend') }}/admin_product/{{$p_all->image }}" alt="{{$p_all->product_name  }}"></a>
  <div class="card-body ">
    <a href="{{route('get.product-details',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}"><h5 style="color:#2C724F; font-weight:600" class="card-title">{{$p_all->product_name  }}</h5></a>
    <p class="card-text">Sale Price :<i class='far fa-calendar'></i>  {{ $p_all->sale_price }}<br>
     <i class='far fa-clock'></i> Quentity: {{ $p_all->quantity }}<br>
    Stock:  {{ $p_all->stock_status }}
    </p>
    
    {{-- <a href="{{route('get.course-details',['id'=>$data->id])}}" class="enroll-btn">Cart</a> --}}

    <a href="{{route('get.product-details',['id'=>$p_all->id,'name'=>$p_all->product_name,'price'=> $p_all->sale_price ])}}" class="enroll-btn">Cart</a>
    
    
    <a  href="" class="btn btn-outline-danger ml-1"><i class="far fa-heart"></i></a>
  </div>
</div>


</div>

@endforeach
</div>
</div>







  <!-- End Project Section -->
@endsection

