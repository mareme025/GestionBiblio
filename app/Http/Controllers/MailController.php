<?php

namespace App\Http\Controllers;
use App\Mail\SignupEmail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public static function sendSignupMail($name,$email,$verification_code){

        $data=[

            'name'=> $name,
            'verification_code'=> $verification_code
        ];
        Mail::to($email)->send(new SignupEmail($data));
    }
}
