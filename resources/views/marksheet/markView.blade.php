@extends('layouts.master')
@section('content')
	<div>
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">View Mark Sheet</button>
	</div>
	<br><br>
	<div class="box-body">
	<table class="table">
		<thead>
			<tr>
			<th style="text-align: center;">Roll No</th>
			<th style="text-align: center;">First Name</th>
			<th style="text-align: center;">Obtain Marks</th>
			<th style="text-align: center;">Total Marks</th>
			</tr>
		</thead>
		<tbody>
			@foreach($c as $l)
				<tr style="text-align: center;">
					<td> {{$l->roll_no}} </td>
					<td> {{$l->student_name}} </td>
					<td> {{$l->obtain_mark}} </td>
					<td> {{$l->total_mark}} </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	</div>
@endsection