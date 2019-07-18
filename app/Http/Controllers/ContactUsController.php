<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMail(Request $request){
        //echo $request;
        
        Mail::send(new ContactUsMail($request));
        return redirect('/');

    }
}
