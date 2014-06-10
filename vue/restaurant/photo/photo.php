
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/restaurant/photo/photo.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/class/photo/photoDeLAuteur.class.css"/>





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

        <a href="http://localhost/Meittopi/php/vue/menuPrincipal/profil/ajouterListe.php"> <h6 class="ajous" id = "ajous"> + ajouter des photo</h6> </a>

        <div>
            <input type="button" value="Préc"/>
            <p> <span> 11</span> of <span>16</span></p>
            <input type="button" value="Suiv"/>
        </div>

        <section>
            <div>
                <img src="http://localhost/Meittopi/image/profil_vide.png"/>
            </div>


            <article>
                    <div>
                        <img src="http://localhost/Meittopi/image/profil_vide.png"/>
                        <p>Cette photo à été posté par <a>Andreï Kucharavy</a></p>
                    </div>

                    <h4>Cette phtot est-elle ?</h4>

                    <ul>
                        <li>
                            <input type="checkbox" name="util" id="util"/>
                            <label for="util"> Utile </label>
                        </li>

                        <li>
                            <input type="checkbox" name="jolie" id="jolie"/>
                            <label for="jolie"> Jolie </label>
                        </li>

                        <li>
                            <input type="checkbox" name="representative" id="representative"/>
                            <label for="representative"> Utile </label>
                        </li>
                    </ul>

                    <input type="checkbox" name="couverture" id="couverture"/>
                    <label for="couverture"> Marquer comme photo de couverture </label>


            </article>

        </section>




        <?php
        include_once('../vue/class/tableau/tableau.class.php');
        include_once('../vue/class/photo/photoDeLAuteur.class.php');

        $tableauPhoto = new Tableau();
        foreach($liste_photo_JSON as $photo_JSON){
            $tableauPhoto->ajoute(new PhotoDeLAuteur($photo_JSON));
        }

        $tableauPhoto->affiche(5, 'photoDeLAuteur', 'table');

        ?>


    </section>

</section>


</body>
</html>