<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    function index(){
        return view('/contact');
    }

    function send(Request $request){
        $this -> validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $data=array(
            'name'=> $request->name,
            'surname'=>$request->surname,
            'message'=>$request->message

        );
        Mail::to('evija.dompalma@gmail.com')->send(new SendMail($data));
        return back()->with('success','Paldies par zinu');

    }
}
