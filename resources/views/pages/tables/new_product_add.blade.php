@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-3">
                <a href="{{ route('product.view') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Product List

                </a>
                <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;"><i class="fa fa-table" aria-hidden="true"></i> Product Add</h6>
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
              
                <form class="forms-sample" method="post" action="{{route('product.add.new')}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_name" id="exampleInputUsername2" placeholder="Product Name">
                            @error('product_name')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>

                     <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" name="short_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                           
                            @error('short_description')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>



                     <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                           
                            @error('description')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>


                     <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Regular Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="regular_price" id="exampleInputUsername2" placeholder="0000.00">
                            @error('regular_price')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>

                      <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Sale Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sale_price" id="exampleInputUsername2" placeholder="0000.00">
                            @error('sale_price')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>



                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Stock Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="educationDate" name="stock_status">
                                <option value="">-- Select Status --</option>
                                <option value="instock">Instock</option>
                            <option value="outofstock">Out of Stock</option>

                            </select>
                            @error('stock_status')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>

                      <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="quantity" id="exampleInputUsername2" placeholder="000">
                            @error('quantity')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>


                     <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" accept="image/*" onchange="loadFile(event)" id="exampleInputUsername2">

                            <div id="id" style="">
                                <img id="output" height="120px" width="120px" style="margin-top: 10px; margin-left: 200px; " />
                            </div>

                            
                            @error('image')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>




                     <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Preview Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="preview_link" id="exampleInputUsername2" placeholder="Preview Link">
                            @error('preview_link')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>

                    </div>


                     <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="educationDate" name="category_id">
                                <option value="">-- Select Category --</option>
                                @foreach($p_c as $p_c)
                                 <option value="{{ $p_c->id }}">{{ $p_c->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">
                                <small>{{$message}}</small>
                            </div>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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

