@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection

  @section('content')
  <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px;height:100%"/>
<div name="finalex" style="
    margin-top: -500px;
    margin-left: 350px;">
        <h1 style="margin-top: -80%; padding-bottom: 50px; margin-left: 100px;">Your Expense is....</h1>
<div class="table" style="margin-left: 200px;">
	<table style="width:20% ; border: 1px solid black;">
		<tr style="border: 1px solid black;">
		    <th style="border: 1px solid black;">User</th>
		    <th style="border: 1px solid black;">Paid</th>
        </tr>
        @foreach($users as $i)
        <tr style="border: 1px solid black;" >
			<td style="border: 1px solid black;">
			{{$i->username}}	
			</td>
			<td style="border: 1px solid black;">
			{{$i->amount}}	
			</td>
			@endforeach
	    </tr>
    </table>
</div>
</div>
@endsection

@section('footer')
@parent
@endsection