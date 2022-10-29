<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function contactUs(Request $request)
    {
        // dd($request['email']);
        $details = [
            'title' => 'Mail from kuskus.com',
            'body' => $request['message'],
            'name' => $request['name'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'email' => $request['email']
        ];
       
        \Mail::to('contact@kuskus.mk')->send(new \App\Mail\ContactForm($details));
        
        return redirect()->back();
    }
}
