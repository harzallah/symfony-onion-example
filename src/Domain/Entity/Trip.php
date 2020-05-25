<?php

namespace App\Application\Entity;

use App\Application\Entity\Destination;
use App\Application\Entity\Seat;
use App\Application\Entity\User;

class Trip
{
    private $dest;
    private $seats;
    private $driver;
    private $depDate;

    public function __constructor(
        Destination $dest,
        array $seats,
        User $driver,
        \DateTime $depDate
    ) {
        $this->dest = $dest;
        $this->seats = $seats;
        $this->driver = $driver;
        $this->depDate = $depDate;
    }

    public function getNumberSeats()
    {
        return count($this->seats);
    }
    public function getNumberEmptySeats()
    {
        $nbSeat = 0;
        foreach ($this->seats as $seat) {
            if ($seat->isEmpty()) {
                $nbSeat++;
            }
        }
        return $nbSeat;
    }
}
