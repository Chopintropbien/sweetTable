<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/profil/profil.css"/>

    <?php
    if(count($profil_JSON->review_list) > 0){
        // deja fait des revue
        ?>

        <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/liste/liste.class.css"/>
        <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/revue/publication_revue.class.css"/>
        <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/publication/publication.class.css"/>
        <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/publication/publication_photo.class.css"/>
        <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/modifiable/modifiable.class.css"/>

    <?php
    }
    else {
    ?>
        <!-- pas encore ecrit de revue  -->
        <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/slide_presentation/js-image-slider.css" type="text/css" />
    <?php
    }
    ?>


    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/profil/profil.class.css"/>



    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<section id="body">



    <section>

        <section id="profil_section">
            <?php

            include_once('vue/class/profil/profil.class.php');
            $profil = new Profil($profil_JSON);
            $profil->affiche('profil');

            // si c'est le propre profil de l'utilisateur
            if($profil_user){
                echo '<button id="mise_a_jour"> Mettre à jour mon profil </button>';
            }
            ?>
        </section>

        <?php
        // si c'est le propre profil de l'utilisateur
        if($profil_user){
            include('vue/ptofil/editer_info.php');
        }
        ?>


    </section>





    <?php

    // si l'utilsateur a des revue
    if(count($profil_JSON->review_list) > 0){

        include_once('vue/class/liste/liste_ac_titre.class.php');
        include_once('vue/class/modifiable/modifiable.class.php');
        include_once('vue/class/publication/publication.class.php');
        include_once('vue/class/revue/publication_revue.class.php');

        include_once('model/get_revue.php');

        if($profil_user) $titre = 'Vos revues';
        else $titre = 'Ses revues';
        $liste = new Liste_ac_titre($titre);

        foreach($profil_JSON->review_list as $revue){
            $publication_revue = new Publication_Revue('', '', '', $revue->created,
                $revue->object->name, $revue->object->uid, $revue->title, $revue->user_match, $revue->contents,
                $revue->picture[0]->thumbnail, $revue->picture[0]->thumbnail, $revue->picture[0]->thumbnail);

            if($profil_user){
                $liste->ajoute(new Modifiable($publication_revue, $GLOBALS['host'] . '/editer-une-revue.php?uid='.$revue->object->uid.'&uid_revue='.$revue->uid));
            }
            else $liste->ajoute($publication_revue);
        }
        $liste->affiche('revue','publication', false);

    }

    // si les utlisateur n'en ont pas
    else {
        ?>

        <article id="pas_encore_revue">
            <h2> Vous n'avez pas encore écrit de revue !</h2>
            <p>
                SweetTable ne peut pas vous recommender des restaurants que vous aimerez sans que vous ayez écrit de revues:
                celle-ci sont <mark>indispensable!</mark>
                <br/><br/>
                Nous vous demandons d'écrire un minimum de <mark>10 revues</mark>  pour que le systeme de recommendation puisse correctement
                fonctionner.
                <br/>Pas besoin d'écrire un long texte, la note est suffisante.
            </p>
            <div> <a class="important_button" href="<?php echo $GLOBALS['host'];?>/write-a-review.php"> Ecrire une revue </a> </div>


            <?php include('vue/slide_presentation/slide_presentation.php');?>

        </article>

        <?php
    }

    ?>




</section>

</body>




<?php
if(count($profil_JSON->review_list) > 0){
    ?>
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineEtoile.js"> </script>
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoile.js"> </script>
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessine_note.js"></script>

    <script>
        dessine_note();
    </script>
    <?php
}

// si c'est le propre profil de l'utilisateur
if($profil_user){
?>
    <!-- activer la mise a jour et annuler-->
    <script>
        (function(){
            document.getElementById('mise_a_jour').onclick = function(){
                document.getElementById('profil_section').style.display = 'none';
                document.getElementById('editer_info_profil').style.display = 'block';
            }

            document.getElementById('annuler_profil').onclick = function(){
                document.getElementById('profil_section').style.display = 'block';
                document.getElementById('editer_info_profil').style.display = 'none';
            }

        })();
    </script>

    <!-- checker la coerrance de la date de naisance avant l'envoie de la mise a jour -->
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/coordonance_date_naissance.js"></script>
    <script>
        (function(){
            document.getElementById('envoie_mise_a_jour').onclick = function(){

                var jour = document.getElementById('jour');
                var mois = document.getElementById('mois');
                var annee = document.getElementById('annee');
                var message = document.getElementById('message_check_date');

                var moisVal = mois.options[mois.selectedIndex].value;
                var jourVal = jour.options[jour.selectedIndex].value;
                var anneeVal = annee.options[annee.selectedIndex].value;

                if( jourVal != 'null' || moisVal != 'null' || anneeVal != 'null'){
                    if(coordonance_date_naissance(jour, mois, annee, message)){
                        document.getElementById('form_mise_a_jour').submit();
                    }
                }
                else if( jourVal == 'null' || moisVal == 'null' || anneeVal == 'null'){
                    document.getElementById('form_mise_a_jour').submit();
                }
            }
        })();
    </script>

    <!-- gestion des phtot -->
    <script src="<?php echo $GLOBALS['host'];?>/vue/ajouter_restaurant/gestion_photo.js"></script>
    <script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/affiche_img_select.js"></script>
    <script>
        affiche_img_select('photo_profil_input', 'photo_profil_img');
    </script>
<?php
}
?>



</html>