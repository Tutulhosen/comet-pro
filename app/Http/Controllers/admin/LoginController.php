<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   /**
    * show login page
    */
    public function showLogin()
    {
       return view('admin.login');
    }

    /**
     * admin login system
     */
    public function loginSystem(Request $request)
    {
        $this->validate($request, [
            'email'             =>'required|email',
            'password'     =>'required'
        ]);
        if (Auth::guard('admin')->attempt([
            'email'                         =>$request->email,
            'password'                  =>$request->password
        ])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')->with('success-mid', 'wrong email or password');
        }

    }
    /**
     * admin logout system
     */
    public function logoutSystem()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }




}
