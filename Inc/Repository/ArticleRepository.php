<?php

namespace Inc\Repository;

use Inc\LocalPdo;
use Inc\Utils;

class ArticleRepository
{
    private $table = 'users_recruteur';
    private $titrecv = 'titre_cv';
    private $experience = 'experience_cv';
    private $formation = 'formation_cv';
    private $interet = 'centre_interets';
    private $competence = 'competence_cv';
    private $upload = 'upload';

    public function findByEmail($mail)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT * FROM $this->table WHERE email = '$mail'";
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
        $query->bindValue(':nom', $nom, \PDO::PARAM_STR);
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

    public function insertTitreCv($userId, $titre_cv, $accroche_cv)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->titrecv VALUES (NULL, :userId, :titre_cv, :accroche_cv)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
        $query->bindValue(':titre_cv', $titre_cv, \PDO::PARAM_STR);
        $query->bindValue(':accroche_cv', $accroche_cv, \PDO::PARAM_STR);
        $query->execute();
    }

    public function insertExperience($userId,$datedebut_mois, $datedebut_annee, $datefin_mois, $datefin_annee, $intitule_poste, $nom_entreprise, $description_experience)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->experience VALUES (NULL, :userId, :datedebut_mois, :datedebut_annee, :datefin_mois, :datefin_annee, :intitule_poste, :nom_entreprise, :description_experience)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
        $query->bindValue(':datedebut_mois', $datedebut_mois, \PDO::PARAM_STR);
        $query->bindValue(':datedebut_annee', $datedebut_annee, \PDO::PARAM_STR);
        $query->bindValue(':datefin_mois', $datefin_mois, \PDO::PARAM_STR);
        $query->bindValue(':datefin_annee', $datefin_annee, \PDO::PARAM_STR);
        $query->bindValue(':intitule_poste', $intitule_poste, \PDO::PARAM_STR);
        $query->bindValue(':nom_entreprise', $nom_entreprise, \PDO::PARAM_STR);
        $query->bindValue(':description_experience', $description_experience, \PDO::PARAM_STR);
        $query->execute();
    }

    public function insertFormation($userId, $date_formation, $nom_formation, $nom_ecole, $ville_ecole, $description_formation)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->formation VALUES (NULL, :userId, :date_formation, :nom_formation, :nom_ecole, :ville_ecole, :description_formation)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
        $query->bindValue(':date_formation', $date_formation, \PDO::PARAM_STR);
        $query->bindValue(':nom_formation', $nom_formation, \PDO::PARAM_STR);
        $query->bindValue(':nom_ecole', $nom_ecole, \PDO::PARAM_STR);
        $query->bindValue(':ville_ecole', $ville_ecole, \PDO::PARAM_STR);
        $query->bindValue(':description_formation', $description_formation, \PDO::PARAM_STR);
        $query->execute();
    }

    public function insertInteret($userId, $centre_interet)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->interet VALUES (NULL, :userId, :centre_interet)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
        $query->bindValue(':centre_interet', $centre_interet, \PDO::PARAM_STR);
        $query->execute();
    }

    public function insertCompetences($userId, $competences)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "INSERT INTO $this->competence VALUES (NULL, :userId, :competences)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
        $query->bindValue(':competences', $competences, \PDO::PARAM_STR);
        $query->execute();
    }
    public function insertImage($userId,$info,$fileName)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "INSERT into upload  VALUES (NULL, :userId, :info , :fileName , NOW())";
        $query = $pdo->prepare($sql);
        $query->bindValue(':fileName', $fileName, \PDO::PARAM_STR);
        $query->bindValue(':info', $info, \PDO::PARAM_STR);
        $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
        $query = $pdo->prepare($sql);
        $query->execute();
    }
    
    public function modifPassword($email)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT email, token FROM $this->table where email = :email";
        $query = $pdo->prepare($sql);
        $query->bindValue(':email',$email, \PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
    }

    public function selectInfo($id)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_STR);
        $query->execute();
        return $query->fetch();
    }

    public function insertInfo($userId, $nom, $prenom, $adresse, $telephone)
    {
        $pdo = LocalPdo::getPdo();
        $sql = "UPDATE $this->table SET nom = :nom, prenom = :prenom, adresse = :adresse, telephone = :telephone WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id', $userId, \PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, \PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, \PDO::PARAM_STR);
        $query->bindValue(':adresse', $adresse, \PDO::PARAM_STR);
        $query->bindValue(':telephone', $telephone, \PDO::PARAM_STR);
        $query->execute();
    }
}
