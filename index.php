<?php
session_start();
require('inc/function.php');
require('inc/pdo.php');
include('inc/header.php'); ?>

<main>
 <div class="wrap">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="asset/img/dailycoffee.jpg" alt="">
      </li>
      <li>
        <img src="asset/img/webinfographics.jpg" alt="">
      </li>
      <li>
        <img src="asset/img/smartdocuments.jpg" alt="">
      </li>
    </ul>
  </div>
</div>
</main>

<section id="tronbinoscope">
    <div class="ava avajan">
        <h4>Janssen</h4>
        <img src="asset/img/avatar-wp.png" alt="Janssen">
        <p>Chef de projet</p>
    </div>

    <div class="ava avaeti">
        <h4>Etienne</h4>
        <img src="asset/img/avatar-wp.png" alt="Etienne">
        <p>Développeur</p>
    </div>

    <div class="ava avagui">
        <h4>Guillaume</h4>
        <img src="asset/img/avatar-wp.png" alt="Guillaume">
        <p>Développeur</p>
    </div>

    <div class="ava avasof">
        <h4>Sofien</h4>
        <img src="asset/img/avatar-wp.png" alt="Sofien">
        <p>Développeur</p>
    </div>

    <div class="ava avaben">
        <h4>Benjamin</h4>
        <img src="asset/img/avatar-wp.png" alt="Benjamin">
        <p>Développeur</p>
    </div>
    <div class="clear"></div>
</section>

<?php include('inc/footer.php');
