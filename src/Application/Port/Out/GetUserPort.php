<?php

namespace App\Application\Port\Out;

use App\Domain\Entity\User;

interface GetUserPort
{
    public function getUser(string $userId): User;
}
