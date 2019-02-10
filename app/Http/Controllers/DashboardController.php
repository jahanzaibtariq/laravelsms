<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('authen');
    }
    public function index()
    {
    	$student=\App\Student::count('id');
    	$teacher=\App\Teacher::count('id');
    	$sweeper=\App\Sweeper::count('id');
    	$guard=\App\Guard::count('id');
    	$peon=\App\Peon::count('id');
        return view('front',['student'=>$student,'teacher'=>$teacher,
    		'sweeper'=>$sweeper,'guard'=>$guard,'peon'=>$peon]);
    }
}
