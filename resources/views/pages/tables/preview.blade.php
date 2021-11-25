@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
       <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <a href="{{ route('category.add') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Category Add

            </a> --}}

            <button type="button" class="btn btn-primary"  style="float: right;" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button>
            <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;"><i class="fa fa-table" aria-hidden="true"></i>Preview link</h6>
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
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add
                </button> --}}

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Preview link</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                             
                                                <form class="forms-sample" method="post" action="{{route('preview')}}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="form-group row">
                                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Product Name</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" id="educationDate" name="product_id">

                                                               @foreach($product as $product)
                                                                   <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                                               @endforeach
                                                              
                                                            </select>
                                                        </div>
                                                    </div>


                                                     

                                                      <div id="education_fields">

                                                     </div>



                                                    <div class="form-group row nopadding">
                                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Preview link</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="preview_link" id="exampleInputUsername2" placeholder="Preview link">


                                                        </div>
                                                        
                                                    </div>
                                                    <div class="clear"></div>




                                                   



                                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    <!--  <button class="btn btn-light">Cancel</button> -->
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                   Product Name
                                </th>
                                <th>
                                  Action
                                </th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_feature as $product_feature)

                            <tr>

                               
                                   
                                <td>
                                    {{$product_feature->adm_pro->product_name}}
                                </td>
                                 <td>
                                    <a href="{{route('preview.edit',['id'=>$product_feature->id])}}">
                                        Edit
                                    </a>||
                                    <a href="{{route('preview.delete',['id'=>$product_feature->id])}}">
                                        Delete
                                    </a>


                                   
                                   
                                </td>
                             

                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>










@endsection
