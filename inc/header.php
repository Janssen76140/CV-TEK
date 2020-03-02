<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php if(!empty($title)) {echo $title;} else {echo 'nom du site';} ?> </title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>


<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="admin\index.php">Admin</a></li>
        </ul>
    </nav>
</header>

<div id="wrap">