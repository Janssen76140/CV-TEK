<?php
namespace Inc\Model;

class ArticleModel
{
    private $id;
    private $nom;
    private $prenom;
    private $nomEtreprise;
    private $email;
    private $adresse;
    private $telephone;
    private $siret;
    private $password;
    private $role;
    
    

    public function getId()
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail(string $mail)
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNomEntreprise()
    {
        return $this->nomEtreprise;
    }

    public function setNomEntreprise($nomEtreprise)
    {
        $this->nomEtreprise = $nomEtreprise;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSiret()
    {
        return $this->siret;
    }

    public function setSiret(int $siret)
    {
        $this->sriet = $siret;

        return $this;
    }
}