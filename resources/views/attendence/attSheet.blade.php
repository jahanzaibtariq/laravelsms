@extends('layouts.master')
@section('content')
	<div>
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Mark Attendence</button>
	</div>
	<form action=" {{ url('/save-attendence') }} " method="post">
		{{csrf_field()}}
		<div  style="text-align: center;margin-left: 38%; margin-top: 2%;
		margin-right: 40%;">
			<div class="form-group" >
				<label for="district" >Attendence Date</label>
				<input type="date" name="attendence_date"  class="form-control" required>
			</div>
		</div>
		<br>
		<div class="col-md-3" style="margin-left: 5%;">
			<table class="table table-border">
				<thead>
					<th>Roll No </th>
					<th>Name</th>
					<th>Mark</th>
				</thead>
				<tbody>
					@foreach($d as $l)
						<tr>
							<td>{{$l->roll_no}}</td>
							<td> {{$l->firstname}}</td>
							<td>
							<div class="col-md-3">
								<div class="form-group" >
									<select style="margin-top: 0%;height:35px;" name="mark[]" required id="sections">
										  <option value="Paresent">Paresent</option>
										  <option value="Absent">Absent</option>
										  <option value="Leave">Leave</option>
									</select>
								</div>
							</div>
							</td>
						</tr>
							<input type="hidden" name="class" value="{{$l->class}}">
							<input type="hidden" name="roll_no[]" value="{{$l->roll_no}}">
							<input type="hidden" name="section" value="{{$l->section}}">
							<input type="hidden" name="firstname[]" value="{{$l->firstname}}">
					@endforeach
				</tbody>
			</table>
		</div>
		<div>
		<button type="submit" class="btn btn-primary" style="margin-left: 15%; margin-top:20%;">Submit Attendence</button>
		</div>
	</form>	
@endsection