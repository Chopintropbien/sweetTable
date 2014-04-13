<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/discution/listeCategorieDiscution.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/discution/pageDUneDiscution.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/discution/discutionComplete.class.css"/>


    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <h1 id="ouSePasseLesDiscutions">  </h1>
        <a class="ajous" id="ajous" href="http://localhost/Meittopi/php/vue/menuPrincipal/discution/ajouterDiscution.php">+ Nouvelle discution</a>

            <!-- liste des categorie des discutions-->
        <?php include('../vue/discution/listeCategorieDiscution.php'); ?>

            <!-- affiche la question principal de la discution ainsi que les reponses-->
        <?php

        include_once('../vue/class/discution/discutionComplete.class.php');
        include_once('../vue/class/discution/reponseDiscution.class.php');

        foreach($discutionJSON as $reponseJSON){
            if(count($reponseJSON) == 7){
                $discution = new DiscutionComplete($reponseJSON);
            }
            else{
                $discution->ajoute(new ReponseDiscution($reponseJSON));
            }
        }
        $discution->affiche();

        ?>


    </section>
</section>
</body>