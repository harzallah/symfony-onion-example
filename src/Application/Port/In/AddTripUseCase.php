<?php

namespace App\Application\Port\In;

use App\Application\Port\In\Command\AddTripCommand;

interface AddTripUseCase
{
    public function addTrip(AddTripCommand $tripCommand);
}
