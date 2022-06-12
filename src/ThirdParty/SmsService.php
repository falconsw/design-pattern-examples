<?php

namespace App\ThirdParty;


class SmsService extends ThirdParty
{
    public function send($data): string
    {
        // send sms code
        return "Sms sent successfully";
    }
}

