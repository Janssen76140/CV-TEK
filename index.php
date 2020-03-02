<?php
spl_autoload_register();

use Inc\Service\SearchBar;
$search = new SearchBar();
$getword = $search ->getWord();
$recherches = $search ->findWord($getword);

foreach ($recherches as $recherche) {
    echo "<div>" . $recherche['nom'], "<br>" . $recherche['prenom'] ."</div>";
}

include('Inc/header.php');?>
    <form action="index.php" method="get">
        <label for="terme" id="terme"></label>
        <input type="search" name="terme" id="terme">
        <input type="submit" name="submit" value="Rechercher">
    </form>

    <section class="wrap" id="projets-section">
        <div class="text-section-projet">
            <h2>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</h2
            <p>
                LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem <br>
                LoremLoremLoremLoremLoremLoremLorem
            </p>
        </div>
        <div class="row">
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon1.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon2.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""> <img src="asset/images/icon3.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon4.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon5.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""> <img src="asset/images/icon6.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""> <img src="asset/images/icon7.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon8.png" alt=""></a>
                    <p>Lorem</p>
                </figure>
            </div>
        </div>
    </section>
    <section class="wrap2" id="video-section">
        <div class="text-section-video">
            <h3>Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem</h3>
            <p>
                LoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLoremLorem <br>
                LoremLoremLoremLoremLoremLoremLorem
            </p>
        </div>
        <div class='embed-container'>
            <iframe src='https://www.youtube.com/embed/ah74HeRwXuQ' frameborder='0' allowfullscreen></iframe>
        </div>
    </section>


<?php include('Inc/footer.php');









