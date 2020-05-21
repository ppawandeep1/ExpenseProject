<html>
	<head>
		
			<script src="{{asset('js/app.js')}} "></script> <!--add js file-->

	</head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">	
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">	

	    <body>
	    	<div class="header">
                @section('header')
	    		<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						    <div class="navbar-header">
						     
						     <a class="navbar-brand" href="#">Welcome</a>
						      <a class="navbar-brand" href="login">Login</a> 
						      <a class="navbar-brand" href="create">SignUp</a> 
						      <a class="navbar-brand" href="group">Make Group</a>
                               
						    </div>
					  </div>
				</nav>
	    		@show		
	    	</div>
	    	<div class="content">
	    		 @section('content')
	    		@show	
	    	</div>
	    	<div class="footer">
	    		 @section('footer')
	    		<h1>Footer Part</h1>
	    		@show	
	    	</div>
		</body>

</html>