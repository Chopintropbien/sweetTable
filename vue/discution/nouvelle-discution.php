<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

    <link rel="stylesheet" href="http://localhost/meittopi/vue/discution/listeCategorieDiscution.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/discution/nouvelle-discution.css"/>



    <title id="titre">  </title>
</head>

<body>
<section class="global">
    <nav id="nav">
        <?php include("../vue/navigateur/navigateur.php"); ?>
    </nav>

    <section id="partiePrincipale">

        <!-- liste des categorie des discutions-->
        <?php include('../vue/discution/listeCategorieDiscution.php'); ?>


        <section id="nouvelle-discution">


            <input type="text" placeholder="Titre de la discution"/>

            <textarea placeholder="Question, commentaire, remarque, ...">  </textarea>

            <select name="cathegorie">
                <option value="cathegorie"> Cathégorie</option>
                <!-- TODO: a rajouter les cathégories -->
            </select>

        </section>

        <div id="button">
            <p> Annuler</p>
            <input type="button" value="Publier"/>
        </div>


    </section>
</section>
</body>