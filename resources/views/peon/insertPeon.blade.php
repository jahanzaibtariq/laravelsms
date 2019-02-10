@extends('layouts.master')
@section('content')
<style type="text/css">
.student-photo
{
	height: 160px;
	padding-left: 1px;
	padding-right: 1px;
	border: 1px solid #ccc;
	background: #eee;
	width: 140px;
	margin: 0 auto;
}
.photo > input[type='file']
{
	display: none;
}
.photo
{
	width: 30px;
	height: 30px;
	border-radius: 100%;
}
.student-id
{
	background-repeat: repeat-x;
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background:#eee;
	border-bottom: 1px solid #ccc;
}
.btn-browse
{
	border-color: #ccc;
	padding: 5px;
	text-align: center;
	background:#eee;
	border: none;
	border-top: 1px solid #ccc;

}
fieldset
{
	margin-top: 5px;

}
fieldset legend
{
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
		<h3 class="page-header"><i class="fa fa-file-text-o"></i> Peon Registration </h3>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default" >
			<div class="panel-heading">
				<b><i class="fa fa-apple"></i> Peon Information </b>
			</div>

			<div class="panel-body" style="padding-bottom: 4px">
				<form action="{{ url('/add-peon') }}" method="POST" id="form-create-student" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9">
							<div>
								{{-------------first Name----------}}
								<div class="col-md-4">
									<div class="form-group" >
										<label for="lastname">First name</label>
										{{csrf_field()}}
					
										<input type="text" name="firstname" id="first_name" class="form-control" required>
									</div>
								</div>
								{{-------Last Name-------}}

								<div class="col-md-4">
									<div class="form-group" >
										<label for="lastname">Last name</label>
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
									<label for="nationnal_card">National Card-No.</label>
									<input type="number" name="nationalcard" id="nationnal_card" class="form-control" required>
								</div>
							</div>

							{{-------Status------}}

							<div class="col-md-4">
								<div class="form-group" >
									<fieldset>
										<legend>Status</legend>
										<table style="width: 100%;margin-top: -14px;" >
											<tr style="border-bottom: 1px solid #ccc">
												<td>
													<label>
														<input type="radio" name="status" id="status" value="0" required>
														Singel
													</label>
												</td>
												<td>
													<label>
														<input type="radio" name="status" id="status" value="1" required>
														Married
													</label>
												</td>
											</tr>
										</table>
									</fieldset>
								</div>
							</div>

							{{-------Nationality------}}


							<div class="col-md-4">
								<div class="form-group" >
									<label for="nationality">Nationality</label>
									<input type="text" name="nationality" id="nationality" class="form-control" required>
								</div>
							</div>
							{{-------Working Hours------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="passport">Working Hours</label>
									<input type="number" name="workinghours" id="passport" class="form-control" required>
								</div>
							</div>

							{{-------phone------}}
							<div class="col-md-4">
								<div class="form-group" >
									<label for="phone">phone</label>
									<input type="number" name="phone" id="phone" class="form-control" required>
								</div>
							</div>
						</div>
						{{--------------------------------}}
					</div>
				</div>
				<br>
				{{--------address------}}
				<div class="panel-heading" style="margin-top: -20px">
					<b > <i class="fa fa-apple"></i> Address</b>
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
				</div>
				<div class="panel-footer">
					<button value="submit" class="btn btn-default btn-save">Add Sweeper <i class="fa fa-save"></i></button>
				</div>
			</form>
		</div></div></div></div>
@endsection