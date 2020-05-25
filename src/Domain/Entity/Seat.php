<?php

namespace App\Domain\Entity;

use App\Domain\Entity\User;

class Seat
{
    /**
     * @var User|null
     */
    private $passenger;

    public function __construct(User $passenger = null)
    {
        $this->passenger = $passenger;
    }

    public function isEmpty(): bool
    {
        return is_null($this->passenger);
    }

    /**
     * Get the value of passenger
     *
     * @return  User|null
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    public function assignTo(User $passenger)
    {
        $this->passenger = $passenger;
    }

    public function release()
    {
        $this->passenger = null;
    }
}
