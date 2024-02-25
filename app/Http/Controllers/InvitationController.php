<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use App\Models\User;
use App\Mail\InvitationMail;
use Mail;


class InvitationController extends Controller
{


    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $store = Invitation::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $myEmail = 'junaidafzal395@gmail.com';

            $details = [
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
            'url' => route('password',$store->id)
        ];

           Mail::to($myEmail)->send(new InvitationMail($details));
        if(!empty($store->id)){
            return redirect()->back()->with('success','Invitation going Successfully');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
}


public function password($id){
    $user = User::where('id',auth()->user()->id)->firstorfail();
    return view('pages.chat.password',compact('user'));
}

public function postLogin(Request $request,$id){
    dd($request->all(),$id);
    $request->validate([
        'password' => 'required',
    ]);
}



}
