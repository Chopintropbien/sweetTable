
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>
    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php
    if(isset($_SESSION['uid']))
        include("vue/navigator/navigator.php");
    else include("vue/connexion/navigator.php");

    ?>
</section>

<section id="body">

    <h1> Conditions d'utilisation </h1>

    <p>
        <mark>Le 1 septembre 2014.</mark> Ces Conditions d'utilisation entrent immédiatement en vigueur pour les utilisateurs qui ouvrent un compte après cette date,
        et entreront en vigueur le 27 decembre 2012 pour les utilisateurs disposant déjà d'un compte.

        <br/>
        <br/>
        Les présentes conditions (les <mark>« Conditions d'utilisation »</mark>) régissent votre accès à et votre utilisation des sites Web et applications mobiles de SweetTable
        liés à ou faisant référence aux présentes Conditions d'utilisation (<mark>« Site »</mark>). En accédant au Site ou en l'utilisant, vous acceptez les présentes Conditions d'utilisation.
    </p>

    <ol>
        <li> <h3>1. <mark>DÉFINITIONS</mark></h3> </li>
        <li>
            <ol>
                <li> <h6> A. <mark>Parties</mark></h6></li>
                <li>
                    <p>
                        Les termes « <mark>vous</mark> » et « <mark>votre</mark> »/« <mark>vos</mark> » vous désignent en tant qu'utilisateur du Site.
                        Un « <mark>utilisateur</mark> » désigne tout individu qui accède au Site, y navigue, le consulte, le reproduit en scraping ou utilise le Site de quelque manière que ce soit.
                        Les termes « <mark>nous</mark> », « <mark>notre</mark> », et « <mark>nos</mark> » font référence à SweetTable.
                    </p>
                </li>
                <li> <h6> B. <mark>Contenu</mark></h6></li>
                <li>
                    <p>
                        Le « <mark>Contenu</mark> » désigne les textes, les images, les photographies, les formats audio et vidéo, les données d'emplacement et toutes les autres formes de données ou de communications.
                        <br/>
                        « <mark>Votre Contenu</mark> » désigne le Contenu que vous envoyez ou transmettez à, via ou dans le cadre du Site, tel que des évaluations, avis, compliments, invitations, enregistrements, messages
                        et informations que vous affichez ou avez affichés publiquement dans le profil de votre compte.
                        <br/>Le « <mark>Contenu Utilisateur</mark> » désigne le Contenu que les utilisateurs envoient ou transmettent à, via ou dans le cadre du Site.
                        <br/>Le « <mark>Contenu Yelp</mark> » désigne le Contenu que nous créons et publions dans le cadre du Site.
                        <br/>Le « <mark>Contenu Tiers</mark> » désigne le Contenu provenant de parties autres que SweetTable ou ses utilisateurs et publié dans le cadre du Site.
                        <br/>Le « <mark>Contenu du Site</mark> » désigne l'ensemble du Contenu publié dans le cadre du Site, y compris Votre Contenu, le Contenu Utilisateur, le Contenu Tiers et le Contenu SweetTable.
                    </p>
                </li>
            </ol>



        </li>

    </ol>



</section>




</body>

</html>

