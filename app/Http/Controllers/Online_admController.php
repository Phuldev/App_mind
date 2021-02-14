<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Online_admMail;
use Mail;

class Online_admController extends Controller
{
    public function admission()
    {
        return view ('/Online Admission');
    }

        public function sendEmail(Request $request)
        {
            $online_ad = [
                'fname' => $request->fname,
                'fileToUpload' => $request->fileToUpload,
                'ad_email' => $request->ad_email,
                'academin' => $request->academin,
                'ad_phone' => $request->ad_phone,
                'Address' => $request->Address,
                'courses' => $request->courses,
                'message' => $request->message
            ];
            Mail::to('testlaravel26@gmail.com')->send(new Online_admMail ($online_ad));
            return back()->with('message_sent','Your Message has been sent Successfully');
        }
}
