<?php

namespace App;

use App\ThirdParty\ThirdParty;

class ThirdPartyAdapter extends ThirdParty
{
    private ThirdParty $thirdParty;

    public function __construct(ThirdParty $thirdParty)
    {
        $this->thirdParty = $thirdParty;
    }

    public function send($data): string
    {
        return $this->thirdParty->send($data);
    }
}