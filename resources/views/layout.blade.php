<html>
	 <head>
	 	<title>Expense Tracking</title>
	 	<link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}" />
	 	   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	 	   <script src="{{asset('js/members.js')}} "></script> <!--add js file-->
         <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
	 </head>
		   <body>
	<!---header content ---->
		   	@section('header')
		<div class="header">
		   	<div class="banner">
		        <div class="container">
		            <div class="row">
		                <div class="header-left">
		                    <img src="{{ asset('assets/images/logo.png') }}" style="width:144px;margin-top: 7px;margin-bottom: 7px;margin-left: 39px;"/>
		                </div>
		                <div class="header-left1">
		                    <ul class="nav1">
		                        <li class="hvr-sweep-to-bottom"><a href="/">Home<i class="glyphicon glyphicon-home" aria-hidden="true"></i></a></li>
		                        <li class="hvr-sweep-to-bottom"><a href="/about">About us<i class="glyphicon glyphicon-hand-right" aria-hidden="true"></i></a></li>
		                        <li class="hvr-sweep-to-bottom"><a href="/contact">Contact us<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
		                        <li class="hvr-sweep-to-bottom"><a href="/login">Login<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>
		                        <li class="hvr-sweep-to-bottom"><a href="/signup">Signup<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></a></li>     
		                    </ul>
		                </div>
		            </div>
		        </div>
            </div>
		</div>
	<!---dashboard content ---->
		    <div class="sidebar">
	    		 @section('sidebar')
	    		<ul style="list-style-type: none; margin: 5px; padding: 10px; margin-top: 80px; margin-bottom: 80px;">
		                     <li><a style="color:#f45464;display: block; font-weight: 700;  padding: 40px 16px; text-decoration: none;">Your Dashboard</a></li>
		                    <li><a  href="group" onMouseOver="this.style.background=' #ffffff'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
		                        padding: 8px 16px; text-decoration: none;">Create Groups</a></li>
		                    <li><a  href="addmembers" onMouseOver="this.style.background=' #ffffff'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
		                            padding: 8px 16px; text-decoration: none;">Add Group Members</a></li>
		                    <li><a href="addexpense" onMouseOver="this.style.background=' #ffffff'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;padding: 8px 16px;
		                        text-decoration: none;">Add Expense</a></li>
		                    <li><a href="viewExpense" onMouseOver="this.style.background=' #ffffff'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">View All Expenses</a></li>
		                    <li><a href="calculate" onMouseOver="this.style.background=' #ffffff'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">Calculate Expenses</a></li>
		                    <li><a onMouseOver="this.style.background=' #ffffff'" onMouseOut="this.style.background='none'" class="btn btn-primary fad fa-user" href="{{url('/logout')}}" role="button" style="color:#f45464;display: block; font-weight: 700; padding: 40px 16px;text-decoration: none;">Logout</a></li>
		        </ul>
	    		@show	
	    	    
	    	</div>
	<!---body content ---->
		   	@show
		   	<div  class="content">
              
		   		@yield('content')
		   	</div>
	<!---footer content ---->
		   	@section('footer')
		   	<div class="footer">
				<div class="row">
			        <div class="container" style="display: flex;flex-direction: row;justify-content:space-around;">
				        <div class="col-md-2 ftr_navi ftr">
				            <h3>Navigation</h3>
				            <ul>
				                <li><a href="/">Home</a></li>
				                <li><a href="/about">About Us</a></li>
				                <li><a href="/contact">Contact Us</a></li>
				                <li><a href="/login">Login</a></li>
				                <li><a href="/signup">Signup</a></li>
				            </ul>
				        </div>
				        
				        <div class="col-md-3 get_in_touch ftr">
				            <h3>Get In Touch </h3>
				            <p>ISI, L'institut Supérieur d'Informatique</p>
				            <p>2100 Boul. de Maisonneuve E, Montréal, QC H2K 4S1</p>
				            <p>(514) 842-2426</p>
				        </div>
				        <div class="col-md-4 ftr-logo">
				            <a href="#" style="text-decoration:none;"><h3 style="color:#f45464;">Expense System <span style=" font-weight:bold;"> <br>“A Penny Saved is a Penny Earned.” </span></h3></a>

				            <p>© 2020 Expense System.</p>
				        </div>
				        <div class="clearfix"> </div>
			        </div>
			    </div>
		   	</div>
		   	@show
		   </body>
</html>