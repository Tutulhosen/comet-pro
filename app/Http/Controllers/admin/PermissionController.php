<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * show the permission page
     */
    public function index()
    {
        return view('admin.user.permission.index');
    }




}
