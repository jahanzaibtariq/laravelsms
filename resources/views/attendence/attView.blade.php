@extends('layouts.master')
@section('content')
	<div>
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">View Attendence Sheet</button>
	</div>
	<br><br>
	<div class="box-body">
	<table class="table">
		<thead>
			<tr>
			<th style="text-align: center;">Attendence Date</th>
			<th style="text-align: center;">Roll No</th>
			<th style="text-align: center;">First Name</th>
			<th style="text-align: center;">Attendence</th>
			</tr>
		</thead>
		<tbody>
			@foreach($c as $l)
				<tr style="text-align: center;">
					<td>{{$l->attendence_date}}</td>
					<td> {{$l->roll_no}} </td>
					<td> {{$l->firstname}} </td>
					<td> {{$l->mark}} </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
@endsection