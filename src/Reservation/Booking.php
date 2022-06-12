<?php

namespace App\Reservation;

interface Booking
{
    public function calculatePrice(): float;
}