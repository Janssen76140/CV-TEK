<?php
spl_autoload_register();
include('functions/function.php');
use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;
use \Inc\Utils;

$title = "Modifier le mot de passe";
$errors = array();
$success = false;

if (!empty($_POST['envoyer'])) {

    // Faille XSS
    $faille = new Utils;
    $email = $faille->clean($_POST['email']);

    $verif = new ArticleRepository;
    $mailSup = $verif->modifPassword($email);

    if (!empty($user)) {
        $token = $user['token'];
        $email = urlencode($email);
        $html = '<p class="ici"><a href="modif-password.php?token='.$token.'&email='.$email.'">C\'est ici</a></p>';
        echo $html;

    } else {
        $errors['email'] = 'Veuillez renseigner un mot de passe';
    }

    $form = new Form($errors);

} else {
    header('Location: 404.html');
}


include('Inc/header.php'); ?>


<h2>Changer de mot de passe</h2>

<form action="" method="post" class="forgetpass">

    <?= $form->label('password', 'Nouveaux mot de passe'); ?>
    <?= $form->input('password', 'password'); ?>
    <?= $form->errors('password'); ?>

    <?= $form->label('password', 'Confirmez votre mot de passe'); ?>
    <?= $form->input('password', 'password'); ?>
    <?= $form->errors('password'); ?>

    <?= $form->submit('envoyer','Envoyer'); ?>
</form>

<?php include('Inc/footer.php');
