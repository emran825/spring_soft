@extends('wellknown.layouts.index')

@section("content")


<br><br><br><br><br><br><br><br><br>
  @if(session()->has('message'))
             <script type="text/javascript">
             	swal("Good job!", "{!! session()->get('message') !!}", "success");
             </script>
   @endif  
 


<div class="container">
	<form  method="post" action="{{route('post.apply',['id'=>$job_id])}}" enctype="multipart/form-data">
		@csrf
		<h3>Required Informations</h3><hr> <br>
	 <div class="row">
		 <div class="col md-4">
		 <input class="form-control form-control-lg mb-4" type="text" placeholder="Name" name="name" required>

		 <input class="form-control form-control-lg mb-4" type="text" placeholder="Contact" name="contact" required>
		 
		 <div class="form-group purple-border">
  <label for="exampleFormControlTextarea4">Tell us about your previous job role</label>
  <textarea class="form-control" name="role" id="exampleFormControlTextarea4" rows="3"></textarea>
</div>
	@error('role')
		<p class="form-text text-danger">{{ $message }}</p>
		@enderror

		 </div>
		 <div class="col md-4">
		 <input class="form-control form-control-lg mb-4" type="text" placeholder="Email" name="email" required>

		 <input class="form-control form-control-lg mb-4" type="text" placeholder="City" name="city" required>

		 <select class="form-control form-control-lg mb-4" name="gender" required>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Others</option>
		 </select>
		 	@error('gender')
		<p class="form-text text-danger">{{ $message }}</p>
		@enderror

		 <div class="custom-file">
			<input type="file" class="custom-file-input form-control-lg" id="customFile" name="resume">
			<label class="custom-file-label" for="customFile">Upload Resume</label>
		</div>
		@error('resume')
		<p class="form-text text-danger">{{ $message }}</p>
		@enderror
		 </div>
	 </div> <br>
	 <button type="submit" class="theme-btn btn-style-one"><span class="txt">Apply Now</span></button>
	</form>
	
</div>


@endsection
