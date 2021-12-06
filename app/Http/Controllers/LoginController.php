<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;


use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function checksession()
    {
        if (session()->has('user')) {
            return view('landing');
        } else {
            return redirect('/logout');
        }
    }
    //  public function loadview()
    // {
    //     return view('landing');
    // }

    public function login(Request $req)
    {

        // Form Validation
       
        $req->validate([
                // 'name' => 'required|min:3|max:50',
                'username' => 'required|min:3|max:50',
                'password' => 'required|min:6',
            ]);

        // if ($req->radio== 'user') {
        $userinfo=user::where('Username', '=', $req->username)->where('Password', '=', $req->password)->first();
        if (!$userinfo) {
            return back()->with('fail', 'User Not Found');
        } else {
            $req->session()->put('user', $userinfo->Username);//Session Code
            return redirect('landing');
        }
        // }else{
        //  if($req->radio== 'admin'){
        //     $admininfo=DB::table('admin')->where('Username', '=', $req->username)->where('Password', '=', $req->password)->first();
        //     if (!$admininfo) {
        //                 return back()->with('fail', 'Admin Not Found');
        //             } else{
        //                 $req->session()->put('user', $admininfo->Username);//Session Code
        //                 return redirect('landing');
        //             }
        //                 }
                
        //         }
          
        // }


// *****************************
//     public function adminlogin(Request $req)
//     {
//         // dd($req);
//         if($req->radio== 'admin'){

//         }
//         // Form Validation
    
//         $req->validate([
//                 // 'name' => 'required|min:3|max:50',
//                 'username' => 'required|min:3|max:50',
//                 'password' => 'required|min:6',
//             ]);

        //   $admininfo=DB::table('admin')->where('Username', '=', $req->username)->where('Password', '=', $req->password)->first();
        // if (!$admininfo) {
//             return back()->with('fail', 'Admin is Not Found');
//         } else{
//             $req->session()->put('user', $admininfo->Username);//Session Code
//             return redirect('landing');
//         }
//     }



//     $userinfo=DB::table('users')->where('Email', '=', $req->email)->where('Password', '=', $req->password)->first();
//     if (!$userinfo) {
//         return back()->with('fail', 'User is Not Found');
//     } else {
//         // $req->session()->put('user', $userinfo->Username);//Session Code
//        return redirect('landing');
//     }
        // }

        // *****************************
    }
        function endsession()
        {
            if (session()->has('user')) {
                session()->pull('user');
            }
            return redirect('login');
        }
    
}



    
    


