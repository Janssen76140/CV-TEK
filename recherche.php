<?php
session_start();
spl_autoload_register();

use Inc\Service\SearchBar;
use Inc\Utils;

include('inc/function.php');
$search = new SearchBar();
$getword = $search->getWord();
$recherches = $search->findWord($getword);



include('Inc/header.php')?>
<section id="cvsearch_top">
<h1 class="cvsearch_title">Trouvez des profils :</h1>
    <form class="cvsearch_form" action="" method = "get">
        <input type="search" name="search" placeholder="Rechercher un cv ..."/>
        <input type="submit" name="submit" value="Rechercher"/>
    </form>
</section>
<section id="cvsearch_bottom">
<?php
foreach ($recherches as $recherche) {
echo "<div>" . $recherche['nom'], "<br>" . $recherche['prenom'] . "</div>";
}
?>
</section>

<?php
include('Inc/footer.php');


