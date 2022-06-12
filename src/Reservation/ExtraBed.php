<?php

namespace App\Reservation;

class ExtraBed extends BookingDecorator
{
    private const PRICE = 20;

    public function calculatePrice(): float
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }
}