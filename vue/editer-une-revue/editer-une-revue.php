
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


<form id="body" method="post" action="
<?php
// si c'est pour poster une revue, redirection vers la page de write une revue
// si c'est pour editer une revue, redirection vers la page de profil
if($revue_JSON)  echo 'profil.php';
else echo 'write-a-review.php';
?>
">


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
        <input type="hidden" value="<?php if($revue_JSON->user_match) echo $revue_JSON->user_match; else echo 0;?>" id="choix_note" name="note"/>
        <input type="hidden" value="<?php echo $_GET['uid']?>" name="uid_restau"/>
        <input type="hidden" value="<?php echo $revue_JSON->uid?>" name="uid_revue"/>

        <p id="commentaire"></p>
    </article>

    <!-- zone de saisie -->

    <section>
        <h6>Mon titre: </h6>
        <input type="text" name="titre" id="titre" value="<?php if($revue_JSON) echo $revue_JSON->title?>"/>

        <h6>Ma revue: </h6>
        <textarea name="revue" id="revue"><?php if($revue_JSON) echo $revue_JSON->contents?></textarea>

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
    <?php if(! $revue_JSON->uid) include('vue/editer-une-revue/question.php');?>

    <!-- button de fin de saisie -->

    <div class="div_annuler_publier">
        <a href="<?php echo $GLOBALS['host'];?>/home.php">Annuler</a>
        <input type="button" value="Publier" id="button_revue"/>
    </div>





</form>




</body>

<!-- pour les etoile -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoileGauche.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoileDroite.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/add_event.js"> </script>

<!-- verification remplissage du formulaire -->
<script src="<?php echo $GLOBALS['host'];?>/vue/editer-une-revue/check_form.js"> </script>

<!-- Choisir la note -->
<script src="<?php echo $GLOBALS['host'];?>/vue/editer-une-revue/choisir_note.js"> </script>

<!-- gestion des phtot -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/affiche_img_select.js"></script>
<script>
    affiche_img_select('1photo_input', '1img_tag');
    affiche_img_select('2photo_input', '2img_tag');
    affiche_img_select('3photo_input', '3img_tag');
</script>

<?php
    // si c'est editer une revue, alors activer la coloration des etoile fasse a l'input hidden qui contient la note
    if($_GET['uid_revue']){
        ?>
        <script>
            document.getElementById('div_etoiles').onmouseout();
        </script>
        <?php
    }
?>

</html>


