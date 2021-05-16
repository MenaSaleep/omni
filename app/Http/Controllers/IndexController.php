<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller {
    
    function index_page() {
        $count = DB::table('count')->where('id', '1')->first();
        return view("index", compact("count"));
        return view("mail", compact("count"));
     }
     
     
     function edit_index_page($id) {
        $count = DB::table('count')->where('id', $id)->first();
        return view("dashbord.index.edit", compact("count"));
     }
     
    public function  update_index_page(Request $request) {
        //$file_extention = $request->file->getClientOriginalExtension();
        //echo $file_name = time() . "." . $file_extention;
        //$path = "images";
        //$request->file->move($path, $file_name);
        DB::table('count')->where('id', $request->id)->update([
            'id'        => $request->id,
            'web'       => $request->web,
            'ios'       => $request->ios,
            'android'   => $request->android,
            'live'      => $request->live,
            'projects'  => $request->projects,
            'clients'   => $request->clients,
            'meetings'  => $request->meetings,
        ]);
        return back()->with("Updateed_Acount", "Updateed Detalies");
    }
    
    
}


