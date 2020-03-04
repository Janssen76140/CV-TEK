<?php

namespace Inc\Service;
use Inc\LocalPdo;


class SearchBar
{
    private $table = 'users_recruteur';

    function getWord ()
    {
        $terme = ' ';
        if (isset($_GET["submit"]) AND $_GET["submit"] == "Rechercher") {
            $_GET["search"] = htmlspecialchars($_GET["search"]);
            $terme = $_GET["search"];
            $terme = trim($terme);
            $terme = strip_tags($terme);
        }
        return $terme;
    }
    function findWord($terme){

        if ($terme) {
            $terme = strtolower($terme);
            $pdo = LocalPdo::getPdo();
            $sql = "SELECT nom, prenom FROM $this->table WHERE nom LIKE ? OR prenom LIKE ? ";
            $query = $pdo->prepare($sql);
            $query->execute(array("%" . $terme . "%", "%" . $terme . "%"));
            return $query->fetchAll();
        }

        return array();
    }



}