<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    
    function index(){
        return view('Project');
    }
    function send(Request $request){
        $this->validate($request,[
            'firstname'   =>       'required',
            'email'       =>       'required|email',
            'message'     =>       'required',
        ]);

        $demo = array(
            'firstname' => $request->firstname,
            'email'     => $request->email,
            'message'   => $request->message
        );
        Mail::to('190103323@stu.sdu.edu.kz')->send(new MyMail($demo));
        return back()->with('success', 'Thanks for contact us!');
    }
}