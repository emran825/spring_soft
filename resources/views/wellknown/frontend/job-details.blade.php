@extends('wellknown.layouts.index')

@section("content")


<br><br><br><br><br><br><br><br><br>


<div class="container">
	<div style="text-align:center;">
		<h3>{{$job_details->job_name}}</h3> <hr><br>
		<a href="{{route('job.apply',['id'=>$job_details->id])}}" class="theme-btn btn-style-one"><span class="txt">Apply Now</span></a> <br> <br>
		<a style="color:green; font-size:18px" href="{{route('get.career')}}"><i class="fas fa-arrow-left"></i> Back to search results</a>
	</div>
	<table >
		<tr >
		<td style="padding:20px"> <h5>Job Description </h5></td>
		<td style="padding:20px">
<p></p> {{$job_details->job_details}}</p></td>
		</tr>
		<tr>
		<td style="padding:20px"><h5>Job Responsibilities</h5</td>
		<td style="padding:20px">
		{!! $job_details->job_res !!}
		</td>
		</tr>

		<tr>
		<td style="padding:20px"><h5>Primary Requirements</h5></td>
		<td style="padding:20px">
		{!! $job_details->p_req !!}
		</td>
		</tr>

		<tr >
		<td style="padding:20px"> <h5>Experience </h5></td>
		<td style="padding:20px">
<p></p> {{$job_details->experience}} </p></td>
		</tr>

		<tr >
		<td style="padding:20px"> <h5>Educational Requirements </h5></td>
		<td style="padding:20px">
<p></p> {{$job_details->e_req}} </p></td>
		</tr>

		<tr >
		<td style="padding:20px"> <h5>Salary Range </h5></td>
		<td style="padding:20px">
<p></p> {{$job_details->s_range}} BDT (Monthly)</p></td>
		</tr>

		<tr>
		<td style="padding:20px"><h5>Benifits</h5></td>
		<td style="padding:20px">
		{!! $job_details->benifits !!}
		</td>
		</tr>
	</table> <br>

	<div style="text-align:center;">
	<a href="{{route('job.apply',['id'=>$job_details->id])}}" class="theme-btn btn-style-one"><span class="txt">Apply Now</span></a>
	</div>
	
</div>


@endsection
