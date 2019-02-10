<?php

namespace App\Http\Controllers;

use App\Guard;
use Illuminate\Http\Request;
use Auth;

class GuardController extends Controller
{
    public function __construct()
    {
        $this->middleware('authen');
    }
    public function index()
    {
            $d = \App\Guard::all();
            return view('guard.index',compact('d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guard.insertGuard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $d=\App\Guard::insert(request()->except(['_token']));
        
        return redirect('/guard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guard  $guard
     * @return \Illuminate\Http\Response
     */
    public function show(Guard $guard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guard  $guard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=\App\Guard::find($id);
        return view('guard.editGuard',['d'=>$d]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guard  $guard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = \App\Guard::find($id);
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
                return redirect('/guard');
        }
        else
        {
           return   "Your data Was not Update";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guard  $guard
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        \App\Guard::find($request->id)->delete();    
        return redirect('/guard');
    }
}
