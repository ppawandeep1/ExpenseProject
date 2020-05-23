@extends('layout')
@section('content')

<form action="/createsubmit" method = "post">
   
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="UserName">User Name</label>
        <input type="text" class="form-control" name="username"  id="username">
      </div>

      <div class="form-group">
        <label for="FirstName">First Name</label>
        <input type="text" class="form-control" name="firstname" id="firstname">
      </div>

      <div class="form-group">
        <label for="LastName">Last Name</label>
        <input type="text" class="form-control" name="lastname" id="lastname">
      </div>

      <div class="form-group">
      <label for="email">Email </label>
      <input type="email" class="form-control" name=" email" id="email">
    </div>

      <div class="form-group">
        <label for="PhoneNumber">Phone Number</label>
        <input type="num" class="form-control" name="phonenumber" id="phone">
      </div>

      <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" class="form-control" name="address" id="address">
      </div>
      
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" name="password" id="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="submit"  class="btn btn-default"><a href="{{ URL::previous() }}">Cancel</a></button>
  </form>
    @endsection
  