@section('content')
   <div class="custom-home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       
    <div class="custom-main-content" style="background-color:#E8E8E8;margin-top:50px; display:flex;flex-direction: row;margin-bottom:50px;">
        <div>
             <img src="{{ asset('assets/images/map.PNG') }}" style="width: 300px;height:350px;margin:50px 25px 50px 50px;"/>
        </div>
         <div style="margin-top:50px; margin:50px 50px 50px 25px; text-align:center;">
             <h2 style="color: #f45464">Get In Touch</h2>
             <p style="color:#2c343c;">                    
            
            <p>ISI, L'institut Supérieur d'Informatique</p>
            <p>2100 Boul. de Maisonneuve E, Montréal, QC H2K 4S1</p>
            <p>(514) 842-2426</p>
             </p>
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
   <div id="main" class="row">
           @yield('content')
   </div>
<footer class="row">
    @include('footer')
</footer>
</div>
</body>
</html>


