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





            <!-- liste des amis -->
                <?php
                    include_once('../vue/class/liste/listeAcTitre.class.php');
                    include_once('../vue/class/amis/amis.class.php');

                    $liste = new ListeAcTitre($mesAmis);
                    foreach($liste_amis_utilisateur as $ami){
                        $liste->ajoute(new Amis($ami));
                    }
                    $liste->affiche('listeAmisSection', 'ami');
                ?>



            <!-- liste des gens que la personne suis -->
                <?php
                    include_once('../vue/class/liste/listeAcTitre.class.php');
                    include_once('../vue/class/amis/amis.class.php');

                    $liste = new ListeAcTitre($personneQueJeSuit);
                    foreach($liste_personne_que_suit_l_utilisateur as $personne_que_suit_l_utilisateur){
                        $liste->ajoute(new Amis($personne_que_suit_l_utilisateur));
                    }
                    $liste->affiche('listeGensSuivisSection', 'ami');
                ?>

			<!-- liste des gens qui suivent l'utilisateur -->
               <?php
                    include_once('../vue/class/liste/listeAcTitre.class.php');
                    include_once('../vue/class/amis/amis.class.php');

                    $liste = new ListeAcTitre($personneQuiMeSuive);
                    foreach($liste_personne_qui_suivent_l_utilisateur as $personne_qui_suit_l_utilisateur){
                        $liste->ajoute(new Amis($personne_qui_suit_l_utilisateur));
                    }
                    $liste->affiche('listePersonneQuiNousSuis', 'ami');
                ?>

        </section>


    </section>

</body>
</html>



