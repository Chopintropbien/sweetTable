
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/profilDUnePersonne/amis/amis.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/amis/amis.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/amis/personneQuOnRecherche.class.css"/>



    <title id = "titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>



    <section id="partiePrincipale">

        <?php include("../vue/profilDUnePersonne/navigateur/navigateur.php"); ?>

        <section id="gauche">

            <h1>Lauriane Mollier</h1>

            <?php
            include_once('../vue/class/tableau/tableau.class.php');
            include_once('../vue/class/amis/amis.class.php');
            include_once('../vue/class/amis/personneQuOnRecherche.class.php');
            ?>

            <!-- la liste de amis en commun -->
            <h2> Amis en commun </h2>
            <?php
            $tableauAmisEnCommun = new Tableau();
            foreach($liste_amis_en_commun_JSON as $ami_JSON){
                $tableauAmisEnCommun->ajoute(new Amis($ami_JSON));
            }
            $tableauAmisEnCommun->affiche(3, 'amis', 'amisEnCommun');
            ?>


            <!-- la liste des autres amis-->
            <h2> Autres amis </h2>
            <?php
            $tableauAutreAmis = new Tableau();
            foreach($liste_autres_amis_JSON as $ami_JSON){
                $tableauAutreAmis->ajoute(new PersonneQuOnRecherche($ami_JSON));
            }
            $tableauAutreAmis->affiche(2, 'personne', 'autreAmis');
            ?>

            <!-- la liste des personne que suis la personne -->
            <h2> Les personnes que suis <span>Lauriane</span> </h2>
            <?php
            $tableauPersonneSuivis = new Tableau();
            foreach($liste_personne_suivis_JSON as $personne_JSON){
                $tableauPersonneSuivis->ajoute(new PersonneQuOnRecherche($personne_JSON));
            }

            $tableauPersonneSuivis->affiche(2, 'personne', 'personneSuivis');
            ?>


        </section>


    </section>

</body>
</html>
