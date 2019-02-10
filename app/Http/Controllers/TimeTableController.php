<?php

namespace App\Http\Controllers;

use App\TimeTable;
use Illuminate\Http\Request;

class TimeTableController extends Controller
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
        $data = \App\TimeTable::all();
        return view('classshedule.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classshedule.insertShedule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\TimeTable::insert($request->all());
        return redirect('/class-shedule');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function show(TimeTable $timeTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data= \App\TimeTable::find($request->id)->all();
        return view('classshedule.editShedule',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = \App\TimeTable::find($request->id);
        $data->class = $request->class;
        $data->lec1 = $request->lec1;
        $data->lec2 = $request->lec2;
        $data->lec3 = $request->lec3;
        $data->lec4 = $request->lec4;
        $data->lec5 = $request->lec5;
        $data->lec6 = $request->lec6;
        $data->lec7 = $request->lec7;
        $data->lec8 = $request->lec8;
        $data->lec9 = $request->lec9;
        $d=$data->save();
        if ($d) {
                return redirect('/class-shedule');
        }
        else
        {
           return   "Your data Was not Update";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        \App\TimeTable::find($request->id)->delete();
        return redirect('/class-shedule');
    }
}
