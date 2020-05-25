<?php

namespace App\Application\Entity;

class Seat
{
    private $passenger;

    public function __constructor(User $passenger)
    {
        $this->passenger = $passenger;
    }

    public function assignTo(User $passenger){
        $this->passenger = $passenger;
    }

    public function release(){
        $this->passenger = null;
    }

    public function isEmpty(): bool
    {
        return is_null($this->passenger);
    }
}
