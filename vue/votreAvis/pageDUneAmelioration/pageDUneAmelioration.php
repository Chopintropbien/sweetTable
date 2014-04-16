<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/votreAvis/pageDUneAmelioration/pageDUneAmelioration.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/liste.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/propositionAmelioration/ameliorationComplete.class.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/propositionAmelioration/commentaireAmelioration.class.css"/>

    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <!-- liste des amelioration -->
        <?php
        include_once('../vue/class/propositionAmelioration/ameliorationComplete.class.php');

        foreach($ameliorationCompleteJSON as $elementAmelioration){
           $amelioration = new AmeliorationComplete($elementAmelioration);
        }
        $amelioration->affiche('');

        ?>

        <!-- commentaire amelioration -->
        <?php
        include_once('../vue/class/liste/liste.class.php');
        include_once('../vue/class/propositionAmelioration/commentaireAmelioration.class.php');

        $liste = new Liste();
        foreach($listeCommentaireJSON as $commentaireJSON){
            $liste->ajoute(new CommentaireAmelioration($commentaireJSON));
        }
        $liste->affiche('listeCommentaire', 'commentaireAmelioration');

        ?>

    </section>
</section>
</body>