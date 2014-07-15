<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/connexion/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/connexion/connexion.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/connexion/formulaireInscription.css"/>

    <title id="titre"> </title>
</head>

<body>
<div id="fb-root"></div>
<script src="http://localhost/meittopi/controleur/connexion/facebook/api.js"> </script>

<section class="global">
    <nav id="nav">
        <?php include("vue/connexion/navigateur.php"); ?>
    </nav>

    <section id="pageConnection">
        <section id="gauche">
            <?php include("vue/connexion/connexionVia.php"); ?>
        </section>
        <section id="droite">
            <?php include("vue/connexion/formulaireInscription.php"); ?>
        </section>

    </section>


</body>

<script src="http://localhost/meittopi/controleur/connexion/facebook/initialise.js"> </script>


</html>