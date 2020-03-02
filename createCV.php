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
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
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
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
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
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
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
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
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
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
            </select>

            <label for="intitule-formation">Intitulé de la formation</label>
            <input type="text" id="intitule" name="intitule" placeholder="Ex: Développeur web" value="">

            <label for="niveau-formation">Niveau de la formation</label>
            <select name="niveau-formation" class="niveau-formation">
                <option value="Non renseigné">Non renseigné</option>
                <option value="Aucune formation scolaire">Aucune formation scolaire</option>
                <option value="Primaire à 4ème">Primaire à 4ème</option>
                <option value="4ème achevée">4ème achevée</option>
                <option value="3ème achevée - 1er années de CAP ou BEP">3ème achevée - 1er années de CAP ou BEP</option>
                <option value="2nd ou 1ère achevée">2nd ou 1ère achevée</option>
                <option value="CAP,BEP ou équivalents">CAP,BEP ou équivalents</option>
                <option value="Bac ou équivalent (diplôme non obtenu)">Bac ou équivalent (diplôme non obtenu)</option>
                <option value="Bac (général, technique ou professionnel) ou équivalent">Bac (général, technique ou professionnel) ou équivalent</option>
                <option value="Bac+2 (BTS, DUT ou équivalents)">Bac+2 (BTS, DUT ou équivalents)</option>
                <option value="Bac+3, Bac+4 (Licence, Maitrise ou équivalents)">Bac+3, Bac+4 (Licence, Maitrise ou équivalents)</option>
                <option value="Bac+5 et plus (Master ou équivalents)">Bac+5 et plus (Master ou équivalents)</option>
            </select>

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