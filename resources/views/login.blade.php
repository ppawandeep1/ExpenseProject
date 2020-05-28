@section('content')
   
       <div  class="home-right-content" style="background-color:#E8E8E8;margin-top:50px;margin-left: 300px; margin-bottom:50px;display:flex;flex-direction: row;">
           <div>
                <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 200px;height:500px"/>
           </div>
            <div style="margin-top:70px; margin-left:230px; text-align:center;">
				<h2 style="color: #f45464">Login....</h2>
				<br></br>
				@if(Session::has('flash_message_error'))
				<div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                   <strong style="color: red;">{!! session('flash_message_error') !!}</strong>
                </div>
				@endif
				<form action="/loginsubmit" method="post">
					{{ csrf_field() }}<!--token-->
				
					<div class="alert alert-info" style="width:300px;height: 100px;">
					  <input type="text" style=" width: 100%; height: 40% ; text-align: center;" class="form-control" name="name" id="name" placeholder="Enter User Name...."><br></br>
					  <input style=" width: 100%; height: 40%;text-align: center;" type="password" class="form-control" name="password" id="pwd" placeholder="Enter Password...."><br></br>
				      <input type="submit" value="Save"> <input type="reset" value="Cancel">
				     
				     
				  </div>
				</form>
            </div>
       </div>
   </div>
@stop


<!doctype html>
<html>
    <head>
  
   <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}" />
   
</head>
<body>
<div class="container">
   <header class="row">
       @include('header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
<footer class="row">
    @include('footer')
</footer>
</div>
</body>
</html>