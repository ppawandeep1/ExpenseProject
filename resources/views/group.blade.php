
@extends('layout')

            <div class="content">
	    		 @section('content')
	    		<h1>Create Group Page</h1>
	    		<form action="creategroup" method="post">
	    			{{ csrf_field() }}<!--token-->
				  <div class="form-group">
				    <label for="gname">Group Name:</label>
				    <input type="text" class="form-control" name="gname" id="gname">
				  </div>
				  <div class="form-group">
				  <!--<button type="submit" class="btn btn-default">Add Participants</button>-->
				
				  <button type="submit" class="btn btn-default">Save</button>
				  <button type="submit" class="btn btn-default">Cancel</button>
				  
				</form>
				
            </div>
	    		@endsection 	