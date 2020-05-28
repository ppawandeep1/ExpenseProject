@section('content')
   <div class="home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       <div class="home-left-content" style="background-color:#DCDCDC; min-height:500px; margin-top:50px; margin-bottom:50px;">
                <ul style="list-style-type: none; margin: 5px; padding: 10px;">

                    <li><a href="/dashboard" style="color:#2c343c;display: block; font-weight: 900;
                        padding: 8px 16px; text-decoration: none;">Dashboard</a></li>
                    <li><a  href="group" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                        padding: 8px 16px; text-decoration: none;">Create Groups</a></li>
                    <li><a  href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;
                            padding: 8px 16px; text-decoration: none;">Add Group Members</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700;padding: 8px 16px;
                        text-decoration: none;">Add Expense</a></li>
                    <li><a href="#" onMouseOver="this.style.background='#606060'" onMouseOut="this.style.background='none'" style="color:#f45464;display: block; font-weight: 700; padding: 8px 16px;text-decoration: none;">Calculate Expense</a></li>

                </ul>
       </div>
       <div class="home-right-content" style="background-color:#E8E8E8;margin-top:50px; margin-bottom:50px;display:flex;flex-direction: row;">
           <div>
                <img src="{{ asset('assets/images/welcome.PNG') }}" style="width: 300px;height:500px"/>
           </div>
                
            
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
   <!--<div id="main" class="row">
           @yield('content')
   </div>--->
            <div id="main" class="row" style="height: 50%;  width:100%">
                <div class="home-right-content" style="margin-top:50px; margin-bottom:50px;display:flex;flex-direction: row;">
                <div style="height: 50%;  width:200%" >
                  <img src="{{ asset('assets/images/emoji3.png') }}" style="width:100%;height:100%;margin-left: 100px"/>
               </div>
              <div style="margin-top:100px; margin-left:30px;">
                <h2 style="color: #f45464; text-align: center; margin-left: 100px">Expense System is a Providence, that makes it easy to split bills with friends and family. We organize all your shared expenses together, so that everyone can see who they owe. Whether you are sharing a ski vacation, splitting rent with roommates, or paying someone back for lunch, Expense System makes life easier. </h2>
              </div>
            </div>
           </div>

<footer class="row">
    @include('footer')
</footer>
</div>
</body>
</html>