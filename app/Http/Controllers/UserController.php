<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view ('admin.user.add');
    }
    public function create(Request $request)
    {
    

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->access_label = $request->access_label;
        $user ->save();
        return redirect()->back()->with('message','New User Create Succefully.');
    }
    public function manage()
    {
        return view ('admin.user.manage');
    }
}
