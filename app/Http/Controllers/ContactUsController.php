<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use App\Mail\Information;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMail(Request $request){
        //echo $request;
        
        Mail::send(new ContactUsMail($request));
        return redirect('/');

    }
    
    public function sendInquiry(Request $request){
        //echo $request;
        
        Mail::send(new Information($request));
        return redirect('/');

    }
}
