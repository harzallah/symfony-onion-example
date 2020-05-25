<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Application\Port\Out\AddTripPort;
use App\Application\Port\Out\GetDestinationPort;
use App\Application\Port\Out\GetUserPort;

class AddTripTest extends TestCase
{

    public function testBadDestination()
    {
        $addTripService = $this->createMock(AddTripPort::class);
        $addTripService->expects($this->once())
            ->method('presistNewTrip')
            ->will($this->returnValue(10));
    }
    // test bad destination

    // test bad user

    // test ok => validate nbseats, empty seats, ...
    public function testSomething()
    {
        $this->assertTrue(true);
    }
}
