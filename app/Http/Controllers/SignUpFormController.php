<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;



class SignUpFormController extends Controller
{
    //

    // public function loadview()
    // {
    //     return view('signup');
    // }


    // Info Pulled From The Database
    // function test(){
    //     return user::all();
    // }


    public function addData(Request $req)
    {

        // Form Validation
    
        $req->validate([
                'name' => 'required|min:3|max:50',
                'username' => 'required|unique:users|min:3|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6',
            ]);


            // Storing Form Info Inside Database from registration page

            $forminfo=new user;
            $verify=user::where("Email","=", "$req->email")->first();
            if ($verify===null) {
                $forminfo->id=$req->id;
                $forminfo->Name=$req->name;
                $forminfo->Username=$req->username;
                $forminfo->Email=$req->email;
                $forminfo->Password=$req->password;
                $forminfo->save();
                return redirect()->back()->with('alert', 'You have been registered successfully.');
                return view('login');
            }else{
                return back()->with("fail", "Email entered already exist");
                return redirect("signup");
            }

            

            
        
            


    }


}