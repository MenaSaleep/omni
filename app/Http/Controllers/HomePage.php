<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    function route_edit_Count() {
        return view('dashbord.profile.edit');
    }
}
