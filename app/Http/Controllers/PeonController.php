<?php

namespace App\Http\Controllers;

use App\Peon;
use Illuminate\Http\Request;
use Auth;

class PeonController extends Controller
{
    public function __construct()
    {
        $this->middleware('authen');
    }
    public function index()
    {
            $d = \App\Peon::all();
            return view('peon.index',compact('d'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peon.insertPeon');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Peon::insert(request()->except(['_token']));
        return redirect('/peon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peon  $peon
     * @return \Illuminate\Http\Response
     */
    public function show(Peon $peon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peon  $peon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=\App\Peon::find($id);
        return view('peon.editPeon',['d'=>$d]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peon  $peon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $data = \App\Peon::find($id);
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
                return redirect('/peon');
        }
        else
        {
           return   "Your data Was not Update";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peon  $peon
     * @return \Illuminate\Http\Response
     */
   public function delete(Request $request)
    {
        \App\Peon::find($request->id)->delete();    
        return redirect('/peon');
    }
}
