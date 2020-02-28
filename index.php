<?php
session_start();
require ('inc/header.php');
require('functions/function.php');
require ('inc/pdo.php');

if (isset($_GET["submit"]) AND $_GET["submit"] == "Rechercher")
{
    $_GET["terme"] = htmlspecialchars($_GET["terme"]);
    $terme = $_GET["terme"];

     $terme = strip_tags($terme);
}
if (isset($terme)) {
    
    $terme = strtolower($terme);
    $sql = "SELECT nom, prenom FROM users_recruteur WHERE nom LIKE '%$terme%' OR prenom LIKE '%$terme%' ";
    $query = $pdo->prepare($sql);
    $query->execute(array("%$terme%", "%$terme%"));
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
    if (!isset($recherche)){
        echo "Il n'y a aucun résultat";
    } else {
        echo $recherche['nom'], "<br>" . $recherche['prenom'];
    }
}

require ('inc/footer.php');




