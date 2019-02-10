<?php

namespace App\Http\Controllers;

use App\Attendence;
use Illuminate\Http\Request;
use DB;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('attendence.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $d = \App\Student::where(['class'=>$request->class,
            'section'=>$request->section])->get();
        return view('attendence.attSheet',compact('d'));
    }
    public function store(Request $request)
    {
        $check=\App\Student::where(['class'=>$request->class,
            'section'=>$request->section])->count('roll_no');

        for($i = 0; $i < $check ; $i++) {
                $post = new Attendence;
                $post->mark = $request->mark[$i];
                $post->class = $request->class;
                $post->section = $request->section;
                $post->roll_no = $request->roll_no[$i];
                $post->firstname = $request->firstname[$i];
                $post->attendence_date = $request->attendence_date;
                $post->save();
         }
        return redirect('/take-attendence');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function show(Attendence $attendence)
    {
        $data = $attendence::all();    
        return view('attendence.attShow',compact('data'));
    }
    public function viewAtt(Request $request,Attendence $attendence)
    {
        $c = \App\Attendence::where(['class' => $request->class , 'section' => $request->section,'attendence_date'=>$request->date])->get();
        return view('attendence.attView',compact('c'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendence $attendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendence $attendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendence  $attendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendence $attendence)
    {
        //
    }
}
