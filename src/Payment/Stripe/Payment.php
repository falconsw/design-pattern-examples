<?php

namespace App\Payment\Stripe;

use App\Payment\Payment as BasePayment;

class Payment extends BasePayment
{
    protected array $options = ['money_transfer', 'credit', 'debit', 'mail_transfer'];
    private const FEE = 0.05;

    public function getFee(): float
    {
        return self::FEE;
    }
}