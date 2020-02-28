<?php
session_start();
require ('inc/header.php');
require('functions/function.php');
require ('inc/pdo.php');
?>

<form action = "index.php" method = "get">
    <input type="search" name="terme">
    <input type="submit" name="submit" value="Rechercher">
</form>

<?php


<?php
require ('inc/footer.php');



