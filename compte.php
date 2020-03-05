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
        header('Location: compte.php');
    }
}

// if(isset($_POST['Upload'])){

//     $fileName = $_FILES['file']['name'];
//     $target_dir = "upload/";
//     $target_file = $target_dir . basename($_FILES["file"]["name"]);

//     // Select file type
//     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//     // Valid file extensions
//     $extensions_arr = array("jpg","jpeg","png","gif");

    // Check extension
    // if( in_array($imageFileType,$extensions_arr) ){
    //     $info           = trim(strip_tags($_POST['Cle']));
    //     $pdo = LocalPdo::getPdo();
    //     $sql = "INSERT into upload  VALUES (NULL, :userId, :info , :fileName , NOW())";
    //     $query = $pdo->prepare($sql);
    //     $query->bindValue(':fileName', $fileName, \PDO::PARAM_STR);
    //     $query->bindValue(':info', $info, \PDO::PARAM_STR);
    //     $query->bindValue(':userId', $userId, \PDO::PARAM_STR);
    //     $query = $pdo->prepare($sql);
    //     $query->execute();

    //     // Upload file
    //     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$fileName);

//}

// }
// $pdo = LocalPdo::getPdo();
// $sql = "SELECT * FROM upload  WHERE id = 29 ";
// $query = $pdo->prepare($sql);
// $query->execute();
// $row = $query->fetch();

// $image = $row['file_name'];
// $image_src = "upload/".$image;
?>

<!-- <img src='<?php echo $image_src;  ?>' width="100%"> -->

<?php
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
        echo '<p>' . $info['email'] . '</p>';
    } 
    if ($userId != false) {
        $info = $repository->selectInfo($userId);
        echo '<p>' . $info['nom'] . '</p>';
    } 
    if ($userId != false) {
        $info = $repository->selectInfo($userId);
        echo '<p>' . $info['prenom'] . '</p>';
    }
    if ($userId != false) {
        $info = $repository->selectInfo($userId);
        echo '<p>' . $info['adresse'] . '</p>';
    }
    if ($userId != false) {
        $info = $repository->selectInfo($userId);
        echo '<p>' . $info['telephone'] . '</p>';
    } ?>
    <p><a href="mdpOublie.php">Changer votre mot de passe</a></p>
    <p class="messageRouge">* Si vous voulez que votre CV soit retrouvé veuillez renseigner les informations suivantes</p>
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

<h3>Ajouter mon cv</h3>
<form  method="post" enctype="multipart/form-data">
    <?= $form->input('file', 'file'); ?>

    <?= $form->label('Cle', 'Ajoute des mots clés correspondant à ton cv'); ?>
    <?= $form->input('Cle', 'text'); ?>
    <?= $form->submit('submit','Upload'); ?>
</form>
<?php include('Inc/footer.php');


?>
