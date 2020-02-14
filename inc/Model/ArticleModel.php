<?php
namespace Inc\Model;

class ArticleModel
{
    private $id;
    private $mail;
    private $password;
    private $title;
    private $content;
    private $created_at;
    private $status;
    
    

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
}