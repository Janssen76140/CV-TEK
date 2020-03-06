<?php

spl_autoload_register();
if (!isAdmin()){
    header("Location: 404.html");
}

use Inc\Service\Bdd;
$select = new Bdd();
$id = $_GET['id'];
$selectall = $select->select();
$delete = $select->delete($id);
header('Location: admin.php');