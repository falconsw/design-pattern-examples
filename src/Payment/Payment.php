<?php

namespace App\Payment;

abstract class Payment
{
    protected array $options = [];

    abstract public function getFee(): float;

    public function getOptions(): array
    {
        return $this->options;
    }
}