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
						      <a class="navbar-brand" href="login">Login</a> 
							</div>
							<div class="navbar-header">
								<a class="navbar-brand" href="sign">Sign Up</a> 
							  </div>
					  </div>
				</nav>
	    		@show		
	    	</div>
	    	<div class="content">
	    		 @section('content')
	    		@show	
	    	</div>
	    	
		</body>

</html>