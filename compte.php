<?php
session_start();
spl_autoload_register();
include('inc/function.php');

use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;
use Inc\Utils;

$title = "Mon compte";
$errors = array();
$success = false;
$utils = new Utils;
$userId = $utils->getCurrentUserId();

if (!empty($_POST['envoyer'])) {
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
        $register = $repo->insertInfo($userId, $nom, $prenom, $adresse, $telephone);
        $success = true;
        header('Location: connexion.php');
    }
} 

$form = new Form($errors);

include('Inc/header.php'); ?>
<div class="espace2"></div>
<h3 class="titrecompte">Mon compte</h3>
<div class="compte">
    
    <h4>Mes informations</h4>

    <?php
    $repository = new ArticleRepository;
    if ($userId != false) {
        $info = $repository->selectInfo($userId);
        echo '<p>• ' . $info['email'] . '</p>';
    } ?>
    <p><a href="mdpOublie.php">Changer votre mot de passe</a></p>
    <p class="messageRouge">* Si vous voulez que votre CV soit retrouvé veuillez rensigner les informations suivantes</p>
</div>
<div class="compte2">
    <h4>Compléter mes information</h4>

    <form action="" method="post" class="formulaireCompte">

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

        <?= $form->submit('envoyer', 'Modifier'); ?>
    </form>
</div>

<?php include('Inc/footer.php');
