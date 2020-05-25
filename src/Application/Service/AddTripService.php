<?php

namespace App\Application\Service;

use App\Domain\Entity\Seat;
use App\Domain\Entity\Trip;
use App\Application\Port\In\AddTripUseCase;
use App\Application\Port\In\Command\AddTripCommand;
use App\Application\Port\Out\AddTripPort;
use App\Application\Port\Out\GetDestinationPort;
use App\Application\Port\Out\GetUserPort;

class AddTripService implements AddTripUseCase
{
    private $addTripPort;
    private $getDestinationPort;
    private $getUserPort;

    public function __construct(
        AddTripPort $addTripPort,
        GetDestinationPort $getDestinationPort,
        GetUserPort $getUserPort
    ) {
        $this->addTripPort = $addTripPort;
        $this->getDestinationPort = $getDestinationPort;
        $this->getUserPort = $getUserPort;
    }
    public function addTrip(AddTripCommand $tripCommand)
    {
        $dest = $this->getDestinationPort->getDestination(
            $tripCommand->getDest()->getId()
        );

        $driver = $this->getUserPort->getUser(
            $tripCommand->getDriver()->getId()
        );
        
        $seats = [];
        for ($i = 0; $i < $tripCommand->getNbSeats(); $i++) {
            $seats[] = new Seat();
        }
        $trip = new Trip(
            null,
            $dest,
            $seats,
            $driver,
            $tripCommand->getDepDate()
        );

        $this->addTripPort->presistNewTrip($trip);

        return $trip;
    }
}
