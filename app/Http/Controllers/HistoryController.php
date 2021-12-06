<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HistoryController extends Controller
{
    // Code to display info in table format
    public function history() {
        $data= historyinfos::where('Username', session('user'))->paginate(5);
        // return view('history')->with(['history'=> $history]);
        return view('history',['datastorage'=>$data]);
    }


    // Passing multiple values base on who is logged in
    // public function history() {
    //     $history = historyinfos::where('Username', session('user'))->get();
    //     $dog = 'Pit bull';
    //     return view('history')->with(['history'=> $history, 'dog' => $dog]);
    // }


    function delete($id){
        $data=historyinfos::find($id);
        $data->delete();
        return redirect("history");
    
    }  

    function showdata($id){
        $data=historyinfos::find($id);
        return view('edit',['data'=>$data]);
    }


    function updatedata(Request $req){
        // return $req->input();
        $data=historyinfos::find($req->id);
        $data->id=$req->id;
        $data->Firstname=$req->firstname;
        $data->Lastname=$req->lastname;
        $data->Email=$req->email;
        $data->Phone=$req->phone;
        $data->Address=$req->address;
        $data->Services=$req->check;
        $data->Date=$req->apptdate;
        $data->Time=$req->appttime;
        $data->Info=$req->message;
        $data->save();
        return redirect('history');
        
    }
}
