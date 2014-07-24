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
            <article>

                <span id="prevSpan" class="0"> < </span> <!-- pour savoir quel img est afficher-->

                <img src="http://localhost/Meittopi/image/profil_vide.png" id="0slide"/>
                <img src="" id="1slide" style="display:none;"/>
                <img src="http://localhost/Meittopi/image/profil_vide.png" id="2slide" style="display:none;"/>
                <img src="" id="3slide" style="display:none;"/>
                <img src="http://localhost/Meittopi/image/profil_vide.png" id="4slide" style="display:none;"/>
                <img src="" id="5slide" style="display:none;"/>

                <span id="suivSpan"> > </span>

            </article>

        </section>
        <section id="droite">



            <h1> Connexion via :</h1>
            <div class="fb-login-button" id="facebook" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"> </div>
            <?php include("vue/connexion/formulaireInscription.php"); ?>
        </section>

    </section>


</body>

<script src="http://localhost/meittopi/controleur/connexion/facebook/initialise.js"> </script>
<script src="http://localhost/meittopi/controleur/connexion/slide.js"> </script>



</html>