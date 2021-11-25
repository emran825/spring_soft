@extends('wellknown.layouts.index')

@section("content")


<br><br><br><br><br><br><br><br><br>


<div class="container">
	<div>
		<h3 style="text-align:center;">Be part of Springsoftit's Team</h3> <br>
		<p style="text-align:center;">"Make an impact doing what you love"</p>
	</div><hr><br>

	<div class="row justify-content-center padding">
    <div class="col-md-8 ftco-animate fadeInUp ftco-animated">
      
            <div class="form-group d-md-flex"> <input id="search" type="text" class="form-control p-3 px-4" placeholder="Search by job title..."> <input type="submit" style="background-color:#2C724F; color:white" class="search-domain btn  px-5" value="Search Jobs"> </div>
     
        
    </div>
</div><br>
<div class="row">
	<div class="col-md-2">
		<h5>JOB TYPE</h5> <hr>

			<div class="form-check p-1 ml-2">
				<input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				<label class="form-check-label" for="flexRadioDefault1">
					Development ({{$dev}})
				</label>
				</div>
				<div class="form-check p-1 ml-2">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
				<label class="form-check-label" for="flexRadioDefault2">
					Marketing ({{$mar}})
				</label>
			</div>
				<div class="form-check p-1 ml-2">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
				<label class="form-check-label" for="flexRadioDefault1">
					HR ({{$hr}})
				</label>
				</div>
				<div class="form-check p-1 ml-2">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
				<label class="form-check-label" for="flexRadioDefault2">
					Editor({{$edi}})
				</label>
				</div>

	</div>

	<div class="col-md-8 ml-auto" id="search_data">
		<!-- <h5>10 Jobs Found</h5> <br> -->
		@foreach($job as $data)
		
		<a style="text-decoration:none;color:black" href="{{route('job.details',['id'=>$data->id])}}"><div class="border p-4 mb-4" >
			<h5>{{$data->job_name}}</h5> <br>
			<p>{{$data->job_details}}</p>
			
			<p> <i style="color:#2C724F" class="fas fa-briefcase"></i>&nbsp {{$data->job_type}} &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i style="color:#2C724F" class="far fa-calendar-alt"></i>&nbsp {{ $data->updated_at->diffForHumans() }}</p>
		</div></a>
		@endforeach

		<div class="styled-pagination">
						<ul class="clearfix" id="link">
							{{$job->links()}}

							<!-- <li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li class="next"><a href="#"><span class="ti-angle-right"></span> </a></li> -->
						</ul>
					</div>

	</div>
</div>

</div>

<script type="text/javascript">
	$('body').on('keyup','#search',function(){
     var searchQuest = $(this).val();
     $.ajax({
     	method: 'POST',
     	url:'{{route("job.liveSearch")}}',
     	dataType: 'json',
     	data: {
     		'_token': '{{csrf_token()}}',
     		searchQuest:searchQuest,
     	},
     	success: function(res){
     		var tableRow = '';
     		$('#search_data').html('');
     		$.each(res,function(index,value){
     			var url = '{{ route("job.details", ":id") }}';
                url = url.replace(':id', value.id);
     			tableRow ='<a style="text-decoration:none;color:black" href="'+url+'"><div class="border p-4 mb-4" ><h5>'+ value.job_name+ '</h5> <br><p>' +value.job_details+ '</p><p> <i style="color:#2C724F" class="fas fa-briefcase"></i>&nbsp' +value.job_type+ '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i style="color:#2C724F" class="far fa-calendar-alt"></i>&nbsp'+value.updated_at+ '</p></div></a>';
     			// table_link=value;


              $('#search_data').append(tableRow);
               console.log(tableRow)
              
     		});

     	}

     });

	});
</script>


@endsection
