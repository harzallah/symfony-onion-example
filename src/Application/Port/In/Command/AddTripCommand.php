<?php

namespace App\Application\Port\In\Command;

use App\Domain\Entity\User;
use App\Domain\Entity\Destination;
use App\Application\Port\In\Exception\InvalidAddTripCommandData;
use DateTime;

class AddTripCommand
{
    /**
     * @var Destination
     */
    private $dest;
    private $driver;
    private $depDate;
    private $nbSeats;

    public function __constructor(User $driver, Destination $dest, DateTime $depDate, int $nbSeats)
    {
        if ($nbSeats > 5 || $nbSeats <= 0) {
            throw new InvalidAddTripCommandData("Invalid nb of Seats");
        }
        if (new DateTime() > $depDate) {
            throw new InvalidAddTripCommandData("Invalid departure date");
        }
        if ($dest == null) {
            throw new InvalidAddTripCommandData("Null Destination");
        }
        if ($driver == null) {
            throw new InvalidAddTripCommandData("Null Driver");
        }

        $this->dest = $dest;
        $this->driver = $driver;
        $this->depDate = $depDate;
        $this->nbSeats = $nbSeats;
    }

    /**
     * Get the value of driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Get the value of depDate
     */
    public function getDepDate()
    {
        return $this->depDate;
    }

    /**
     * Get the value of nbSeats
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of dest
     *
     * @return  Destination
     */
    public function getDest(): Destination
    {
        return $this->dest;
    }
}
