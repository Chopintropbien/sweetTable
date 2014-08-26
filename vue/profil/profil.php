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
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/restaurant/restaurant.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/revue/revue_d_une_personne.class.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/class/publication/publication_photo.class.css"/>
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
            ?>
            <button id="mise_a_jour">
                Mettre à jour mon profil
            </button>
        </section>


        <article id="editer_info_profil" style="display: none;">
            <form action="" method="post" id="form_mise_a_jour">
                <img src="http://localhost/Meittopi/image/profil_vide.png"/>
                <input type="file"/>

                <ul>
                    <li>
                        <span> <label for="new_name">Nom complet : </label> </span>
                        <span> <input type="text" value="<?php echo $profil_JSON->name;?>" name="new_name" id="new_name"/> </span>
                    </li>
                    <li>
                        <span> <label for="">Ville présent actuellement : </label> </span>
                        <span>
                            <input type="search" value="<?php echo $profil_JSON->location;?>"/>
                            <select>
                                <option> Pays</option>
                            </select>
                        </span>

                    </li>
                    <li>
                        <span> <label for=""> Date de naissance : </label> </span>
                        <span>

                            <?php include('vue/profil/francais.php'); ?>
                           <!-- jour -->
                        <select name="jourDeNaissance" id='jour'>
                            <option value="null"> <?php echo $jour; ?> </option>
                            <?php
                            for($i = 1; $i <= 31; ++$i){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            ?>
                        </select>

                        <!-- mois -->
                         <select name="moisDeNaissance" id='mois'>
                             <option value="null"> <?php echo $mois; ?> </option>
                             <option value="1"> <?php echo $jan; ?> </option>
                             <option value="2"> <?php echo $fev; ?></option>
                             <option value="3"> <?php echo $mars; ?> </option>
                             <option value="4"> <?php echo $avr; ?> </option>
                             <option value="5"> <?php echo $mai; ?> </option>
                             <option value="6"> <?php echo $juin; ?> </option>
                             <option value="7"> <?php echo $juil; ?> </option>
                             <option value="8"> <?php echo $aout; ?> </option>
                             <option value="9"> <?php echo $sep; ?> </option>
                             <option value="10"> <?php echo $oct; ?> </option>
                             <option value="11"> <?php echo $nov; ?> </option>
                             <option value="12"> <?php echo $dec; ?> </option>
                         </select>



                        <!-- annee -->
                        <select name="anneeDeNaissance" id='annee'>
                            <option value="null"> <?php echo $annee; ?> </option>
                            <?php
                            for($i = 2014; $i >= 1900; --$i){
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            ?>
                        </select>

                        <p id="message_check_date"> </p>

                        </span>
                    </li>
                </ul>

               <div class="div_annuler_publier">
                   <input type="button" value="Valider" id="envoie_mise_a_jour"/>
               </div>

            </form>
        </article>

    </section>





    <?php

    // si l'utilsateur a des revue
    if(count($profil_JSON->review_list) > 0){
        include_once('model/get_restaurant.php');
        include_once('vue/class/liste/liste_ac_titre.class.php');
        include_once('vue/class/restaurant/restaurant_basic.class.php');
        include_once('vue/class/revue/revue_d_une_personne.class.php');

        $liste = new Liste_ac_titre('Vos revues');
        foreach($profil_JSON->review_list as $review_JSON){
            $restaurant_JSON = get_restaurant($review_JSON->object->uid, true);
            $liste->ajoute(new Revue_d_une_personne($restaurant_JSON->name, null, $review_JSON->user_match, $review_JSON->note, count($restaurant_JSON->review_list), $restaurant_JSON->cuisine, $review_JSON->object->uid,
                $review_JSON->uid, $review_JSON->title, $review_JSON->contents, $review_JSON->created,
                $review_JSON->photo[0], $review_JSON->photo[1], $review_JSON->photo[2]));
        }
        // ture ou false ce qui change entre une personne qui visite son propre profil(true) ou celui d'une autre personne(false)
        $liste->affiche('revue','revue_d_une_personne', true);
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
?>

<!-- activer la mise a jour -->
<script>
    (function(){
        document.getElementById('mise_a_jour').onclick = function(){
            document.getElementById('profil_section').style.display = 'none';
            document.getElementById('editer_info_profil').style.display = 'block';
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

</html>