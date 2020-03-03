<?php
spl_autoload_register();

use Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;

$title = "Inscription recruteur";
$errors = array();
$success = false;

if (!empty($_POST['envoyer'])) {
    // FAILLE XSS
    $nom           = trim(strip_tags($_POST['nom']));
    $prenom        = trim(strip_tags($_POST['prenom']));
    $nomEntreprise = trim(strip_tags($_POST['nom_entreprise']));
    $adresse       = trim(strip_tags($_POST['adresse']));
    $telephone     = trim(strip_tags($_POST['telephone']));
    $siret         = trim(strip_tags($_POST['siret']));
    $password      = trim(strip_tags($_POST['password']));
    $password2     = trim(strip_tags($_POST['password2']));
    $email         = trim(strip_tags($_POST['mail']));

    // Validation
    $v = new Validation();
    $v->ValidMdp  ($errors, $password, $password2);
    $v->ValidMail ($errors, $email);
    $v->validChamp($errors, $nom, 'nom', 2, 250);
    $v->validChamp($errors, $prenom, 'prenom', 2, 250);
    $v->validChamp($errors, $nomEntreprise, 'nom_entreprise', 2, 900);
    $v->validChamp($errors, $adresse, 'adresse', 2, 900);
    $v->validChamp($errors, $telephone, 'telephone', 10, 10);
    $v->validChamp($errors, $siret, 'siret', 14, 24);


    if (count($errors) == 0) {
        // INSERT into

        $repo = new ArticleRepository;
        $register = $repo->insertRecruteur($nom,$prenom,$email,$nomEntreprise,$adresse,$telephone,$siret,$password);
        $success = true;
        header('Location: connexion.php');
    }
}

$form = new Form($errors);

include('Inc/header.php'); ?>

<h2>Inscription recruteur</h2>

<form action="" method="post" class="formulaire">

      <?= $form->label('nom', 'Nom'); ?>
      <?= $form->input('nom', 'text'); ?>
      <?= $form->errors('nom'); ?>

      <?= $form->label('prenom', 'Prénom'); ?>
      <?= $form->input('prenom', 'text'); ?>
      <?= $form->errors('prenom'); ?>

      <?= $form->label('mail', 'Email'); ?>
      <?= $form->input('mail', 'text'); ?>
      <?= $form->errors('mail'); ?>

      <?= $form->label('nom_entreprise', 'Nom de votre entreprise'); ?>
      <?= $form->input('nom_entreprise', 'text'); ?>
      <?= $form->errors('nom_entreprise'); ?>

      <?= $form->label('adresse', 'Adresse de votre entreprise'); ?>
      <?= $form->input('adresse', 'text'); ?>
      <?= $form->errors('adresse'); ?>

      <?= $form->label('telephone', 'Telephone'); ?>
      <?= $form->input('telephone', 'number'); ?>
      <?= $form->errors('telephone'); ?>

      <?= $form->label('siret', 'N° SIRET'); ?>
      <?= $form->input('siret', 'number'); ?>
      <?= $form->errors('siret'); ?>

      <?= $form->label('password', 'Mot de passe'); ?>
      <?= $form->input('password', 'password'); ?>
      <?= $form->errors('password'); ?>

      <?= $form->label('password2', 'Confirmez votre mot de passe'); ?>
      <?= $form->input('password2', 'password'); ?>
      <?= $form->errors('password2'); ?>

      <?= $form->submit('envoyer','S\'inscrire'); ?>
    </div>
</form>
<div class="espace"></div>
<a class="autreFormulaire2" href="inscription.php">Je suis rechercheur d'emploi</a>

<?php include('inc/footer.php');
