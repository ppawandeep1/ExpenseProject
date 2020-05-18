@extends('layout') <!--extends layout page--->

<div class="content">
                 @section('content')
                <h1>signup page</h1>
                <form action="/signupsubmit" method="post">
                   <!--{{ csrf_field()}}token-->
                   <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id">
                      </div>
				  <div class="form-group">
				    <label for="name">User Name:</label>
				    <input type="text" class="form-control" name="name" id="name">
                  </div>
                  
                  <div class="form-group">
				    <label for="name">First Name:</label>
				    <input type="text" class="form-control" name="firstname" id="firstname">
                  </div>
                  
                  <div class="form-group">
				    <label for="name">Last Name:</label>
				    <input type="text" class="form-control" name="lastname" id="lastname">
                  </div>
                  
                  <div class="form-group">
				    <label for="email">Email:</label>
				    <input type="email" class="form-control" name="email" id="email">
                  </div>
                  
                  <div class="form-group">
				    <label for="name">Phone:</label>
				    <input type="number" class="form-control" name="phone" id="phone">
                  </div>
                  
                  <div class="form-group">
				    <label for="address">Address:</label>
				    <input type="text" class="form-control" name="address" id="address">
				  </div>

				  <div class="form-group">
				    <label for="password">Password:</label>
				    <input type="password" class="form-control" name="password" id="password">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
                @endsection    