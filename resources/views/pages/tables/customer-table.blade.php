@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
  </ol>
</nav>

<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Inverse table</h4>
        <p class="card-description">
          Add class <code>.table-dark</code>
        </p>
         @if(session()->has('error'))
               <div class="alert alert-danger">
                   {{ session()->get('error') }}
               </div>
            @endif
        <div class="table-responsive pt-3">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Name
                </th>
                 <th>
                  Email
                </th>
                 <th>
                  Phone
                </th>
                 <th>
                Action
                </th>
               
              </tr>
            </thead>
            <tbody>
              @foreach($customer as $data)
              <tr>
                <td>
                  {{$data->id}}
                </td>
                <td>
                  {{$data->name}}
                </td>
                <td>
                  {{$data->email}}
                </td>
                 <td>
                 +880{{$data->phone}}
                </td>
                <td>
                  <a href="{{route('customer.remove',['id'=>$data])}}">delete</a>
                </td>
              
              </tr>
              @endforeach
            
            </tbody>
          </table>
          <br>
    <div class="d-flex justify-content-center">
    {!! $customer->links() !!}
</div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection