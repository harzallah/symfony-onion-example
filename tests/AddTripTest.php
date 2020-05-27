<?php

namespace App\Tests;

use App\Application\Port\In\Command\AddTripCommand;
use App\Application\Service\AddTripService;
use App\Domain\Entity\Destination;
use App\Domain\Entity\User;
use PHPUnit\Framework\TestCase;
use App\Application\Port\Out\AddTripPort;
use App\Application\Port\Out\GetDestinationPort;
use App\Application\Port\Out\GetUserPort;

class AddTripTest extends TestCase
{
    public function testBadDestination()
    {
        // $getDestinationPort = $this->createMock(GetDestinationPort::class)
        //     ->method('getDestination')
        //     ->willReturn(new Destination('0', 'City'));

        // $getUserPort = $this->createMock(GetUserPort::class)
        //     ->method('getUser')
        //     ->willReturn(new User('0', 'Flen'));

        // $addTripPort = $this->createMock(AddTripPort::class)
        //     ->method('presistNewTrip')
        //     ->willReturn(0);

        // $addTripService = new AddTripService($addTripPort, $getDestinationPort, $getUserPort);

        // $addTripService->addTrip(new AddTripCommand());

        $this->assertTrue(true);

    }
    // test bad destination

    // test bad user

    // test ok => validate nbseats, empty seats, ...
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}
