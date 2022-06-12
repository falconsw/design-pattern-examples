<?php

namespace App;

use App\Reservation\Booking;

class StandardRoomReservation implements Booking
{
    public function calculatePrice(): float
    {
        return 100;
    }
}
