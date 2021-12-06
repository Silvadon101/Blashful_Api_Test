<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApptMail;
use App\Models\User;
use App\Models\historyinfos;

class MailController extends Controller
{
    //
    public function apptform(request $req)
    {



        // Saving Info In Database
        $info=new historyinfos;
        $info->Name = $req->name;
        $info->Email = $req->email;
        $info->Phone = $req->phone;
        $info->Adults = $req->adults;
    $info->Username = session('user');
    $info->Services=$req->check.
                    " ".
                    $req->classic.
                    " ".
                    $req->half.
                    " ".
                    $req->volume.
                    " ".
                    $req->set.
                    " ".
                    $req->remove.
                    " ".
                    $req->refill.
                    " ".
                    $req->bottom.
                    " ".
                    $req->hybrid.
                    " ".
                    $req->eyebrow.
                    " ".
                    $req->arm.
                    " ".
                    $req->waxing.
                    " ".
                    $req->line.
                    " ".
                    $req->Bikini.
                    " ".
                    $req->Brazilian.
                    " ".
                    $req->leg.
                    " ".
                    $req->Stomach.
                    " ".
                    $req->Tinting;
    
    $info->Date=         $req->apptdate;
    $info->Time=         $req->appttime;
    $info->Info=         $req->message;

$info->save();



//code to send to email base on user session
        $user = User::where('Username', session('user'))->first();
        $details=[
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'adults'=>$req->adults,
            'check'=>$req->check,
            'classic'=>$req->classic,
            'half'=>$req->half,
            'volume'=>$req->volume,
            'set'=>$req->set,
            'remove'=>$req->remove,
            'refill'=>$req->refill,
            'bottom'=>$req->bottom,
            'hybrid'=>$req->hybrid,
            'eyebrow'=>$req->eyebrow,
            'arm'=>$req->arm,
            'waxing'=>$req->waxing,
            'line'=>$req->line,
            'Bikini'=>$req->Bikini,
            'Brazilian'=>$req->Brazilian,
            'leg'=>$req->leg,
            'Stomach'=>$req->Stomach,
            'Tinting'=>$req->Tinting,
            'apptdate'=>$req->apptdate,
            'appttime'=>$req->appttime,
            'message'=>$req->message
        ];

        Mail::to($user->Email)->send(new ApptMail($details));
        Mail::to('shaywebdeveloper@gmail.com')->send(new ApptMail($details));


        // $user = historyinfos::where('Username', session('user'))->first();//code to send to email base on user session

        return redirect()->back()->with('alert', 'Appointment Set! We Will Call To Confirm Your Appointment. Thank You.');
        return view("history", [

        
        'name'=>$req->name,
        'email'=>$req->email,
        'phone'=>$req->phone,
        'adults'=>$req->adults,
        'check'=>$req->check,
        'classic'=>$req->classic,
        'half'=>$req->half,
        'volume'=>$req->volume,
        'set'=>$req->set,
        'remove'=>$req->remove,
        'refill'=>$req->refill,
        'bottom'=>$req->bottom,
        'hybrid'=>$req->hybrid,
        'eyebrow'=>$req->eyebrow,
        'arm'=>$req->arm,
        'waxing'=>$req->waxing,
        'line'=>$req->line,
        'Bikini'=>$req->Bikini,
        'Brazilian'=>$req->Brazilian,
        'leg'=>$req->leg,
        'Stomach'=>$req->Stomach,
        'Tinting'=>$req->Tinting,
        'apptdate'=>$req->apptdate,
        'appttime'=>$req->appttime,
        'message'=>$req->message,

        // or
        // 'details'=>$details
        ]);
            // ->with('alert', 'Appointment Set! We Will Call To Confirm Your Appointment. Thank You.');



    }

}
