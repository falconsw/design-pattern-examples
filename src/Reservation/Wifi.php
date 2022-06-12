<?php

namespace App\Reservation;

class Wifi extends BookingDecorator
{
    private const PRICE = 10;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }
}