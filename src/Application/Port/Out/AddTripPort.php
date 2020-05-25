<?php

namespace App\Application\Port\Out;

use App\Domain\Entity\Trip;

interface AddTripPort
{
    public function presistNewTrip(Trip $trip);
}
