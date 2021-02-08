<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view ('#contAct');
    }

        public function sendEmail(Request $request)
        {
            $details = [
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'msg' => $request->msg
            ];
            Mail::to('testlaravel26@gmail.com')->send(new ContactMail($details));
            return back()->with('message_sent','Your Message has been sent Successfully');
        }

}
