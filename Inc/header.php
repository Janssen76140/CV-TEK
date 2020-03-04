<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php if (!empty($title)) {
            echo $title;
        } else {
            echo 'nom du site';
        } ?> </title>
    <link rel="stylesheet" href="asset/css/style.css">

</head>


<body class="fittext">
<header>
    <nav class="wrap">
        <h1><a href="">CV Projet</a></h1>
        <ul>
<!--            --><?php //if (!isAdmin()){ ?>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php#service">Services</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li><a href="CreateCv.php">Creation CV</a></li>
            <li class="inscription-nav"><a href="inscription.php">Inscription</a></li>
<!--            --><?php //}?>
            <li class="connexion-nav"><a href="connexion.php">Connexion</a></li>



            <li><a href="admin/index.php">Panel admin</a></li>
        </ul>
    </nav>
</header>
</body>
