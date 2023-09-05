<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Mail;

class EmailSender implements IEmailSender
{
    public function sendEmailAsync(string $email, string $message)
    {
        Mail::send([], [], function ($mail) use ($email, $message) {
            $mail->to($email)
                ->subject('as')
                ->html($message) // Use the 'html' method to set the HTML body
                ->from('a@gmail.com', 'Glasses Shop');
        });
    }
}
