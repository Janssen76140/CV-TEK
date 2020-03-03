<?php
spl_autoload_register();

use Inc\Service\SearchBar;
use Inc\Utils;

$verif = new Utils();
$verifadmin = $verif->isAdmin();
if (!isAdmin()){
    header("Location: 404.php");
}

$search = new SearchBar();
$getword = $search->getWord();
$recherches = $search->findWord($getword);



include('Inc/header.php'); ?>
<h1>CV</h1>
<form method="get" action="">
    <input type="search" name="terme" value="">
    <input type="submit" name="submit" value="Rechercher">
</form>
<?php
foreach ($recherches as $recherche) {
echo "<div>" . $recherche['nom'], "<br>" . $recherche['prenom'] . "</div>";
}


include('Inc/footer.php');


