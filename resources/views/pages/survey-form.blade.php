@extends('layout.app')

@section('content')
<div class="container main-content">
	@if($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <ul>
		  @foreach($errors->all() as $error)
		    <li>{{ $error }}</li>
		  @endforeach
		</ul>
	</div>
	@endif

	<div class="panel panel-default">
	  <div class="panel-heading">Survey Form</div>
	  <div class="panel-body">
		 <form action="/" method="post" autocomplete="off">
		   <input type="hidden" name="_token" value="{{ csrf_token() }}">
		  <div class="form-group">
		    <label for="first_name">First Name</label>
		    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ Input::old('first_name') }}" placeholder="Your first name">
		  </div>
		  <div class="form-group">
		    <label for="middle_name">Middle Name</label>
		    <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ Input::old('middle_name') }}" placeholder="Your middle name">
		  </div>
		  <div class="form-group">
		    <label for="last_name">Last Name</label>
		    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ Input::old('last_name') }}" placeholder="Your last Name">
		  </div>
		  <div class="form-group">
		    <label for="birth_date">Birth Date</label>
		    <input type="date" class="form-control" id="birth_date" value="{{ Input::old('birth_date') }}" name="birth_date">
		  </div>
		  <div class="form-group">
		    <label for="feedback">Feedback</label>
		    <textarea class="form-control" rows="3" id="feedback" name="feedback" placeholder="Type you feedback here...">{{ Input::old('feedback') }}</textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>	
		
	  </div>
	</div>
</div>
@stop