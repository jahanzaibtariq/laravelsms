<?php
namespace App\Http\Controllers;
use App\Teacher;
use Illuminate\Http\Request;
use Auth;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('authen');
    }
    public function index()
    { 
       $d=\App\Teacher::all();
       return view('teacher.index',compact('d'));
    }
    
    public function create()
    {
        return view('teacher.insertTeacher');
    }
    public function store(Request $request)
    {
        \App\Teacher::insert(request()->except(['_token']));
        return redirect('/teacher');
    }
    public function show(Teacher $teacher)
    {
        //
    }
    public function edit(Request $request)
    {
        $d=\App\Teacher::find($request->id)->all();
        return view('teacher.editTeacher',compact('d'));
    }
    public function update(Request $request)
    {
        $data = \App\Teacher::find($request->id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->sex = $request->sex;
        $data->dob = $request->dob;
        $data->nationalcard = $request->nationalcard;
        $data->specialization = $request->specialization;
        $data->status = $request->status;
        $data->nationality = $request->nationality;
        $data->workinghours = $request->workinghours;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->village = $request->village;
        $data->city = $request->city;
        $data->district = $request->district;
        $data->province = $request->province;
        $data->currentaddress = $request->currentaddress;
        $d=$data->save();
        if ($d) {
                return redirect('/teacher');
        }
        else
        {
           return   "Your data Was not Update";
        }


    }
    public function delete(Request $request)
    {
        \App\Teacher::find($request->id)->delete();    
        return redirect('/teacher');
    }
}
