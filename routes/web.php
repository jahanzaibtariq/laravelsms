<?php
Route::get('/noPermission',function(){
	return view('noPermission');
});

Route::get('/home','DashboardController@index');
Route::get('/','LoginController@getLogin');
Route::post('/login','LoginController@index');
Route::get('/admin-logout','LoginController@getLogout');
//Route::get('/manage-course','CoursesController@getManageCourses');
//Teacher Controller
Route::get('/teacher','TeacherController@index');
Route::get('/teacherForm','TeacherController@create');
Route::post('/add-teacher', 'TeacherController@store');
Route::get('/deleteTeacher/{id}','TeacherController@delete');
Route::get('/editTeacher/{id}','TeacherController@edit');
Route::post('/updateTeacher/{id}','TeacherController@update');
//Peon Controller
Route::get('/peon','PeonController@index');
Route::get('/peonForm','PeonController@create');
Route::post('/add-peon', 'PeonController@store');
Route::get('/deletePeon/{id}','PeonController@delete');
Route::get('/editPeon/{id}','PeonController@edit');
Route::post('/updatePeon/{id}','PeonController@update');
//Sweeper Controller
Route::get('/sweeper','SweeperController@index');
Route::get('/sweeperForm','SweeperController@create');
Route::post('/add-sweeper', 'SweeperController@store');
Route::get('/deleteSweeper/{id}','SweeperController@delete');
Route::get('/editSweeper/{id}','SweeperController@edit');
Route::post('/updateSweeper/{id}','SweeperController@update');
//Security Guard Controller
Route::get('/guard','GuardController@index');
Route::get('/guardForm','GuardController@create');
Route::post('/add-guard', 'GuardController@store');
Route::get('/deleteGuard/{id}','GuardController@delete');
Route::get('/editGuard/{id}','GuardController@edit');
Route::post('/updateGuard/{id}','GuardController@update');
// Student Controller
Route::get('/student','StudentController@index');
Route::get('/studentForm','StudentController@create');
Route::post('/add-student','StudentController@store');
Route::get('/editStudent/{id}','StudentController@edit');
Route::post('/updateStudent/{id}','StudentController@update');
Route::get('/deleteStudent/{id}','StudentController@delete');
Route::post('/searchStudent','StudentController@search');
//Route::get('/add-student-class','StudentController@check');
//Attendence 
Route::get('/take-attendence','AttendenceController@index');
Route::get('/attendence-sheet','AttendenceController@create');
Route::post('/save-attendence','AttendenceController@store');
Route::get('/show-attendence','AttendenceController@show');
Route::post('/view-attendence','AttendenceController@viewAtt');
//Marks Controller
Route::get('/enter-marks-of-class','SubjectController@index');
Route::get('/subjectForm','SubjectController@create');
Route::post('/add-subject','SubjectController@store');
Route::get('/editSubject/{id}','SubjectController@edit');
Route::post('/updateSubject/{id}','SubjectController@update');
Route::get('/deleteSubject/{id}','SubjectController@delete');
//Student Marks Controller
Route::get('/enter-marks-of-student','MarksheetController@index');
Route::get('mark-sheet','MarksheetController@create');
Route::post('/save-marksheet','MarksheetController@store');
Route::get('/show-marksheet','MarksheetController@show');
Route::post('/view-mark','MarksheetController@viewMark');

//Shedule
Route::get('/class-shedule','TimeTableController@index');
Route::get('/sheduleForm','TimeTableController@create');
Route::post('/add-shedule','TimeTableController@store');
Route::get('/deleteShedule/{id}','TimeTableController@delete');
Route::get('/editShedule/{id}','TimeTableController@edit');
Route::post('/update-shedule/{id}','TimeTableController@update');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
