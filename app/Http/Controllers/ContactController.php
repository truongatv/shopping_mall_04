<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;

class ContactController extends Controller
{
    public function getContact() {
        return view('contact');
    }

    public function postContact(Request $request) {
        $data = ['name' => $request['name'], 'mail' => $request['email'], 'messsage_notification' => $request['messsage_notification']];
        Mail::send('mail',$data, function($message) {
            $message->to('caonhibkhn@gmail.com','Nhi Cao')->subject('Shopping Mall');
        });
        return redirect('/')->with('notification', 'Thanks for your contact. We will contact you as soon as possible');
    }
}
