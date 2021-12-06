<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\User;


class ContactformController extends Controller
{
    //
    public function contactform(request $req){
        $user = User::where('Username', session('user'))->first();

        $details=[
            'name'=>$req->name,
            'email'=>$req->email,
            'message'=>$req->message,
          
        ];
        Mail::to($user->Email)->send(new ContactMail($details));
        Mail::to('shaywebdeveloper@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('alert', 'Message Sent! Thank You.');
    }

}
