<?php
spl_autoload_register();

use \Inc\Repository\ArticleRepository;
use \Inc\Service\Form;
use \Inc\Service\Validation;

$title = "Création de CV";
$errors = array();
$succes = false;

if (!empty($_POST['envoyer'])) {
    // FAILLE XSS
    $titre_cv           = trim(strip_tags($_POST['titre_cv']));
    $accroche_cv        = trim(strip_tags($_POST['accroche_cv']));
    $datedebut = trim(strip_tags($_POST['datedebut']));
    $datefin       = trim(strip_tags($_POST['datefin']));
    $intitule_poste     = trim(strip_tags($_POST['intitule_poste']));
    $nom_entreprise         = trim(strip_tags($_POST['nom_entreprise']));
    $description_experience      = trim(strip_tags($_POST['description_experience']));
    $date_formation     = trim(strip_tags($_POST['date_formation']));
    $nom_formation         = trim(strip_tags($_POST['nom_formation']));
    $nom_ecole     = trim(strip_tags($_POST['nom_ecole']));
    $ville_ecole         = trim(strip_tags($_POST['ville_ecole']));
    $description_formation      = trim(strip_tags($_POST['description_formation']));
    $centre_interet     = trim(strip_tags($_POST['centre_interet']));
    $competences         = trim(strip_tags($_POST['competences']));

    // Validation
    $v = new Validation();
    $v->validChamp($errors, $titre_cv, 'titre_cv', 2, 50);
    $v->validChamp($errors, $accroche_cv, 'accroche_cv', 2, 1000);
    $v->validChamp($errors, $intitule_poste, 'intitule_poste', 2, 50);
    $v->validChamp($errors, $nom_entreprise, 'nom_entreprise', 2, 50);
    $v->validChamp($errors, $description_experience, 'description_experience', 2, 1000);
    $v->validChamp($errors, $nom_formation, 'nom_formation', 2, 50);
    $v->validChamp($errors, $nom_ecole, 'nom_ecole', 2, 50);
    $v->validChamp($errors, $ville_ecole, 'ville_ecole', 2, 50);
    $v->validChamp($errors, $description_formation, 'description_formation', 2, 1000);
    $v->validChamp($errors, $centre_interet, 'centre_interet', 2, 50);
    $v->validChamp($errors, $competences, 'competences', 2, 50);


    if (count($errors) == 0) {
        // INSERT into
        
        $repo = new ArticleRepository;
        $register = $repo->insertRecruteur($nom,$prenom,$email,$nomEntreprise,$adresse,$telephone,$siret,$password);
        $success = true;
        header('Location: connexion.php');
    }
}

$form = new Form($errors);

include('inc/header.php'); ?>

<h2>Edition de CV</h2>

<form action="#" method="post">

    <h3>Titres et accroche</h3>

    <?= $form->label('titrecv', 'Titre du CV'); ?>
    <?= $form->input('titrecv', 'text'); ?>
    <?= $form->errors('titrecv'); ?>

    <?= $form->label('accroche_cv', 'Accroche du CV'); ?>
    <?= $form->textarea('accroche_cv'); ?>
    <?= $form->errors('accroche_cv'); ?>


    <h3>Expériences</h3>

    <?= $form->label('datedebut', 'Date du début'); ?>
    <?= $form->optionMonth('datedebut'); ?>
    <?= $form->optionYear('datedebut', '2020'); ?>
    <?= $form->label('datefin', 'Date de fin'); ?>
    <?= $form->optionMonth('datefin'); ?>
    <?= $form->optionYear('datefin', '2020'); ?>
    <?= $form->errors('datedebut'); ?>

    <?= $form->label('intitule-poste', 'Intitulé du poste'); ?>
    <?= $form->input('intitule-poste', 'text'); ?>
    <?= $form->errors('intitule-poste'); ?>

    <?= $form->label('nom-entreprise', 'Nom de l\'entreprise'); ?>
    <?= $form->input('nom-entreprise', 'text'); ?>
    <?= $form->errors('nom-entreprise'); ?>

    <?= $form->label('description-experience', 'Description de votre éxperience'); ?>
    <?= $form->textarea('description-experience'); ?>
    <?= $form->errors('description-experience'); ?>


    <h3>Formations</h3>

    <?= $form->label('date-formation', 'Date de fin de la formation'); ?>
    <?= $form->optionYear('date-formation', '2020'); ?>
    <?= $form->errors('date-formation'); ?>

    <?= $form->label('nom-formation', 'Intitulé de la formation'); ?>
    <?= $form->input('nom-formation', 'text'); ?>
    <?= $form->errors('nom-formation'); ?>

    <?= $form->label('nom-ecole', 'Nom de votre école'); ?>
    <?= $form->input('nom-ecole', 'text'); ?>
    <?= $form->errors('nom-ecole'); ?>

    <?= $form->label('ville-ecole', 'Ville de votre école'); ?>
    <?= $form->input('ville-ecole', 'text'); ?>
    <?= $form->errors('ville-ecole'); ?>

    <?= $form->label('description-formation', 'Description de votre formation'); ?>
    <?= $form->textarea('description-formation'); ?>
    <?= $form->errors('description-formation'); ?>


    <h3>Centre d'intérêt</h3>

    <?= $form->label('centre-interet', 'Vos centres d\'intérêt'); ?>
    <?= $form->input('centre-interet', 'text'); ?>
    <?= $form->errors('centre-interet'); ?>


    <h3>Compétences</h3>

    <?= $form->label('competence', 'Vos compétences'); ?>
    <?= $form->input('competence', 'text'); ?>
    <?= $form->errors('competence'); ?>


    <?= $form->submit('envoyer','Envoyer le CV'); ?>
</form>

<?php include('inc/footer.php');
