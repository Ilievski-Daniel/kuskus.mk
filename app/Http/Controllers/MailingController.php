<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\ReservationRequest;


class MailingController extends Controller
{
    public function contactUs(ContactFormRequest $request)
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

    public function reservation(ReservationRequest $request)
    {
        $details = [
                    'title'                 => 'Резервација преку kuskus.mk',
                    'reservation_name'      => $request['reservation_name'],
                    'reservation_email'     => $request['reservation_email'],
                    'phone'                 => $request['phone'],
                    'date'                  => $request['date'],
                    'time'                  => $request['time'],
                    'people'                => $request['people'],
                    'subject'               => "Резервација на име" . " " . $request['reservation_name'],
                    'reservation_message'   => $request['reservation_message'],
                ];
       
        \Mail::to('contact@kuskus.mk')->send(new \App\Mail\ReservationForm($details));
        
        return redirect()->back();
    }
}
