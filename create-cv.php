<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=he, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
    </header>

    <h1>Edition de CV</h1>
    <div class="createcv-form">
        <form action="#" method="get">
            <h2>Titres et accroche</h2>
            <label for="titre_cv">Titre du CV</label>
            <p>Le titre, plutôt court, reflète votre objectif professionnel.</p>
            <input type="text" id="title_resume" name="title_resume" value="">

            <label for="accroche_cv">Accroche</label>
            <p>L’accroche a pour but d’attirer l’attention du recruteur et de vous démarquer des autres candidats. En quelques mots, elle doit faire comprendre au recruteur le métier recherché et lui donner envie de vous rencontrer.</p>
            <textarea name="accroche_cv" id="accroche_cv" cols="30" rows="10"></textarea>

            <h2>Expériences</h2>
            <label for="datedebut-mois,datedebut-annee">Date du début</label>
            <select name="datedebut-mois" class="month">
                <option value="Janvier">Janvier</option>
                <option value="Fevrier">Février</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Aout">Août</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Decembre">Décembre</option>
            </select>
            <select name="datedebut-annee" class="year">
                <?php
                for ($year = 1970; $year <= 2020; $year++) {
                    $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                    echo "<option value=$year $selected>$year</option>";
                }
                ?>
            </select>

            <label for="datefin-mois,datefin-annee">Date de fin</label>
            <select name="datefin-mois" class="month">
                <option value="Janvier">Janvier</option>
                <option value="Fevrier">Février</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Aout">Août</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Decembre">Décembre</option>
            </select>
            <select name="datefin-annee" class="year">
                <?php
                for ($year = 1970; $year <= 2020; $year++) {
                    $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                    echo "<option value=$year $selected>$year</option>";
                }
                ?>
            </select>



            <label for="intitule-experience">Intitulé du poste</label>
            <input type="text" id="intitule" name="intitule" placeholder="Ex:jardinier, vendeur..." value="">

            <label for="entreprise">Nom de l'entreprise</label>
            <input type="text" id="entreprise" name="entreprise" placeholder="Ex: société Dupont" value="">

            <label for="description-exp">Description de votre expérience</label>
            <textarea name="description-exp" id="description-exp" placeholder="Décrivez les particularités du poste (ex: service de 150 couverts), vos responsabilités (ex: encadrement d'une équipe de 5 personnes), vos résultats (ex: augmentation de 5% du chiffre d'affaires)..." cols="30" rows="10"></textarea>


            <label for="datedebut-mois,datedebut-annee">Date du début</label>
            <select name="datedebut-mois" class="month">
                <option value="Janvier">Janvier</option>
                <option value="Fevrier">Février</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Aout">Août</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Decembre">Décembre</option>
            </select>
            <select name="datedebut-annee" class="year">
                <?php
                for ($year = 1970; $year <= 2020; $year++) {
                    $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                    echo "<option value=$year $selected>$year</option>";
                }
                ?>
            </select>

            <label for="datefin-mois,datefin-annee">Date de fin</label>
            <select name="datefin-mois" class="month">
                <option value="Janvier">Janvier</option>
                <option value="Fevrier">Février</option>
                <option value="Mars">Mars</option>
                <option value="Avril">Avril</option>
                <option value="Mai">Mai</option>
                <option value="Juin">Juin</option>
                <option value="Juillet">Juillet</option>
                <option value="Aout">Août</option>
                <option value="Septembre">Septembre</option>
                <option value="Octobre">Octobre</option>
                <option value="Novembre">Novembre</option>
                <option value="Decembre">Décembre</option>
            </select>
            <select name="datefin-annee" class="year">
                <?php
                for ($year = 1970; $year <= 2020; $year++) {
                    $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                    echo "<option value=$year $selected>$year</option>";
                }
                ?>
            </select>

            <label for="intitule-experience">Intitulé du poste</label>
            <input type="text" id="intitule" name="intitule" placeholder="Ex:jardinier, vendeur..." value="">

            <label for="entreprise">Nom de l'entreprise</label>
            <input type="text" id="entreprise" name="entreprise" placeholder="Ex: société Dupont" value="">

            <label for="description-exp">Description de votre expérience</label>
            <textarea name="description-exp" id="description-exp" placeholder="Décrivez les particularités du poste (ex: service de 150 couverts), vos responsabilités (ex: encadrement d'une équipe de 5 personnes), vos résultats (ex: augmentation de 5% du chiffre d'affaires)..." cols="30" rows="10"></textarea>

            <h2>Formations</h2>
            <label for="formation-date">Date de fin de la formation</label>
            <select name="formation-date" class="year">
                <?php
                for ($year = 1970; $year <= 2020; $year++) {
                    $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                    echo "<option value=$year $selected>$year</option>";
                }
                ?>
            </select>

            <label for="intitule-formation">Intitulé de la formation</label>
            <input type="text" id="intitule" name="intitule" placeholder="Ex: Développeur web" value="">

            <label for="domaine-formation">Domaine de formation</label>
            <input type="text" id="domaine-formation" name="domaine-formation" placeholder="Ex:Informatique..." value="">

            <h2>Centre d'intérêt</h2>
            <label for="centre-interet">Centre d'intérêt</label>
            <input type="text" id="centre-interet" name="centre-interet" placeholder="Ex: Running, lecture..." value="">
            <input type="text" id="centre-interet" name="centre-interet" placeholder="Ex: Running, lecture..." value="">
            <input type="text" id="centre-interet" name="centre-interet" placeholder="Ex: Running, lecture..." value="">
            <input type="text" id="centre-interet" name="centre-interet" placeholder="Ex: Running, lecture..." value="">

            <h2>Compétences</h2>
            <label for="competence">Compétences</label>
            <input type="text" id="competence" name="competence" placeholder="Ex: Logiciel traitement de texte..." value="">
            <input type="text" id="competence" name="competence" placeholder="Ex: Logiciel traitement de texte..." value="">
            <input type="text" id="competence" name="competence" placeholder="Ex: Logiciel traitement de texte..." value="">
            <input type="text" id="competence" name="competence" placeholder="Ex: Logiciel traitement de texte..." value="">
            <input type="text" id="competence" name="competence" placeholder="Ex: Logiciel traitement de texte..." value="">

            <input type="submit" name="submitted" id="submitted" value="Envoyer">


        </form>

        <div class="createcv-view">

        </div>
    </div>

</body>

</html>