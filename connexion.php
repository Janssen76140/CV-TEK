<?php
spl_autoload_register();

use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;

$title = "Connexion";
$errors = array();
$success = false;


if (!empty($_POST['submitted'])) {
    // FAILLE XSS
    $mail   = trim(strip_tags($_POST['mail']));
    $mdp    = trim(strip_tags($_POST['password']));

    // Validation
    $v = new Validation();
    $v->ValidLogin($errors, $mail, $mdp);

    if (count($errors) == 0) {
        // INSERT into
        $repo = new ArticleRepository;
        $login = $repo->findByEmail($mail);

        $success = true;
        header('Location: index.php');
    }
}

$form = new Form($errors);

include('inc/header.php'); ?>

<form action="" method="post" class="connexion">

    <div class="formdiv">
      <?= $form->label('mail', 'Email'); ?>
      <?= $form->input('mail', 'text'); ?>
      <?= $form->errors('mail'); ?>
    </div>
    <div class="formdiv">
      <?= $form->label('password', 'Mot de passe'); ?>
      <?= $form->input('password', 'password'); ?>
      <?= $form->errors('password'); ?>
    </div>
      <a href="mdpOublie.php">Mot de passe oublié ?</a>
    <div class="login">
      <?= $form->submit(); ?>
    </div>
</form>


<?php include('inc/footer.php');
