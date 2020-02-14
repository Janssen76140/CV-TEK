<?php

namespace Inc\Repository;

use Inc\LocalPdo;
use Inc\Utils;

class ArticleRepository
{
    private $table = 'users';

    public function findByEmail($mail)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT * FROM $this->table WHERE mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->execute();
        return $query->fetchObject('\Inc\Model\ArticleModel');
    }

    public function insert($mail, $mdp)
    {
        $hashPassword = password_hash($mdp, PASSWORD_BCRYPT);
        $token = Utils::generatorToken(120);

        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->table VALUES (NULL, :mail, :mdp, :confmdp)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->bindValue(':mdp', $hashPassword, \PDO::PARAM_STR);
        $query->bindValue(':confmdp', $token, \PDO::PARAM_STR);
        $query->execute();
    }
}
