
@section('content')
   <div class="home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       <div class="home-left-content" style="background-color:#DCDCDC; min-height:500px; margin-top:50px; margin-bottom:50px;">
                <ul style="list-style-type: none; margin: 5px; padding: 10px; margin-top: 80px; margin-bottom: 80px;">
                     <li><a style="color:#f45464;display: block; font-weight: 700;  padding: 40px 16px; text-decoration: none;">Your Dashboard</a></li>

                    <li><a  href="group" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                        padding: 8px 16px; text-decoration: none;">Create Groups</a></li>
                    <li><a  href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                            padding: 8px 16px; text-decoration: none;">Add Group Members</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;padding: 8px 16px;
                        text-decoration: none;">Add Expense</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">Calculate Expense</a></li>

                    <li><a onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" class="btn btn-primary fad fa-user" href="{{url('/logout')}}" role="button" style="color:#f45464;display: block; font-weight: 700; padding: 40px 16px;text-decoration: none;">Logout</a></li>
                </ul>
       </div>
       <div class="home-right-content" style="background-color:#E8E8E8;margin-top:50px; margin-bottom:50px;display:flex;flex-direction: row;">
           <div>
                <img src="{{ asset('assets/images/welcome.PNG') }}" style="width: 300px;height:500px"/>

           </div>
          <h1 style="color: #f45464; text-align:left; margin-left: 10px; padding-top: 100px">Welcome|{{Session::get('uname')}}</h1> 
          <h2 style="color: #f45464;text-align: left; margin-top: 400px">Select Your Option From Dashboard !!</h2>
        </div>

   </div>
@stop
<!doctype html>
<html>
    <head>
   {{-- @include('head') --}}
   <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}" />
   <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
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