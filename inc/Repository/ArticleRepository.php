<?php

namespace Inc\Repository;

use Inc\LocalPdo;
use Inc\Utils;

class ArticleRepository
{
    private $table = 'users_recruteur';

    public function findByEmail($mail)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT * FROM $this->table WHERE email = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
        $query->execute();
        return $query->fetchObject('\Inc\Model\ArticleModel');
    }

    public function insertRecruteur($nom, $prenom, $email, $nomEntreprise, $adresse, $telephone, $siret, $mdp)
    {
        $hashPassword = password_hash($mdp, PASSWORD_BCRYPT);
        $token = Utils::generatorToken(120);

        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->table VALUES (NULL, :nom, :prenom, :mail, :nomEntreprise, :adresse, :telephone, :siret, :mdp, :token, 'recruteur')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $prenom, \PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, \PDO::PARAM_STR);
        $query->bindValue(':mail', $email, \PDO::PARAM_STR);
        $query->bindValue(':nomEntreprise', $nomEntreprise, \PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, \PDO::PARAM_STR);
        $query->bindValue(':telephone', $telephone, \PDO::PARAM_STR);
        $query->bindValue(':siret', $siret, \PDO::PARAM_STR);
        $query->bindValue(':mdp', $hashPassword, \PDO::PARAM_STR);
        $query->bindValue(':token', $token, \PDO::PARAM_STR);
        $query->execute();
    }

    public function insertRechercheur($email, $mdp)
    {
        $hashPassword = password_hash($mdp, PASSWORD_BCRYPT);
        $token = Utils::generatorToken(120);

        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->table VALUES (NULL,NULL,NULL,:mail,NULL,NULL,NULL,NULL,:mdp,:token,'utilisateur')";
        $query = $pdo->prepare($sql);
        $query->bindValue(':mail', $email, \PDO::PARAM_STR);
        $query->bindValue(':mdp', $hashPassword, \PDO::PARAM_STR);
        $query->bindValue(':token', $token, \PDO::PARAM_STR);
        $query->execute();
    }

    public function modifPassword($email)
    {
        $sql = "SELECT email, token FROM $this->table where email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email,PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
    }
}
