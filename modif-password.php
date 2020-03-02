<?php
spl_autoload_register();

use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;

$title = "Modifier le mot de passe";
$errors = array();
$success = false;
$errors = array();

if (!empty($_GET['token']) && !empty($_GET['email'])) {

    $token = clean($_GET['token']);
    $email = clean($_GET['email']);

    $token = $_GET['token'];
    $email = $_GET['email'];
    $email = urldecode($email);
    $sql = "SELECT * FROM users_recruteur where token = :token AND email = :email";
    $query = $pdo->prepare($sql);
    $query->bindValue(':token', $token, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if (!empty($user)) {
        if (!empty($_POST['submitted'])) {
            // 3 - Password
            $password1 = trim(strip_tags($_POST['password1']));
            $password2 = trim(strip_tags($_POST['password2']));
            if (!empty($password1)) {
                if ($password1 != $password2) {
                    $errors['password'] = 'Vos mots de passe doivent être identiques';
                } elseif (mb_strlen($password1) <= 5) {
                    $errors['password'] = 'Le mot de passe doit contenir minimum 6 caractères';
                }
            } else {
                $errors['password'] = 'Veuillez renseigner un mot de passe';
            }
            if (count($errors) == 0) {
                // Password Hasher
                $hashPassword = password_hash($password1, PASSWORD_BCRYPT);
                $token = generatorToken(120);
                $sql = "UPDATE users_recruteur SET password = :password, token = :token WHERE email = :email";
                $query = $pdo->prepare($sql);
                $query->bindValue(':token', $token, PDO::PARAM_STR);
                $query->bindValue(':email', $email, PDO::PARAM_STR);
                $query->bindValue(':password', $hashPassword, PDO::PARAM_STR);
                $query->execute();

                header('Location: login.php');
            }
        }
    } else {
        die(404);
    }

}

include ('inc/header.php'); ?>


<h2>Modifier votre mot de passe</h3>

<form action="" method="post">

    <?= $form->label('mail', 'Email'); ?>
    <?= $form->input('mail', 'text'); ?>
    <?= $form->errors('mail'); ?>

    <?= $form->submit(); ?>
</form>


<?php include ('inc/footer.php');
