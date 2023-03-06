<?php

namespace App\Http\Controllers;

use App\Email;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        $email = new Email();
        $email->customerName = request('customerName');
        $email->customerText = request('customerText');
        $email->customerEmail = request('customerEmail');
        error_log($email);

        Mail::to('info@webarchi.lt')->send(new WelcomeMail($email));
        return view('emails.thankEmail', ['emailData' => $email]);
    }
    public function showForm() {
        return view('emails.writeEmail');
    }
}
