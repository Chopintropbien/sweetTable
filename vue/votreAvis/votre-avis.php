<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/votreAvis/votre-avis.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/propositionAmelioration/propositionAmelioration.class.css"/>

    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <?php
        include_once('vue/class/propositionAmelioration/propositionAmelioration.class.php');
        include_once('vue/class/liste/liste.class.php');

        $liste = new Liste();
        foreach($listeAmeliorationJSON as $ameliorationJSON){
            $liste->ajoute(new PropositionAmelioration($ameliorationJSON));
        }
        $liste->affiche('listeAmelioration', 'amelioration');

        ?>

    </section>
</section>
</body>