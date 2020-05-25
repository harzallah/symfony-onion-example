<?php

namespace App\Application\Port\Out;

use App\Domain\Entity\Destination;

interface GetDestinationPort
{
    public function getDestination(string $destId): Destination;
}
