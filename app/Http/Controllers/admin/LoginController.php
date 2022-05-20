<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   /**
    * show login page
    */
    public function showLogin()
    {
       return view('admin.login');
    }




}
