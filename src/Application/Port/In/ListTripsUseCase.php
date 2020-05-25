<?php

namespace App\Application\Port\In;

interface ListTripsUseCase {
    public function listTrips(string $destinationId);
}