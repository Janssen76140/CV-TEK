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
<?php
foreach ($recherches as $recherche) {
echo "<div>" . $recherche['nom'], "<br>" . $recherche['prenom'] . "</div>";
}


include('Inc/footer.php');


