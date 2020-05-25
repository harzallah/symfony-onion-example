<?php

namespace App\Domain\Entity;

use App\Domain\Entity\Destination;
use App\Domain\Entity\Seat;
use App\Domain\Entity\User;
use DateTime;

class Trip
{
    private $id;
    private $dest;
    private $seats;
    private $driver;
    private $depDate;

    public function __construct(
        string $id,
        Destination $dest,
        array $seats,
        User $driver,
        DateTime $depDate
    ) {
        $this->id = $id;
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
