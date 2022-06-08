<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * show profile page
     */
    public function showProfile()
    {
        return view('admin.profile.profile');
    }

    /**
     * upload admin profile photo
     */
public function uploadPhoto(Request $request, $id)
{
$user_id= AdminUser::findOrFail($id);

if ($request->hasFile('photo')) {
    $file= $request->file('photo');
    $file_name = md5(time() . rand()) . '.' . $file->clientExtension();
    $file->move(storage_path('app/public/admin/'), $file_name);
    $user_id->update([
        'photo'         =>$file_name
    ]);
    return back();
} else {
    return back();
}




}


}
