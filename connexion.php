<?php
spl_autoload_register();
include('functions/function.php');
use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;


$title = "Connexion";
$errors = array();
$success = false;

if (!empty($_POST['envoyer'])) {
    // FAILLE XSS
    $mail   = trim(strip_tags($_POST['mail']));
    $mdp    = trim(strip_tags($_POST['password']));

    // Validation
    $v = new Validation();
    $v->ValidLogin($errors, $mail, $mdp);

    if (count($errors) == 0) {
        // INSERT into
        $repo = new ArticleRepository;
        $user = $repo->findByEmail($mail);

        $success = true;
        header('Location: compte.php');
    }
}

$form = new Form($errors);

include('Inc/header.php'); ?>
<h4>Connexion</h4>
<form action="" method="post" class="formulaire">

      <?= $form->label('mail', 'Email'); ?>
      <?= $form->input('mail', 'text'); ?>
      <?= $form->errors('mail'); ?>

      <?= $form->label('password', 'Mot de passe'); ?>
      <?= $form->input('password', 'password'); ?>
      <?= $form->errors('password'); ?>

      <div class="infoFormulaire">
      <a href="mdpOublie.php">Mot de passe oublié ?</a>
      <p>Pas de compte ? <a href="inscription.php"> Inscrivez-vous</a></p>
      </div>

      <?= $form->submit('envoyer','Se connecter'); ?>

</form>

<?php include('Inc/footer.php');
