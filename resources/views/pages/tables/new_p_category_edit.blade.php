@extends('layout.master')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header py-3">
                <a href="{{ route('category.view') }}" style="float: right;" class="ml-0 font-weight-bold text-primary "><i class="fa fa-plus" aria-hidden="true"></i> Category List

                </a>
                <h6 class="mr-0 font-weight-bold text-primary t" style="float: left;"><i class="fa fa-table" aria-hidden="true"></i> Category Update</h6>
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
                <h6 class="card-title">Product Category</h6>
                <form class="forms-sample" method="post" action="{{route('category.new.update')}}">
                    {{ csrf_field() }}
                    <div class="form-group row ">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="exampleInputUsername2" value="{{ $p_c->name }}" placeholder="Category Name" readonly>
                             <input type="hidden" class="form-control" name="id"  value="{{ $p_c->id }}">
                            
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
                                <option value="1"{{($p_c->status ==='1') ? 'selected' : ''}}>Active</option>
                                <option value="0" {{($p_c->status ==='0') ? 'selected' : ''}}>Inactive</option>

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





@endsection

