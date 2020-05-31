@extends('layout')

@section('header')
@parent
@endsection

  @section('sidebar')
  @parent
  @endsection
    @section('content')
           <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
           <img src="{{ asset('assets/images/emoji2.png') }}" style="width: 250px;height:100%"/>
           <div name="viewEx" style="
    margin-top: -500px;
    margin-left: 350px;
">
			<h1 style="margin-top: -80%; padding-bottom: 50px; margin-left: 100px;">All Expenses....</h1>
			<div class="table">
				<table style="width:20% ; border: 1px solid black;">
					<tr style="border: 1px solid black;">
						<th style="border: 1px solid black;">Date</th>
					    <th style="border: 1px solid black;">User</th>
					    <th style="border: 1px solid black;">Group</th>
					    <th style="border: 1px solid black;">Category</th>
					    <th style="border: 1px solid black;">Description</th>
					    <th style="border: 1px solid black;">Amount</th>
			        </tr>
			        @foreach($data as $i)
			        <tr style="border: 1px solid black;" >
						<td style="border: 1px solid black;">
							{{$i-> date}}
						</td>
						<td style="border: 1px solid black;">
						{{$i->username}}	
						</td>
						<td style="border: 1px solid black;">
						{{$i->gname}}	
						</td>
						<td style="border: 1px solid black;">
						{{$i->category_name}}	
						</td>
						<td style="border: 1px solid black;">
						{{$i->description}}	
						</td>
						<td style="border: 1px solid black;">
						{{$i->amount}}	
						</td>
						@endforeach
				    </tr>
			    </table>

           </div>
                 <br></br><a href="/calculate"> Expense Calculate</a>
       </div>
@endsection

@section('footer')
@parent
@endsection
