<?php


namespace Inc\Service;
use Inc\LocalPdo;


class Bdd
{
    private $table = 'users_recruteur';
    private $tablecv = 'edition_cv';

    function select(){
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT * FROM $this->table";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function count($role){
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT count(*) FROM $this->table WHERE role='$role'";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    function countCv(){
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT count(*) FROM $this->tablecv WHERE id=id";
        $query = $pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

}