@section('content')
   <div class="custom-home-main-content" style="background-image: url('assets/images/body_bg.jpeg')";>
       
       <div class="custom-main-content" style="background-color:#E8E8E8;margin-top:50px; display:flex;flex-direction: row;">
           <div>
                <img src="{{ asset('assets/images/moneySplit.jpg') }}" style="width: 300px;height:350px;margin:50px 25px 50px 50px;"/>
           </div>
            <div style="margin-top:50px; margin:50px 50px 50px 25px; text-align:center;">
                <h2 style="color: #f45464">What is Expense System?</h2>
                <p style="color:#2c343c;">                    
                    Expense System is a Providence, that makes it easy to split bills with friends and family. We organize all your shared expenses together, so that everyone can see who they owe. Whether you are sharing a ski vacation, splitting rent with roommates, or paying someone back for lunch, Expense System makes life easier.
                    <br><br>
                    Most people want to be fair to each other, but sometimes they forget, or can’t decide on what fair is. In addition to helping people honor their debts, we provide this software for fairness issues through our Expense System application.” 
                </p>
            </div>
       </div>
       <div class="custom-main-content" style="background-color:#E8E8E8;margin-top:30px;">
            <h2 style="color: #f45464;text-align:center;margin-top:50px;">Team Members</h2>
       </div>
       <div class="custom-main-content team-members" style="background-color:#E8E8E8;margin-bottom:50px;">
            <div class="team-member-detail">
                <img src="{{ asset('assets/images/manjinder.JPG') }}" style="width: 100px;height:100px;"/>
                <div>
                    <i>Manjinder Kaur</i>
                </div>
            </div>
            <div class="team-member-detail">
                <img src="{{ asset('assets/images/kuljit.jpg') }}" style="width: 100px;height:100px;"/>
                <div>
                    <i>Kuljit Kaur</i>
                </div>
            </div>
            <div class="team-member-detail">
                <img src="{{ asset('assets/images/pawan.jpg') }}" style="width: 100px;height:100px;"/>
                <div>
                    <i>Pawandeep Kaur</i>
                </div>
            </div>
            <div class="team-member-detail">
                <img src="{{ asset('assets/images/trinadth.jpg') }}" style="width: 100px;height:100px;"/>
                <div>
                    <i>Trinadth Reddy</i>
                </div>
            </div>
            <div class="team-member-detail">
                <img src="{{ asset('assets/images/gagan.jpg') }}" style="width: 100px;height:100px;"/>
                <div>
                    <i>Gagandeep Banger</i>
                </div>
            </div>
       </div>
   </div>
@stop
<!doctype html>
<html>
    <head>
   {{-- @include('head') --}}
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


