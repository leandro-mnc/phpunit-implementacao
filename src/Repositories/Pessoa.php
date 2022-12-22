<?php

namespace App\Repositories;

use PDO;

class Pessoa
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getById(int $id)
    {
        $sql = "SELECT * FROM Pessoa WHERE id = :id";

        $prepare = $this->connection->prepare($sql);

        $prepare->execute([':id' => $id]);

        return $prepare->fetch();
    }
}