
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/restaurant/ecrireUneRevue/ecrireUneRevue.css"/>

    <title>
        Acceuil
    </title>

</head>

<body onload="onLoad();">

<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <section id="gauche">
            <!-- titre du restau-->

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

            <div>
                <input type="button" value="Annuler"/>
                <input type="button" value="Sauvegarder"/>
                <input type="button" value="Publier"/>
            </div>
        </section>

        <section id="droite">

        </section>





    </section>

</section>

<!-- pour les etoile -->
<script src="http://localhost/meittopi/controleur/fonctionJS/etoile/dessineDemiEtoileGauche.js"> </script>
<script src="http://localhost/meittopi/controleur/fonctionJS/etoile/dessineDemiEtoileDroite.js"> </script>
<script src="http://localhost/meittopi/controleur/fonctionJS/addEvent.js"> </script>


<script>

    /* couleur des etoiles
     * entre 0.5 et 2 => gold
     * entre 2.5 et 4 => orange
     * entre 4.5 et 5 => red
     */

    var etoiles = document.getElementsByTagName('canvas');

    for(var i = 0; i < etoiles.length; ++i){

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

            for(var j = 0; j < i; ++j){

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
            for(var i = 0; i < etoilesDroites.length; ++i){
                dessineDemiEtoileDroite(etoilesDroites[i], 45, 'transparent');
            }

            var etoilesGauches = document.getElementsByClassName('demiEtoileGauche');
            for(var i = 0; i < etoilesGauches.length; ++i){
                dessineDemiEtoileGauche(etoilesGauches[i], 45, 'transparent');
            }

            // enlever le commentaire
            document.getElementById('commentaire').innerHTML = '';

        });


    }



</script>


</body>
</html>