
@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection
           
	    		 @section('content')
          
                 <!--Logo for our project shows in the url-->
           <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
                  <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px; height:100%"/>
             <div class = "membody">
             <h2 style="color: #000000; padding-bottom: 50px;margin-top:2%; margin-left: -20%;">Add Expense....</h2>
           

              <!--Success message for expense added successfully-->
           @if(Session::has('success'))
           <div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                      <strong style="color: green; margin-left: -25%;">{!! session('success') !!}</strong>
                   </div>
           @endif
  
                        <!--Form starts from here-->
                <form action="/expensesubmit" method = "post">
                    {{ csrf_field() }}
                
                    <div class="alert alert-info" style="width:100%; margin-top:-30px; height: 100px;">

                    <!--Input field-->
                        <div class="form-group">
                         <input type="date" style=" width: 80%; height: 50% ;  margin-left: -30%; text-align: center;" name="date" id="date" class="form-control" />
                        <div>

                           <!--Required validations-->
                         @if ($errors->has('date'))
                         <li style=" margin-left: -30%; ">{{ $errors->first('date') }}</li>
                          @endif
                        </div>
                        </div><br></br>
                        
                       
                       <!--Get username from user table-->
                        <div class="form-group">
                          <input  style=" width: 80%; height: 50% ; margin-left: -30%; margin-top:-30px; text-align: center;" class="form-control" name="username" id="username"  value="{{session('uname')}}" placeholder="Enter User Name...."><br></br>
                        </div>

      
                         <!--get the group names from the group table and shows in the dropdown list-->
                        <select style="width: 40%; height: 40px ; margin-left: -30%;" name="selectgroup" id="selectgroup"  >
                          <option value="" disabled selected>Select Group....</option>
                         
                          @foreach($groups as $i)
                        <option value="{{$i->id}}">{{$i->gname}}</option>
                          @endforeach
                          </select>
                       

                          <!--get the category names from the category table and shows in the dropdown list-->
                        <select  style="width: 40%; height: 40px ;"  name="selectcategory" id="selectcategory" >
                          <option value="" disabled selected>Select Category....</option>
                          @foreach($categories as $c_name)
                        <option value="{{$c_name->id}}">{{$c_name->category_name}}</option>
                          @endforeach
                        </select>

                        <!--Required validations-->
                        <div>
                        @if ($errors->has('selectgroup'))
                        <li style=" margin-left: -30%; ">{{ $errors->first('selectgroup') }}</li>
                         @endif</div>
                         <div>
                         @if ($errors->has('selectcategory'))
                         <li style=" margin-left: -30%; ">{{ $errors->first('selectcategory') }}</li>
                          @endif
                        </div>
                            
                        
            
                         <!--Input field-->
                      <div class="form-group">
                      <input style=" width: 80%; height: 50% ;margin-left: -30%; margin-top:20px; text-align: center;"class="form-control" name="description" id="description" placeholder="Enter Description....">
                        
                      <!--Required validations-->
                         <div>
                         @if ($errors->has('description'))
                         <li style=" margin-left: -30%; ">{{ $errors->first('description') }}</li>
                          @endif
                         </div>
                      </div> <br></br>
                    
                     
                       <!--Input field-->
                      <div class="form-group">
                        <input style=" width: 80%; height: 50% ; margin-left: -30%;  margin-top:-20px;"  type="numbers" class="form-control" id="amount" name="amount" placeholder="CAD">
                        
                        <!--Required validations-->
                        <div>
                        @if ($errors->has('amount'))
                        <li style=" margin-left: -30%; ">{{ $errors->first('amount') }}</li>
                         @endif
                        </div>
                      </div>
                     
                      <!--Buttons-->
                      <input style="  margin-left: -40%; margin-top: 5%;" type="submit" value="Submit"> 
                      <input type="reset" value="Cancel">
                    </div>
                  </div>
                 
                  </form>
                 
              </div>
              @endsection

  @section('footer')
  @parent
  @endsection  
             