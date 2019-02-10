<?php

namespace App\Http\Controllers;

use App\Marksheet;
use Illuminate\Http\Request;

class MarksheetController extends Controller
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
        return view('marksheet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $d = \App\Student::where('class',$request->class)->get();
        return view('marksheet.markSheet',compact('d'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check=\App\Student::where('class',$request->class)->count('roll_no');

        for($i = 0; $i < $check ; $i++) {
                $post = new Marksheet;
                $post->marksheet_name = $request->marksheet_name;
                $post->class = $request->class;
                $post->obtain_mark = $request->obtain_mark[$i];
                $post->total_mark = $request->total_mark[$i];
                $post->roll_no = $request->roll_no[$i];
                $post->student_name = $request->firstname[$i];
                $post->save();
        }
        return redirect('/show-marksheet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('marksheet.markShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
      public function viewMark(Request $request,Marksheet $marksheet)
    {
        $c = \App\Marksheet::where(['class' => $request->class ,'marksheet_name'=>$request->marksheet_name])->get();
        return view('markSheet.markView',compact('c'));
    }
    public function edit(Marksheet $marksheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marksheet $marksheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marksheet  $marksheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marksheet $marksheet)
    {
        //
    }
}
