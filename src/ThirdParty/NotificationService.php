<?php

namespace App\ThirdParty;


class NotificationService extends ThirdParty
{
    public function send($data): string
    {
        // send notification code
        return "Notification sent successfully";
    }
}