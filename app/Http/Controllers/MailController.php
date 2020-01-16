<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::send(new SendMail());

        return redirect('/');
    }
}
