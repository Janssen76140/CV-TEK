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
        <h1><a href="">CV Projekt</a></h1>
        <ul>


            <?php if (!isLogged()) { ?>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php#service">Services</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li class="inscription-nav"><a href="inscription.php">Inscription</a></li>
                <li class="connexion-nav"><a href="connexion.php">Connexion</a></li>
            <?php } elseif ($_SESSION['login']['role'] == "utilisateur") { ?>

                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php#service">Services</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="CreateCv.php">Creation CV</a></li>
                <li><a href="index.php#contact">Deconnexion</a></li>
            <?php } elseif ($_SESSION['login']['role'] == "admin") { ?>

                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php#service">Services</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="CreateCv.php">Creation CV</a></li>
                <li><a href="index.php#contact">Recherche de CV</a></li>
                <li><a href="admin/index.php">Pannel admin</a></li>
                <li><a href="index.php#contact">Deconnexion</a></li>
            <?php } elseif ($_SESSION['login']['role'] == "recruteur") { ?>

                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php#service">Services</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <li><a href="index.php#contact">Recherche de CV</a></li>
                <li><a href="index.php#contact">Deconnexion</a></li>
            <?php } ?>


        </ul>
    </nav>
</header>
</body>





