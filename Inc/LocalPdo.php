<?php
namespace Inc;
use \PDO;
use \PDOException;
// ETAPE 1 : CONNEXION
class LocalPdo {
    static public function getPdo()
    {
        try {
            $pdo = new PDO('mysql://host=localhost;dbname=cvtek', "root", "", array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            ));
            return $pdo;
        }
        catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }
}


