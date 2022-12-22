<?php

namespace App\Database;

use App\Contracts\ConnectionInterface;
use PDO;

class MysqlConnection implements ConnectionInterface
{
    /**
     * @var PDO[]|array
     */
    private static array $instance;

    public static function getInstance(string $host, string $db, string $user, string $password): PDO
    {
        if (array_key_exists($db, self::$instance) === true) {
            return self::$instance[$db];
        }

        self::$instance[$db] = new PDO(
            'mysql:host=' . $host . 'dbname=' . $db,
            $user,
            $password,
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]
        );

        return self::$instance[$db];
    }
}