
@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection
           
	    		 @section('content')
          

           <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
                  <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px; height:100%"/>
             <div class = "membody">
             <h2 style="color: #000000; padding-bottom: 50px;margin-top:2%; margin-left: -20%;">Add Expenses...</h2>
           

           @if(Session::has('success'))
           <div class="alert alert-danger alert-block" style="margin-bottom: 50px;">
                      <strong style="color: green; margin-left: -25%;">{!! session('success') !!}</strong>
                   </div>
           @endif
  
        

                <form action="/expensesubmit" method = "post">
                    {{ csrf_field() }}
                
                    <div class="alert alert-info" style="width:100%; margin-top:-30px; height: 100px;">

                    
                        <div class="form-group">
                         <input type="date" style=" width: 80%; height: 50% ;  margin-left: -30%; text-align: center;" name="date" id="date" class="form-control" />
                        <div>
                         @if ($errors->has('date'))
                         <strong style=" margin-left: -30%; ">{{ $errors->first('date') }}</strong>
                          @endif
                        </div>
                        </div><br></br>
                        
                       

                        <div class="form-group">
                          
                          <input  style=" width: 80%; height: 50% ; margin-left: -30%; margin-top:-30px; text-align: center;" class="form-control" name="username" id="username"  value="{{session('uname')}}" placeholder="Enter User Name...."><br></br>
                        </div>

      
                        <select style="width: 40%; height: 40px ; margin-left: -30%;" name="selectgroup" id="selectgroup"  >
                          <option value="" disabled selected>Select Group....</option>
                         
                          @foreach($groups as $i)
                        <option value="{{$i->id}}">{{$i->gname}}</option>
                        
                          @endforeach
                          
                        </select>
                       


                        <select  style="width: 40%; height: 40px ;"  name="selectcategory" id="selectcategory" >
                          <option value="" disabled selected>Select Category....</option>
                          @foreach($categories as $c_name)
                        <option value="{{$c_name->id}}">{{$c_name->category_name}}</option>
                          @endforeach
                        </select>
                        <div>
                        @if ($errors->has('selectgroup'))
                        <strong style=" margin-left: -30%; ">{{ $errors->first('selectgroup') }}</strong>
                         @endif</div>
                         <div>
                         @if ($errors->has('selectcategory'))
                         <strong style=" margin-left: -30%; ">{{ $errors->first('selectcategory') }}</strong>
                          @endif
                        </div>
                            
                        
            

                      <div class="form-group">
                      <input style=" width: 80%; height: 50% ;margin-left: -30%; margin-top:20px; text-align: center;"class="form-control" name="description" id="description" placeholder="Enter Description....">
                         <!-- <input type="text" class="form-control" id="description" name="description">-->
                         <div>
                         @if ($errors->has('description'))
                         <strong style=" margin-left: -30%; ">{{ $errors->first('description') }}</strong>
                          @endif
                         </div>
                      </div> <br></br>
                    
                     
                      <div class="form-group">
                       
                        <!--<span class="input-group-addon">CAD</span>-->
                        <input style=" width: 80%; height: 50% ; margin-left: -30%;  margin-top:-20px;  text-align: center;"  type="numbers" class="form-control" id="amount" name="amount" placeholder="CAD">
                        <div>
                        @if ($errors->has('amount'))
                        <strong style=" margin-left: -30%; ">{{ $errors->first('amount') }}</strong>
                         @endif
                        </div>
                      </div>
                     
                      

                      <input style="  margin-left: -10%; " type="submit" value="Submit"> <!--<input type="submit" value="cancel">-->.
                      
                    </div>
                  </div>
                 
                  </form>
                 
              </div>
              @endsection

  @section('footer')
  @parent
  @endsection  
             