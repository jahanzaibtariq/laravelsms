@extends('layouts.master')
@section('content')
	<div>
		<button type="button" class="btn btn-primary" style="margin-left: 45%; margin-top: 4%;">Chose Class</button>
	</div>
	 <form method="get" action="{{ url('/attendence-sheet') }}">
	<div class="col-md-3" style="margin-left: 30%;margin-top: 3%;">
							<div class="form-group" >
								<label for="commune">Class</label><br>
								<select style="margin-top: 0%;height:35px;" name="class" required onchange="handleClass()" id="class">
									  <option>KG</option>
									  <option>KG1</option>
									  <option>One</option>
									  <option>Two</option>
									  <option>Three</option>
									  <option>Four</option>
									  <option>Five</option>
									  <option>Six</option>
									  <option>Seven</option>
									  <option>Eight</option>
									  <option>Nine</option>	
									  <option>Ten</option>
								</select>
							</div>
	</div>

						<div class="col-md-3" style="margin-top: 3%;">
							<div class="form-group" >
								<label for="province" >Section</label><br>
								<select style="margin-top: 3%;height:35px;" name="section" required id="sections">
									  <option>A</option>
									  <option>B</option>
									  <option>C</option>
								</select>
							</div>
						</div>
	<div>
		<button type="submit" class="btn btn-primary" style="margin-left: 42%; margin-top: 4%;">See Attendence Sheet</button>
	</div>
	</form>
@endsection