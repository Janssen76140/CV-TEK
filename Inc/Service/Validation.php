<?php 
namespace Inc\Service;
use Inc\LocalPdo;
use Inc\Repository\ArticleRepository;

class Validation 
{
    public function validChamp(&$errors, $value, $key, $min, $max, $empty = false)
    {
        if (!empty($value)) {
            if (mb_strlen($value) < $min) {
                $errors[$key] = 'Minimum '.$min.' caractères';
            } elseif (mb_strlen($value) > $max) {
                $errors[$key] = 'Maximum '.$max.' caractères';
            }
        }else {
            if(!$empty){
                $errors[$key] = 'Veuillez renseigner ce champ';
            }
        }
        return $errors;
    }

    public function ValidMail(&$errors, $mail) 
    {

        if (empty($mail) || filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
            $errors['mail'] = 'Veuillez renseigner un email valide';
        } else {
            $pdo = LocalPdo::getPdo();
            $sql = "SELECT id FROM users_recruteur WHERE email = :mail LIMIT 1";
            $query = $pdo->prepare($sql);
            $query->bindValue(':mail', $mail, \PDO::PARAM_STR);
            $query->execute();
            $verifemail = $query->fetch();
            if (!empty($verifemail)) {
                $errors['mail'] = 'Cet email existe dejà !';
            }
        }

    }

    public function ValidMdp(&$errors, $password1, $password2)
    {
        if (!empty($password1)) {
            if ($password1 != $password2) {
                $errors['password'] = 'Vos mots de passe doivent être identiques';
            } elseif (mb_strlen($password1) <= 5) {
                $errors['password'] = 'Le mot de passe doit contenir minimum 6 caractères';
            }
        } else {
            $errors['password'] = 'Veuillez renseigner un mot de passe';
        }
    }

    public function ValidLogin(&$errors, $mail, $password)
    {
        if (empty($mail) || empty($password)) {
            $errors['mail'] = 'Veuillez renseigner ce champ';
        } else {
            $repository = new ArticleRepository();
            
            $user = $repository->findByEmail($mail);
            
            if (!empty($user)) {

                if (password_verify($password, $user->getPassword())) {
                    $_SESSION['login'] = array(
                        'id'     => $user->getId(),
                        'mail'   => $user->getMail(),
                        'ip'     => $_SERVER['REMOTE_ADDR']
                    );
    
                    // Debug *_SESSION

                } else {
                    $errors['mail'] = 'Pseudo ou email inconnu ou mot de passe oublié';
                }
    
    
    
    
    
            } else {
                $errors['mail'] = 'Pseudo ou email inconnu';
            }
        }
    
    }
}