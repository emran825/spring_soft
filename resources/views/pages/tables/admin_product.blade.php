@extends('layout.master')

@section('content')

{{-- <div class="container-fluid"> --}}

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('product.add') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Product Add

            </a>
            <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;"><i class="fa fa-table" aria-hidden="true"></i> Product List</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                @if(Session::has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                           <th>Serial No.</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Category Name</th>
                           <th>Regular Price</th>
                           <th>Sale Price</th>
                           <th>Stock status</th>
                           <th>Quentity</th>
                           <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Serial No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Regular Price</th>
                            <th>Sale Price</th>
                            <th>Stock status</th>
                            <th>Quentity</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($product as $key =>  $product)
                        
                   
                       
                        <tr>
                         <td>{{ ++$key  }}</td>
                          <td class="py-2">
                  <img src="{{ asset('frontend') }}/admin_product/{{$product->image }}" alt="image">
                </td>
                        <td>{{$product->product_name  }}</td>
                        <td>{{ $product->category->name }}</td>
                         <td>{{ $product->regular_price }}</td>
                          <td>{{ $product->sale_price }}</td>
                           <td>{{ $product->stock_status }}</td>
                            <td>{{ $product->quantity }}</td>
                         <td><a  href="{{ route('product.edit',['id'=>$product->id]) }}">Edit</a>||<a href="{{ route('product.delete',['id'=>$product->id]) }}">Delete</a></td>
                        
                        </tr>
                         @endforeach
                       

                    </tbody>

                </table>

                {{-- <h1>HHHHHHHHHHH</h1> --}}
                {{-- <div class="d-flex justify-content-center">
                {{ $categories->links() }}
            </div> --}}
        </div>
    </div>
</div>

{{-- </div> --}}



           

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Why It Learn</h6>
                                            <form class="forms-sample" method="post" action="{{route('category.add.new')}}" >
                                                {{ csrf_field() }}
                                                <div class="form-group row ">
                                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Category Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="name"  id="exampleInputUsername2" placeholder="Why To Learn">
                                                        @error('name')
                                                        <div class="alert alert-danger">
                                                            <small>{{$message}}</small>
                                                        </div>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Category Status</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" id="educationDate" name="status">
                                                            <option value="">-- Select Status --</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>

                                                        </select>
                                                         @error('status')
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
          


<script>
    var room = 1;

    function education_fields() {

        room++;
        var objTo = document.getElementById('education_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="form-group row nopadding"><label for="exampleInputUsername2" class="col-sm-3 col-form-label">Why To Learn </label><div class="col-sm-7"><input type="text" class="form-control" name="why_learn[]" id="exampleInputUsername2" placeholder="Banner Name Highlite"></div><div class="input-group-btn col-sm-2"><button class="btn btn-danger btn-sm" style="float:right;" type="button" onclick="remove_education_fields(' + room + ');">remove</button></div></div><div class="clear"></div>';

        objTo.appendChild(divtest)
    }

    function remove_education_fields(rid) {
        $('.removeclass' + rid).remove();
    }

</script>




<script>
 

</script>


@endsection

