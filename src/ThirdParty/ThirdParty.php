<?php

namespace App\ThirdParty;

abstract class ThirdParty
{
    abstract public function send(array $data): string;
}