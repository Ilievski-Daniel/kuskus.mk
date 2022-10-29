<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function contactUs(Request $request)
    {
        $details = [
            'title'     => 'Емаил испратен преку kuskus.mk',
            'message'   => $request['message'],
            'name'      => $request['name'],
            'subject'   => $request['subject'],
            'email'     => $request['email']
        ];
       
        \Mail::to('contact@kuskus.mk')->send(new \App\Mail\ContactForm($details));
        
        return redirect()->back();
    }

    // public function reservation(Request $request)
    // {
    //     $details = [
    //         'title'     => 'Резервација преку kuskus.mk',
    //         'name'      => $request['name'],
    //         'email'     => $request['email'],
    //         'phone'     => $request['phone'],
    //         'date'      => $request['date'],
    //         'number'    => $request['number'],
    //         'subject'   => "Резервација на име" + " " + $reqest['name'],
    //         'message'   => $request['message'],
    //     ];
       
    //     \Mail::to('contact@kuskus.mk')->send(new \App\Mail\ContactForm($details));
        
    //     return redirect()->back();
    // }
}
