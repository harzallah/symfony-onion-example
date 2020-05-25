<?php

namespace App\Domain\Entity;

class Destination
{
    private $id;
    private $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
}
