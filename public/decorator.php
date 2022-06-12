<?php

use App\Reservation\ExtraBed;
use App\Reservation\Wifi;
use App\StandardRoomReservation;

$reservation = new StandardRoomReservation();
$reservation = new Wifi($reservation);
$reservation = new ExtraBed($reservation);

$totalPrice = $reservation->calculatePrice();

print_r("Total price: $totalPrice");