<?php

namespace App\Payment;

class PaymentFactory
{
    public static function create(string $type = 'paypal'): Payment
    {
        $paymentType = "App\Payment\\".ucfirst($type)."\\Payment";

        if (!class_exists($paymentType)) {
            throw new \Exception("Payment type '{$type}' not found");
        }

        return new $paymentType();

    }
}