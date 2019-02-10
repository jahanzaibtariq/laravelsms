<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    protected $username = 'username';
    protected $redirectTo = '/home';
    protected $guard = 'web';
    public function getLogin()
    {
        if (Auth::guard('web')->check()) {
                return redirect('/home');
            }

            return view('login');
    }
    public function  index(Request $request)
    {
        $validateData = $request->validate
        ([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['username' => $request->username ,'password'=> $request->password]))
        {
            return redirect('/home');
        }
        else
        {
            return "check email password";  
        }
    }
    public function getLogout()
         {
            Auth::guard('web')->logout();
            return redirect('/');

         }
}
