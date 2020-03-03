<?php

spl_autoload_register();

use Inc\Service\Bdd;
$select = new Bdd();
$id = $_GET['id'];
$selectall = $select->select();
$delete = $select->delete($id);
header('Location: admin.php');