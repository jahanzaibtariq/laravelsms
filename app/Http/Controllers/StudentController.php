<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('authen');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d = \App\Student::paginate(7);
        return view('student.index',compact('d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.insertStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Student::insert(request()->except(['_token']));
        return redirect('/student');
    }
    // public function check(Request $request)
    // {
    //     dd($request->value);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=\App\Student::find($id);
        return view('student.editStudent',['d' => $d]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = \App\Student::find($request->id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->sex = $request->sex;
        $data->dob = $request->dob;
        $data->nationalcard = $request->nationalcard;
        $data->fathername = $request->fathername;
        $data->nationality = $request->nationality;
        $data->class = $request->class;
        $data->section = $request->section;
        $data->addmission_date = $request->addmission_date;
        $data->phone = $request->phone;
        $data->village = $request->village;
        $data->city = $request->city;
        $data->district = $request->district;
        $data->province = $request->province;
        $data->currentaddress = $request->currentaddress;
        $d=$data->save();
        if ($d) {
                return redirect('/student');
        }
        else
        {
           return   "Your data Was not Update";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        \App\Student::find($request->id)->delete();    
        return redirect('/student');
    }
    public function search(Request $request)
    {
        $d = \App\Student::where('firstname','like','%'.$request->text.'%')->paginate(7);
        return view('student.search',compact('d'));   
    }
}
