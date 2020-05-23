
@extends('layout')

            <div class="content">
	    		 @section('content')
	    		<h1>Login page</h1>
	    		<form action="/loginsubmit" method="post">
	    			{{ csrf_field() }}<!--token-->
				  <div class="form-group">
				    <label for="name">User Name:</label>
				    <input type="text" class="form-control" name="name" id="name">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="password" id="pwd">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				  <button type="submit"  class="btn btn-default"><a href="{{ URL::previous() }}">Cancel</a></button>
				</form>
            </div>
	    		@endsection 	