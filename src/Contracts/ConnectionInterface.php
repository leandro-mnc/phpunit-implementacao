<?php

namespace App\Contracts;

use PDO;

interface ConnectionInterface
{
    public static function getInstance(string $host, string $db, string $user, string $password): PDO;
}