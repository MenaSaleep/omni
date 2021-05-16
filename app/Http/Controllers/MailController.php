<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {
    

    
    public function sendUserMail(Request $request) {
        $detalies = [
            'frist'    => $request->frist,
            'last'     => $request->last,
            'address'  => $request->address,
            'number'   => $request->number,
            'message'   => $request->message,
            
        ];
        
        Mail::to('menaspoon73@gmail.com')->send(new SendMail($detalies));
        return view("dashbord.index.mail", compact("detalies"));
    }
    
}
