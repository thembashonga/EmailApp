<?php

namespace App\Http\Controllers;
use App\Mail\MyFirstEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    // env();
    //
    public function sendEmail()
{
    $recipientEmail = env('MAIL_FROM_ADDRESS');

    Mail::to($recipientEmail)->send(new MyFirstEmail());

    return 'Email sent successfully!';
}

}
