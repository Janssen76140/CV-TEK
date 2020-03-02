<?php
spl_autoload_register();

use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;
use Inc\Utils;

$title = "Mon compte";
$errors = array();
$success = false;
$utils = new Utils;
$userId = $utils->getCurrentUserId();

if (!empty($_POST['submitted'])) {
    // FAILLE XSS
    $nom           = trim(strip_tags($_POST['nom']));
    $prenom        = trim(strip_tags($_POST['prenom']));
    $adresse       = trim(strip_tags($_POST['adresse']));
    $telephone     = trim(strip_tags($_POST['telephone']));

    // Validation
    $v = new Validation();
    $v->validChamp($errors, $nom, 'nom', 2, 250);
    $v->validChamp($errors, $prenom, 'prenom', 2, 250);
    $v->validChamp($errors, $adresse, 'adresse', 2, 900);
    $v->validChamp($errors, $telephone, 'telephone', 10, 10);


    if (count($errors) == 0 && $userId) {
        // INSERT into
        
        $repo = new ArticleRepository;
        $register = $repo->insertInfo($userId, $nom,$prenom,$adresse,$telephone);
        $success = true;
        header('Location: connexion.php');
    }
}

$form = new Form($errors);

include('inc/header.php'); ?>

<h3>Mon compte</h3>
<span>Mes informations</span> <?php


$repository = new ArticleRepository;
if ($userId != false) {
    $info = $repository->selectInfo($userId); 
    echo '<p>' . $info['email'] . '</p>';
} ?>
<a href="mdpOublie.php">Changer votre mot de passe</a>

<span>Compléter mes information</span>

<form action="" method="post">

    <?= $form->label('nom', 'Nom'); ?>
    <?= $form->input('nom', 'text'); ?>
    <?= $form->errors('nom'); ?>

    <?= $form->label('prenom', 'Prénom'); ?>
    <?= $form->input('prenom', 'text'); ?>
    <?= $form->errors('prenom'); ?>

    <?= $form->label('adresse', 'Adresse'); ?>
    <?= $form->input('adresse', 'text'); ?>
    <?= $form->errors('adresse'); ?>

    <?= $form->label('telephone', 'Telephone'); ?>
    <?= $form->input('telephone', 'number'); ?>
    <?= $form->errors('telephone'); ?>

    <?= $form->submit(); ?>
</form>

<?php include('inc/footer.php');