<?php

namespace App\Http\Controllers;

use App\Repositories\IEmailSender;

class RegisterController extends Controller
{
    protected $emailSender;
    public function __construct(IEmailSender $emailSender)
    {
        $this->emailSender = $emailSender;
    }
    public function getFormRegister()
    {
        return view('register');
    }

    public function testMail()
    {
        $email = 'achienvk789@gmail.com';
        $message = 'Your email content here';

        // Gửi email
        $this->emailSender->sendEmailAsync($email, $message);
        dd('hello, you');
    }
}
