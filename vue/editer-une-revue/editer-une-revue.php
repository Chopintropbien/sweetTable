
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

<section id="body">

    <h1>Chez Jaime</h1>

    <!-- adresse -->

    <aside>
        <address>
            Chemin de Malley, 12 <br/>
            10007 Lausanne
        </address>
        <p> +41 79 198 40 28</p>
    </aside>


    <!-- note -->

    <article>
        <h6>Note: </h6>
        <div>
            <canvas width="22.5" height="45" class="demiEtoileGauche" id="0demiEtoileGauche"></canvas>
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
        <p id="commentaire"></p>
    </article>

    <!-- zone de saisie -->

    <section>
        <h6>Ma revue: </h6>
        <textarea> </textarea>
    </section>

    <!-- question -->

    <h4>Question pour aider les autres utilisateur</h4>
    <ul>
        <li>
            <p> Ce lieu est-il aménagé pour les endicapé</p>
            <input type="radio" name="andicape" id="andicapeOui"/> <label> Oui</label>
            <input type="radio" name="andicape" id="andicapeNon"/> <label> Non</label>
            <input type="radio" name="andicape" id="andicapeSaisPas"/> <label> Je ne sais pas</label>
        </li>

        <li>
            <p> Ce lieu est-il aménagé pour les endicapé</p>
            <input type="radio" name="andicape" id="andicapeOui"/> <label> Oui</label>
            <input type="radio" name="andicape" id="andicapeNon"/> <label> Non</label>
            <input type="radio" name="andicape" id="andicapeSaisPas"/> <label> Je ne sais pas</label>
        </li>

    </ul>

    <!-- button de fin de saisie -->

    <div class="div_annuler_publier">
        <a href="<?php echo $GLOBALS['host'];?>/home.php">Annuler</a>
        <input type="button" value="Publier"/>
    </div>





</section>




</body>

<!-- pour les etoile -->
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoileGauche.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/vue/fonction_annexe/etoile/dessineDemiEtoileDroite.js"> </script>
<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/add_event.js"> </script>


<script>

    /* couleur des etoiles
     * entre 0.5 et 2 => gold
     * entre 2.5 et 4 => orange
     * entre 4.5 et 5 => red
     */

    var etoiles = document.getElementsByTagName('canvas');

    for(var i = 0; etoiles.length > i; ++i){

        //colorie les contours des etoile
        if(etoiles[i].className == 'demiEtoileGauche') dessineDemiEtoileGauche(etoiles[i], 45, 'transparent');
        else if (etoiles[i].className == 'demiEtoileDroite') dessineDemiEtoileDroite(etoiles[i], 45, 'transparent');

        // quand on entre dans la canvas
        addEvent(etoiles[i], 'mouseover', function(){

            // colorer les etoile
            var i = this.id[0];
            var couleur = 'gold';
            if( i == 2 || i == 3 ) couleur = 'orange';
            if( i == 4) couleur = 'red';

            for(var j = 0;  i>j; ++j){

                var demiEtoileGauche = document.getElementById(j + 'demiEtoileGauche');
                dessineDemiEtoileGauche(demiEtoileGauche, 45, couleur);

                var demiEtoileDroite = document.getElementById(j + 'demiEtoileDroite');
                dessineDemiEtoileDroite(demiEtoileDroite, 45, couleur);
            }

            var demiEtoileGauche = document.getElementById(i + 'demiEtoileGauche');
            dessineDemiEtoileGauche(demiEtoileGauche, 45, couleur);

            if(this.className == 'demiEtoileDroite'){
                var demiEtoileDroite = document.getElementById(i + 'demiEtoileDroite');
                dessineDemiEtoileDroite(demiEtoileDroite, 45, couleur);
            }

            // aficher le commentaire
            var commentaire = document.getElementById('commentaire');
            var texte = '';
            switch (i) {
                case '0':
                    if(this.className == 'demiEtoileGauche') texte = 'Plus jamais !';
                    else if (this.className == 'demiEtoileDroite') texte = 'Pas bon !';
                    break;

                case '1':
                    if(this.className == 'demiEtoileGauche') texte = 'Vraiment pas terrible';
                    else if (this.className == 'demiEtoileDroite') texte = 'Peu faire mieux';
                    break;

                case '2':
                    if(this.className == 'demiEtoileGauche') texte = 'Ni plus ni moins ...';
                    else if (this.className == 'demiEtoileDroite') texte = 'Plutôt pas mal !';
                    break;

                case '3':
                    if(this.className == 'demiEtoileGauche') texte = 'Pas mal !';
                    else if (this.className == 'demiEtoileDroite') texte = ' Très Bon !';
                    break;

                case '4':
                    if(this.className == 'demiEtoileGauche') texte = 'Exellent !';
                    else if (this.className == 'demiEtoileDroite') texte = 'Vraiment incroyable !';
                    break;
            }
            commentaire.innerHTML = texte;


        });


        // quand on sort du canvas
        addEvent(etoiles[i], 'mouseout', function(){

            // decolorer toutes les etoile
            var etoilesDroites = document.getElementsByClassName('demiEtoileDroite');
            for(var i = 0; etoilesDroites.length > i; ++i){
                dessineDemiEtoileDroite(etoilesDroites[i], 45, 'transparent');
            }

            var etoilesGauches = document.getElementsByClassName('demiEtoileGauche');
            for(var i = 0; etoilesGauches.length > i; ++i){
                dessineDemiEtoileGauche(etoilesGauches[i], 45, 'transparent');
            }

            // enlever le commentaire
            document.getElementById('commentaire').innerHTML = '';

        });


    }



</script>

</html>


