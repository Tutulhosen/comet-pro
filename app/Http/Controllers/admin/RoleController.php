<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * show role page
     */
    public function index()
    {
        $permission_data= Permission::all();
        $role_data             = Role::latest()->get();
        return view('admin.user.role.index', compact('permission_data','role_data'));
    }

    /**
     * store the role
     */
    public function store(Request $request)
    {
        //validation

        $this->validate($request, [
            'name'               => 'required',
            'per'               => 'required',
        ]);

        //store data

        Role::create([
            'name'              => $request->name,
            'slug'                 => Str::slug($request->name),
            'permission'     =>json_encode($request->per)
        ]);
        return redirect()->route('admin.role')->with('success', 'Successfully add a new role');



    }

    /**
     * delete a role
     */
    public function destroy($id)
    {
        $delete_id= Role::findOrFail($id);
        $delete_id->delete();
        return back()->with('success-mid', 'The role is deleted');
    }




}
