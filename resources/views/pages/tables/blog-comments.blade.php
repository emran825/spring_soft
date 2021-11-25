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
                 Subject
                </th>
                <th>
                  Message
                </th>
                <th>
                 Blog Name
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($comments as $data)
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
                 {{$data->subject}}
                </td>
                <td>
                 {{Str::limit($data->comments, 15)}}
                </td>
                <td>
                {{$data->blog_name}}
                </td>
              </tr>
              @endforeach
            
            </tbody>
          </table>
        </div>
         <br>
                  <div class="d-flex justify-content-center">
    {!! $comments->links() !!}
</div>
      </div>
    </div>
  </div>
</div>


@endsection