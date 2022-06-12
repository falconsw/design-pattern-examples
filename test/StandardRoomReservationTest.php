<?php

use App\Reservation\ExtraBed;
use App\Reservation\Wifi;
use App\StandardRoomReservation;
use PHPUnit\Framework\TestCase;

class StandardRoomReservationTest extends TestCase
{
    /**
     * @test
     */
    public function standard_room_reservation_can_be_decorated()
    {
        $reservation = new StandardRoomReservation();
        $reservation = new ExtraBed($reservation);
        $reservation = new Wifi($reservation);

        $totalPrice = $reservation->calculatePrice();

        // assert that the total price is equal to 130
        $this->assertEquals(130, $totalPrice); // 100 + 20 + 10

    }

}