<?php

namespace App\Payment\Paypal;

use App\Payment\Payment as BasePayment;

class Payment extends BasePayment
{
    protected array $options = ['money_transfer', 'credit', 'debit', 'phone_transfer', 'mail_transfer', 'wire_transfer'];
    private const FEE = 0.2;

    public function getFee(): float
    {
        return self::FEE;
    }
}
