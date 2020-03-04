<?php
spl_autoload_register();
include('inc/function.php');
use Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;

$title = "Inscription";
$errors = array();
$success = false;

if (!empty($_POST['envoyer'])) {
    // FAILLE XSS
    $mail    = trim(strip_tags($_POST['mail']));
    $mdp     = trim(strip_tags($_POST['password']));
    $confmdp = trim(strip_tags($_POST['password2']));

    // Validation
    $v = new Validation();
    $v->ValidMail($errors, $mail);
    $v->ValidMdp($errors, $mdp, $confmdp);

    if (count($errors) == 0) {
        // INSERT into

        $repo = new ArticleRepository;
        $register = $repo->insertRechercheur($mail, $mdp);
        $success = true;
        header('Location: connexion.php');
    }
}

if(!empty($_POST['cgu']) && $_POST['cgu']) {

} else {
    $errors['cgu'] = 'Veuillez accepter les Conditions générales d’utilisation.';
}

$form = new Form($errors);

include('Inc/header.php'); ?>

<h4>Inscription dépot de CV</h4>

<form action="" method="post" class="formulaire">

    <?= $form->label('mail', 'Email'); ?>
    <?= $form->input('mail', 'text'); ?>
    <?= $form->errors('mail'); ?>

    <?= $form->label('password', 'Mot de passe'); ?>
    <?= $form->input('password', 'password'); ?>
    <?= $form->errors('password'); ?>

    <?= $form->label('password2', 'Confirmez votre mot de passe'); ?>
    <?= $form->input('password2', 'password'); ?>
    <?= $form->errors('password2'); ?>

  <?= $form->submit('envoyer','S\'inscrire'); ?>

  <a class="cgubox" href="cgu.php">Conditions générales d’utilisation</a>
        <input type="checkbox" name="cgu" id="cgu" value="yes" <?php  if(!empty($_GET['condition'])) {if($_GET['condition'] == 'yes') {echo 'checked';}} ?>>
        <p class="error"><?php if(!empty($errors['cgu'])) { echo $errors['cgu']; } ?></p>
</form>
<div class="espace"></div>
<a class="autreFormulaire" href="inscriptionRecruteur.php">Je suis recruteur</a>

<?php include('Inc/footer.php');
