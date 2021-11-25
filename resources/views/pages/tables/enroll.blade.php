@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Enrolled table</li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Enrolled table</h4>
                
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
                                    Course Name
                                </th>
                                <th>
                                   Amount
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $data)
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
                                    {{$data->phone}}
                                </td>
                                <td>
                                    {{$data->course_id}}
                                </td>
                                <td>
                                    {{$data->amount}} tk.
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                  
                  
                </div>
                <br>
                  <div class="d-flex justify-content-center">
    {!! $list->links() !!}
</div>
            </div>
        </div>
    </div>
</div>


@endsection
