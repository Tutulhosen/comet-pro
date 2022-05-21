<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * show role page
     */
    public function index()
    {
        return view('admin.user.role.index');
    }
}
