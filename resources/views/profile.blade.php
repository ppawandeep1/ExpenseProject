@extends('layout') <!--extends layout page--->

          @section('header')
          <nav class="navbar navbar-inverse">
					  <div class="container-fluid">
						    <div class="navbar-header">
							<h2>Welcome {{session('data')['name']}}</h2>
							  <a href="logout">LogOut</a>         
				         </div>
					  </div>
				</nav>
          @endsection
          @section('content')
               
          @endsection    

