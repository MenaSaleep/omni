<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProfileController extends Controller {
    
     function edit_profile($id) {
        $users = DB::table('users')->where('id', $id)->first();
        return view("dashbord.profile.edit", compact("users"));
     }
     
    public function  update_user_profile(Request $request) {
        DB::table('users')->where('id', $request->id)->update([
            'id'        => $request->id,
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => $request->password,
        ]);
        return back()->with("Updateed_Acount", "Updateed Acount");
    }
    
}
