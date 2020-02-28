<?php
session_start();
include ('inc/function.php');
//include ('inc/pdo.php');





include('inc/header.php'); ?>


<?php include('inc/footer.php');

require ('inc/header.php');
require('functions/function.php');
require ('inc/pdo.php');

if (isset($_GET["submit"]) AND $_GET["submit"] == "Rechercher")
{
    $_GET["terme"] = htmlspecialchars($_GET["terme"]);
    $terme = $_GET["terme"];
     $terme = trim($terme);
     $terme = strip_tags($terme);
}
if (isset($terme))
{
    $terme = strtolower($terme);
    $sql = "SELECT nom, prenom FROM users_recruteur WHERE nom LIKE ? OR prenom LIKE ? ";
    $query = $pdo->prepare($sql);
    $query->execute(array("%".$terme."%", "%".$terme."%"));
    $recherches = $query->fetchAll();
    var_dump($recherches);
}
?>

<form action = "index.php" method = "get">
    <input type="search" name="terme">
    <input type="submit" name="submit" value="Rechercher">
</form>

<?php
foreach ($recherches as $recherche){
    echo "<div>". $recherche['nom'] , "<br>". $recherche['prenom'];
}
?>

<?php
require ('inc/footer.php');



