<?php

namespace App\ThirdParty;


class MailService extends ThirdParty
{
    public function send($data): string
    {
        // send email code
        return "Email sent successfully";
    }
}