@extends('layout') <!--extends layout page--->

          @section('header')
          <nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						    <div class="navbar-header">
							<h2>Welcome {{Session::get('uname')}} </h2>
							  <a href="logout">LogOut</a> 
							  <a href="addexpense">Addexpense</a>        
				         </div>
					  </div>
				</nav>
          @endsection
          @section('content')
               
          @endsection    

