<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function contact(){
    	return view('Home-views.Views.Contact');
    }

    public function send_contact(Request $r){
    	Mail::send('Email.Contact',[
    		'name' => $r->name,
    		'email' => $r->email,
    		'content' => $r->content
    	], function($mail) use ($r){
    		$mail->to($r->email,$r->name,$r->content);
    		$mail->from('luongitbkap@gmail.com');
    		$mail->subject('Test mail');
    	});
    	
    	return redirect()->back()->with('success','Đã gửi liên hệ!');
    	
    }
}


