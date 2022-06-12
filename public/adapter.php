<?php

use App\ThirdParty\MailService;
use App\ThirdParty\NotificationService;
use App\ThirdParty\SmsService;
use App\ThirdPartyAdapter;

$code = ['code' => 123456];

$sms = new ThirdPartyAdapter(
    new SmsService()
);

$mail = new ThirdPartyAdapter(
    new MailService()
);

$notification = new ThirdPartyAdapter(
    new NotificationService()
);


echo $sms->send($code);
echo "<br>";
echo $mail->send($code);
echo "<br>";
echo $notification->send($code);



?>


