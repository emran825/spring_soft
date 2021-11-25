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
<br>
<br>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}

	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}

	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}



	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}

}

  .btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 8px;
            text-align: center;
        }
</style>
<div class="container">

 @if(Cart::count()>0)
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
							 @foreach(Cart::content() as $item)
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="{{ asset('frontend/admin_product')}}/{{$item->model->image}}" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">{{$item->model->product_name}}</h4>
										
									</div>
								</div>
							</td>
							<td data-th="Price">$ {{ $item->price }}</td>
							<td data-th="Quantity">
								<input type="text" class="form-control text-center" value="{{ $item->qty }}"><br>
                                <div class="row">
                                    <div>
                                        {{-- <a href="{{ route('reduce',['reduce_cart'=>$item->rowId]) }}"><i class="fas fa-minus"></i></a> --}}
										 <form class="forms-sample" method="post" action="{{route('decrease')}}">
										     {{ csrf_field() }}
										     <input type="hidden" class="form-control" name="id" value="{{ $item->rowId }}" placeholder="Category Name">
										     <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-minus"></i></button>
										 </form>
                                    </div>
                                    <div class="ml-auto">
                                        {{-- <a class="ml-auto" href="{{ route('increase-cart',['increase_cart'=>$item->rowId]) }}"><i class="fas fa-plus"></i></a> --}}

										 <form class="forms-sample" method="post" action="{{route('increase')}}">
										     {{ csrf_field() }}
										     <input type="hidden" class="form-control" name="id" value="{{ $item->rowId }}" placeholder="Category Name">
										     <button type="submit" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
										 </form>

                                    </div>
                                </div>
							</td>
							<td data-th="Subtotal" class="text-center">{{ $item->subtotal}}</td>
						
							<td class="actions" data-th="">
								{{-- <a href="{{ route('destroy',['delete'=> $item->rowId ]) }}" class="btn btn-info btn-sm"><i class="fa fa-times-circle fa-lg" aria-hidden="true"></i></a> --}}
							 <form class="forms-sample" method="post" action="{{route('destroy_cart')}}">
							     {{ csrf_field() }}
							     <input type="hidden" class="form-control" name="id" value="{{ $item->rowId }}" placeholder="Category Name">
							     <button type="submit" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-times-circle fa-2x" aria-hidden="true"></i></button>
							 </form>

							</td>
						</tr>
						 @endforeach


					</tbody>
					<tfoot>
						<tr class="visible-xs">
						     @php
                                  Session::put('total',Cart::total());
                                 

                                 
                            @endphp
							{{-- <td colspan="10" class="text-center"><strong>Total {{ Cart::subtotal() }}</strong></td> --}}
						</tr>
						<tr>
							<td><a style="background-color: #2C724F" href="{{ route('product.display') }}" class="btn btn-success"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong></strong></td>
							<td><a style="background-color: #2C724F" href="{{route('product.shipping')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
						 {{-- <div class="update-clear">
                        <a class="btn btn-clear" href="{{ route('destroyAll') }}">Clear Shopping Cart</a>
                       
                    </div> --}}
					</tfoot>
				</table>





               @else
				<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
							
						<tr>
							 <td colspan="9" style="text-align: center;">No Item is found in Cart</td>
						</tr>
						


					</tbody>
					<tfoot>
						<tr class="visible-xs">
						     @php
                                  Session::put('total',Cart::total());
                                 

                                 
                            @endphp
							{{-- <td colspan="10" class="text-center"><strong>Total {{ Cart::subtotal() }}</strong></td> --}}
						</tr>
						<tr>
							<td><a style="background-color: #2C724F" href="{{ route('product.display') }}" class="btn btn-success"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong></strong></td>
							<td><a style="background-color: #2C724F" href="{{route('product.shipping')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
						</tr>
						 {{-- <div class="update-clear">
                        <a class="btn btn-clear" href="{{ route('destroyAll') }}">Clear Shopping Cart</a>
                       
                    </div> --}}
					</tfoot>
				</table>


               @endif
  </div>
@endsection

