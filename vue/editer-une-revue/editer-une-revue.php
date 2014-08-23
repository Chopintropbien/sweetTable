
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/editer-une-revue/editer-une-revue.css"/>

    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php include("vue/navigator/navigator.php"); ?>
</section>

<form id="body" method="post" action="">


    <h1><?php echo $restaurantJSON->name?></h1>

    <!-- adresse -->
    <aside>
        <address>
            Chemin de Malley, 12 <br/>
            10007 Lausanne
        </address>
        <p> <?php echo $restaurantJSON->Phone_number?></p>
    </aside>


    <!-- note -->

    <article>
        <h6>Note: </h6>
        <div id="div_etoiles">
            <canvas width="22.5" height="45" class="demiEtoileGauche" id="0demiEtoileGauche" ></canvas>
            <canvas width="22.5" height="45" class="demiEtoileDroite" id="0demiEtoileDroite"></canvas>

            <canvas width="22.5" height="45" class="demiEtoileGauche" id="1demiEtoileGauche"></canvas>
            <canvas width="22.5" height="45" class="demiEtoileDroite" id="1demiEtoileDroite"></canvas>

            <canvas width="22.5" height="45" class="demiEtoileGauche" id="2demiEtoileGauche"></canvas>
            <canvas width="22.5" height="45" class="demiEtoileDroite" id="2demiEtoileDroite"></canvas>

            <canvas width="22.5" height="45" class="demiEtoileGauche" id="3demiEtoileGauche"></canvas>
            <canvas width="22.5" height="45" class="demiEtoileDroite" id="3demiEtoileDroite"></canvas>

            <canvas width="22.5" height="45" class="demiEtoileGauche" id="4demiEtoileGauche"></canvas>
            <canvas width="22.5" height="45" class="demiEtoileDroite" id="4demiEtoileDroite"></canvas>
        </div>
        <input type="hidden" value="0" id="choix_note" name="note"/>
        <input type="hidden" value="<?php echo $_GET['uid']?>" name="uid_restau"/>
        <p id="commentaire"></p>
    </article>

    <!-- zone de saisie -->

    <section>
        <h6>Mon titre: </h6>
        <input type="text" name="titre"/>

        <h6>Ma revue: </h6>
        <textarea name="revue"> </textarea>
    </section>


    <!-- section photo -->
    <section id="photos">

        <div>
            <img src="http://localhost/Meittopi/image/profil_vide.png" id="1img_tag"/>
            <input type="file" name="1photo" id="1photo_input"/>
        </div>

        <div>
            <img src="http://localhost/Meittopi/image/profil_vide.png"  id="2img_tag"/>
            <input type="file" name="2photo" id="2photo_input"/>
        </div>

        <div>
            <img src="http://localhost/Meittopi/image/profil_vide.png" id="3img_tag"/>
            <input type="file" name="3photo" id="3photo_input"/>
        </div>

    </section>



    <!-- question -->

    <h4>Question pour aider les autres utilisateur</h4>
    <ul>


        <?php
        // les questions a afficher
        $i = rand(0, 19);

        $j = rand(0, 19);
        while($j == $i) $j = rand(0, 19);

        $k = rand(0, 19);
        while($k == $i || $k == $j) $k = rand(0, 19);

        $l = rand(0, 19);
        while($l == $i || $l == $j || $l == $k) $l = rand(0, 19);

        ?>

        <li <?php $nb = 0; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?> >
            <p> Ce restaurant propose-t-il des plats à emporter ? </p>
            <input type="radio" name="aEmporter" value="oui"/> <label> Oui</label>
            <input type="radio" name="aEmporter" value="non"<label> Non</label>
            <input type="radio" name="aEmporter" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 1; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant a-t-il un buffet ? </p>
            <input type="radio" name="buffet" value="oui"/> <label> Oui</label>
            <input type="radio" name="buffet" value="non"<label> Non</label>
            <input type="radio" name="buffet" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 2; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant a-t-il un buffet à volonté ? </p>
            <input type="radio" name="buffetVolonte" value="oui"/> <label> Oui</label>
            <input type="radio" name="buffetVolonte" value="non"<label> Non</label>
            <input type="radio" name="buffetVolonte" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 3; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant propose-t-il un large choix de bière et de vin?</p>
            <input type="radio" name="BiereVin" value="oui"/> <label> Oui</label>
            <input type="radio" name="BiereVin" value="non"<label> Non</label>
            <input type="radio" name="BiereVin" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 4; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-t-il sous form de café concert ? </p>
            <input type="radio" name="CafeConcert" value="oui"/> <label> Oui</label>
            <input type="radio" name="CafeConcert" value="non"<label> Non</label>
            <input type="radio" name="CafeConcert" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 5; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant accepte-t-il les cartes de crédit ? </p>
            <input type="radio" name="carteCredit" value="oui"/> <label> Oui</label>
            <input type="radio" name="carteCredit" value="non"<label> Non</label>
            <input type="radio" name="carteCredit" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 6; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-t-il adapté aux enfants en bas age ? </p>
            <input type="radio" name="enfantBasAge" value="oui"/> <label> Oui</label>
            <input type="radio" name="enfantBasAge" value="non"<label> Non</label>
            <input type="radio" name="enfantBasAge" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 7; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-il adapté aux grande occasion ? </p>
            <input type="radio" name="grandeOccasion" value="oui"/> <label> Oui</label>
            <input type="radio" name="grandeOccasion" value="non"<label> Non</label>
            <input type="radio" name="grandeOccasion" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 8; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-il ouvert jusqu'au bout de la nuit ? </p>
            <input type="radio" name="boutDeLaNuit" value="oui"/> <label> Oui</label>
            <input type="radio" name="boutDeLaNuit" value="non"<label> Non</label>
            <input type="radio" name="boutDeLaNuit" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 9; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant fait-t-il des livraisons à domicile ? </p>
            <input type="radio" name="livraison" value="oui"/> <label> Oui</label>
            <input type="radio" name="livraison" value="non"<label> Non</label>
            <input type="radio" name="livraison" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 10; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-il aménagé pour les personnes à mobilité réduite ?</p>
            <input type="radio" name="mobiliteReduite" value="oui"/> <label> Oui</label>
            <input type="radio" name="mobiliteReduite" value="non"<label> Non</label>
            <input type="radio" name="mobiliteReduite" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 11; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant a-t-il un beau panorama ?</p>
            <input type="radio" name="panorama" value="oui"/> <label> Oui</label>
            <input type="radio" name="panorama" value="non"<label> Non</label>
            <input type="radio" name="panorama" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 12; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant propose-t-il des petits-déjeuners ou des brunchs ?</p>
            <input type="radio" name="mobiliteReduite" value="oui"/> <label> Oui</label>
            <input type="radio" name="mobiliteReduite" value="non"<label> Non</label>
            <input type="radio" name="mobiliteReduite" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 13; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-il adapté aux groupes ? </p>
            <input type="radio" name="groupes" value="oui"/> <label> Oui</label>
            <input type="radio" name="groupes" value="non"<label> Non</label>
            <input type="radio" name="groupes" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 14; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-il adapté aux repas d'affaire ? </p>
            <input type="radio" name="repasAffaires" value="oui"/> <label> Oui</label>
            <input type="radio" name="repasAffaires" value="non"<label> Non</label>
            <input type="radio" name="repasAffaires" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 15; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant est-il romantique ? </p>
            <input type="radio" name="romantique" value="oui"/> <label> Oui</label>
            <input type="radio" name="romantique" value="non"<label> Non</label>
            <input type="radio" name="romantique" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 16; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant accepte-t-il les réservation ? </p>
            <input type="radio" name="reservation" value="oui"/> <label> Oui</label>
            <input type="radio" name="reservation" value="non"<label> Non</label>
            <input type="radio" name="reservation" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 17; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant possède-t-il une télévision ? </p>
            <input type="radio" name="tele" value="oui"/> <label> Oui</label>
            <input type="radio" name="tele" value="non"<label> Non</label>
            <input type="radio" name="tele" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 18; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant possède-t-il une terrasse extérieur ? </p>
            <input type="radio" name="terrasse" value="oui"/> <label> Oui</label>
            <input type="radio" name="terrasse" value="non"<label> Non</label>
            <input type="radio" name="terrasse" value="bof"<label> Je ne sais pas</label>
        </li>

        <li <?php $nb = 19; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
            <p> Ce restaurant propose-t-il une connexion wifi ? </p>
            <input type="radio" name="terrasse" value="oui"/> <label> Oui</label>
            <input type="radio" name="terrasse" value="non"<label> Non</label>
            <input type="radio" name="terrasse" value="bof"<label> Je ne sais pas</label>
        </li>


    </ul>

    <!-- button de fin de saisie -->

    <div class="div_annuler_publier">
        <a href="<?php echo $GLOBALS['host'];?>/home.php">Annuler</a>
        <input type="submit" value="Publier"/>
    </div>





</form>




</body>

<!-- pour les etoile -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoileGauche.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoileDroite.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/add_event.js"> </script>

<!-- Choisir la note -->
<script src="<?php echo $GLOBALS['host'];?>/vue/editer-une-revue/choisir_note.js"> </script>

<!-- gestion des phtot -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/affiche_img_select.js"></script>
<script>
    affiche_img_select('1photo_input', '1img_tag');
    affiche_img_select('2photo_input', '2img_tag');
    affiche_img_select('3photo_input', '3img_tag');
</script>

</html>


