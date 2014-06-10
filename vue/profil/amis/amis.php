<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/profil/amis/amis.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeAcTitre.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/amis/amis.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/amis/personneQuOnRecherche.class.css"/>


    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <?php include("../vue/profil/navigateur/navigateur.php"); ?>

        <section id="section">
            <?php include_once('../vue/profil/amis/francais.php');?>
            <div>
                <input type="text" placeholder=" <?php echo $rechercherPersonne; ?> " id="rechercherPersonne"/>
                ou
                <input type="button" value="<?php echo $inviterAmis; ?>" id="inviterAmis"/>
            </div>



            <?php
            include_once('../vue/class/tableau/tableau.class.php');
            include_once('../vue/class/amis/amis.class.php');
            include_once('../vue/class/amis/personneQuOnRecherche.class.php');
            ?>

            <!-- liste des amis -->
            <h2> Mes amis </h2>
            <?php
            $tableauAmis = new Tableau();
            foreach($liste_amis_utilisateur as $ami_JSON){
                $tableauAmis->ajoute(new Amis($ami_JSON));
            }
            $tableauAmis->affiche(3, 'amis', 'mesAmis');
            ?>


            <!-- liste des gens que la personne suis -->
            <h2> Les peronnes que je suis </h2>
            <?php
            $tableauPersonneSuivis = new Tableau();
            foreach($liste_personne_que_suit_l_utilisateur as $ami_JSON){
                $tableauPersonneSuivis->ajoute(new PersonneQuOnRecherche($ami_JSON));
            }
            $tableauPersonneSuivis->affiche(2, 'personne', 'personnesuivis');
            ?>

            <!-- liste des gens qui suivent l'utilisateur -->
            <h2> Les personnes qui me suivent </h2>
            <?php
            $tableauPersonneQuiMeSuivent = new Tableau();
            foreach($liste_personne_qui_suivent_l_utilisateur as $personne_JSON){
                $tableauPersonneQuiMeSuivent->ajoute(new PersonneQuOnRecherche($personne_JSON));
            }

            $tableauPersonneQuiMeSuivent->affiche(2, 'personne', 'personneQuiMeSuivent');
            ?>


        </section>


    </section>



</body>
</html>



