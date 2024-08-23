<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class MailController extends Controller
{
    public function sendContactMail(Request $request) {
        $contact_data=[];
        $contact_data['name']=$request->input('name');
        $contact_data['email']=$request->input('email');
        $contact_data['phone']=$request->input('phone');
        $contact_data['message']=$request->input('message');

        // return redirect()->back()->withSuccess('Email has to sent !');
        if(Mail::to('abishmehan3510@gmail.com')->send(new ContactFormMail($contact_data))) {
            
            // return 'Mail Sent successfully';
            return back()->with('message','mail sent Successfully');

        } 
        else{
            return back()->with('message','something wrong');
        }
        

    }
}
