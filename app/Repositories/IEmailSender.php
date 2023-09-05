<?php

namespace App\Repositories;


interface IEmailSender
{
    public function sendEmailAsync(string $recipientEmail, string $emailMessage);
}
