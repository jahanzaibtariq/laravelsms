<?php

namespace App\Http\Controllers;

use App\Sweeper;
use Illuminate\Http\Request;
use Auth;

class SweeperController extends Controller
{
    public function __construct()
    {
        $this->middleware('authen');
    }
    public function index()
    {
            $d = \App\Sweeper::all();
            return view('sweeper.index',compact('d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sweeper.insertSweeper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Sweeper::insert(request()->except(['_token']));
        return redirect('/sweeper');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sweeper  $sweeper
     * @return \Illuminate\Http\Response
     */
    public function show(Sweeper $sweeper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sweeper  $sweeper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=\App\Sweeper::find($id);
        return view('sweeper.editSweeper',compact('d'));
    }
    public function update(Request $request,$id)
    {
        $data = \App\Sweeper::find($id);
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->sex = $request->sex;
        $data->dob = $request->dob;
        $data->nationalcard = $request->nationalcard;
        $data->status = $request->status;
        $data->nationality = $request->nationality;
        $data->workinghours = $request->workinghours;
        $data->phone = $request->phone;
        $data->village = $request->village;
        $data->city = $request->city;
        $data->district = $request->district;
        $data->province = $request->province;
        $data->currentaddress = $request->currentaddress;
        $d=$data->save();
        if ($d) {
                return redirect('/sweeper');
        }
        else
        {
           return   "Your data Was not Update";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sweeper  $sweeper
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        \App\Sweeper::find($request->id)->delete();    
        return redirect('/sweeper');
    }
}
