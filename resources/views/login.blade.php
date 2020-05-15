
@extends('layout')

<div class="content">
	    		 @section('content')
	    		<h1>Login page</h1>
	    		<form action="/loginsubmit" method="post">
	    			{{ csrf_field() }}<!--token-->
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" name="email" id="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="password" id="pwd">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
	    		@endsection 	