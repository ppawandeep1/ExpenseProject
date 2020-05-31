@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection

  @section('content')


<img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px;height:100%"/>
<div name="calculate" style="
    margin-top: -500px;
    margin-left: 350px;">
        <h1 style="margin-top: -80%; padding-bottom: 50px; margin-left: 100px;">Calculate Expense....</h1>
        <form action="calculate_submit" method="post">

        	 <div class="form-group">
        	 	{{ csrf_field() }}<!--token-->
                                 <label>Staring Date</label>
                                  <input type="date" style=" width: 30%; height: 8% ;  text-align: center;" name="date_1" id="date_1" class="form-control" /><br></br>
                                  <label>Ending Date</label>
                                   <input type="date" style=" width: 30%; height: 8% ;  text-align: center;" name="date_2" id="date_2" class="form-control" /><br></br>
                                   <label>Select Group</label>
                                     <select id="group" name="group" class="form-control"style=" width: 30%; height: 8% ;  text-align: center;">
                                       <option value="" disabled selected>Select Group....</option>
                                          @foreach($groups as $g)
                                          <option  value="{{$g->id}}">{{$g->gname}}</option>
                                          @endforeach
                                      </select>
                                      <br></br>
                                
                                 <input type="submit" style="width: 30%; margin-left: 50px;" value="Calculate">
                                </div>
        </form>
</div>
 @endsection

@section('footer')
@parent
@endsection
