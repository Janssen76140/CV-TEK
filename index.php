<?php

$title = 'Accueil';
include('Inc/header.php'); ?>

    <div class="image-header"></div>

    <section class="wrap" id="projets-section">
        <div class="text-section-projet">
            <h2>Nous pouvons vous aider à <span>trouver un emploi</span></h2>
            <p>
                Choisissez votre secteur d'activités en un seul clique !
            </p>
        </div>
        <div class="row">
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon1.png" alt=""></a>
                    <p>Comptabilité / Finance</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon2.png" alt=""></a>
                    <p>Automobile</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""> <img src="asset/images/icon3.png" alt=""></a>
                    <p>Travaux publics</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon4.png" alt=""></a>
                    <p>Education</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon5.png" alt=""></a>
                    <p>Santé</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""> <img src="asset/images/icon6.png" alt=""></a>
                    <p>Restauration</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""> <img src="asset/images/icon7.png" alt=""></a>
                    <p>Transport / Logistique</p>
                </figure>
            </div>
            <div class="column">
                <figure>
                    <a href=""><img src="asset/images/icon8.png" alt=""></a>
                    <p>Numérique / Digital</p>
                </figure>
            </div>
        </div>
    </section>
        <div class='video'>
            <h3>Par où commencer ? Apprenez à rédiger <span>un bon CV !</span> </h3>
            <p>Notre équipe vous aides dans vos démarches.</p>
            <iframe src='https://www.youtube.com/embed/ah74HeRwXuQ' frameborder='0' allowfullscreen></iframe>
        </div>


    <section class="contact-section">
            <h3>Contactez-nous</h3>

        <div class="form-footer">
            <form action="#" class="formulaire2">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email..">

                <label for="object">Objet</label>
                <input type="text" id="object" name="object" placeholder="Objet..">

                <label for="message" id="message">Message</label>
                <textarea id="message" name="message" placeholder="Message.."></textarea>

                <div class="espace"></div>
                <a class="autreFormulaire3" href="inscriptionRecruteur.php">Envoyer</a>

            </form>
        </div>
    </section>

<?php include('Inc/footer.php'); ?>










