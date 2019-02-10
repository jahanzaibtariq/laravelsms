@extends('layouts.master')
@section('content')
<style type="text/css">
.student-photo{
	height: 160px;
	padding-left: 1px;
	padding-right: 1px;
	border: 1px solid #ccc;
	background: #eee;
	width: 140px;
	margin: 0 auto;
}
.photo > input[type='file']{
	display: none;
}
.photo{
	width: 30px;
	height: 30px;
	border-radius: 100%;

}
.student-id{
	background-repeat: repeat-x;
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background:#eee;
	border-bottom: 1px solid #ccc;
}
.btn-browse{
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background:#eee;
	border: none;
	border-top: 1px solid #ccc;
}
fieldset{
	margin-top: 5px;
}
fieldset legend{
	display: block;
	width: 100%;
	padding: 0px;
	font-size: 15px;
	line-height: inherit;
	color: #797979;
	border: 0;
	border-bottom: 1px solid #e5e5e5;

}
</style>
<div class="row">
	<div class="col-lg-12" style="text-align: center;">
		<h3 class="page-header"><i class="fa fa-file-text-o"></i> Student Registration </h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default" >
			<div class="panel-heading">
				<b><i class="fa fa-apple"></i> Student Information </b>
			</div>
			<div class="panel-body" style="padding-bottom: 4px">
				<form action="{{ url('/add-student') }}" method="POST" id="form-create-student" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9">
							<div>
								{{-------------first Name----------}}
								<div class="col-md-4">
									<div class="form-group" >
										<label for="lastname">Student Name</label>
										{{csrf_field()}}
										<input type="text" name="firstname" id="first_name" class="form-control" required>
									</div>
								</div>
								{{-------Last Name-------}}
								<div class="col-md-4">
									<div class="form-group" >
										<label for="lastname">Last Name</label>
										<input type="text" name="lastname" id="last_name" class="form-control" required>
									</div>
								</div>
								{{-------Gender------}}
								<div class="col-md-4">
									<div class="form-group" >
										<fieldset>
											<legend>sex</legend>
											<table style="width: 100%;margin-top: -14px;" >
												<tr style="border-bottom: 1px solid #ccc">
													<td>
														<label>
															<input type="radio" name="sex" id="sex" value="0" required>
															Male
														</label>
													</td>
													<td>
														<label>
															<input type="radio" name="sex" id="sex" value="1" required>
															Female
														</label>
													</td>
												</tr>
											</table>
										</fieldset>
									</div>
								</div>
							</div>
							{{-------DOB------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="dob">Birth Date</label>
									<div class="input-group">
										<input type="date" data-date-format="DD MMMM YYYY" value="2015-08-09" name="dob" id="dob" class="form-control"  required>
									</div>
								</div>
							</div>
							{{-------National Card------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="nationnal_card">Father CNIC</label>
									<input type="number" name="nationalcard" id="nationnal_card" class="form-control" required>
								</div>
							</div>
							{{-------Father Name------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="nationality">Father Name</label>
									<input type="text" name="fathername" id="nationality" class="form-control" required>
							</div>
							</div>{{-------Nationality------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="nationality">Nationality</label>
									<input type="text" name="nationality" id="nationality" class="form-control" required>
								</div>
							</div>
							{{-------phone------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="phone">Father Phone No</label>
									<input type="number" name="phone" id="phone" class="form-control" required>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group" >
									<label for="phone">Father Occupation</label>
									<input type="text" name="occupation" id="phone" class="form-control" required>
								</div>
							</div>


				</div>
						</div>
						</div>
				</div>
				<br>
				{{--------academic information------}}
				<div class="panel-heading" style="margin-top: -20px">
					<b > <i class="fa fa-apple"></i> Academic Information </b>
				</div>
				<div class="panel-body" style=" padding-bottom: 10px; padding-top: 0px">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group" >
								<label for="village" >Roll_no</label>
								<input type="number" name="roll_no" id="village" class="form-control" required>
							</div>
						</div>
						<div class="col-md-3">
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

						<div class="col-md-3">
							<div class="form-group" >
								<label for="province" >Section</label><br>
								<select style="margin-top: 0%;height:35px;" name="section" required id="sections">
									  <option>A</option>
									  <option>B</option>
									  <option>C</option>
								</select>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group" >
								<label for="district" >Admission Date</label>
								<input type="date" name="addmission_date" id="district" class="form-control" required>
							</div>
						</div>
					</div>
				</div>
				
				<br>
				{{--------address------}}
				<div class="panel-heading" style="margin-top: -20px">
					<b > <i class="fa fa-apple"></i> Address </b>
				</div>
				<div class="panel-body" style=" padding-bottom: 10px; padding-top: 0px">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group" >
								<label for="village" >Village</label>
								<input type="text" name="village" id="village" class="form-control" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group" >
								<label for="commune" >City</label>
								<input type="text" name="city" id="commune" class="form-control" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group" >
								<label for="district" >District</label>
								<input type="text" name="district" id="district" class="form-control" required>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group" >
								<label for="province" >Province</label>
								<input type="text" name="province" id="province" class="form-control" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group" >
								<label for="current_address" >Current Address</label>
								<input type="text" name="currentaddress" id="current_address" class="form-control" required>
							</div>
						</div>	

					</div>
				<div class="panel-footer">
					<button value="submit" class="btn btn-default btn-save">Add Students <i class="fa fa-save"></i></button>
				</div>
			</form>
		</div></div></div></div>
@endsection