
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/template/template.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/navigator/navigator.css"/>
    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/connexion/navigator.css"/>

    <link rel="stylesheet" href="<?php echo $GLOBALS['host'];?>/vue/termes_et_conditions/termes_et_conditions.css"/>
    <title> SweetTable </title>
</head>

<body>

<section id="header">
    <?php
    if(isset($_SESSION['uid'])){
        include("vue/navigator/navigator.php");
        affiche_nav();
    }
    else include("vue/connexion/navigator.php");

    ?>
</section>

<section id="body">

    <h1> Conditions d'utilisation </h1>

    <p>
        <mark>Le 1 septembre 2014.</mark> Ces Conditions d'utilisation entrent immédiatement en vigueur pour les utilisateurs qui ouvrent un compte après cette date,
        et entreront en vigueur le 27 decembre 2012 pour les utilisateurs disposant déjà d'un compte.

        <br/>
        Les présentes conditions (les <mark>« Conditions d'utilisation »</mark>) régissent votre accès à et votre utilisation des sites Web et applications mobiles de SweetTable
        liés à ou faisant référence aux présentes Conditions d'utilisation (<mark>« Site »</mark>). En accédant au Site ou en l'utilisant, vous acceptez les présentes Conditions d'utilisation.
    </p>

    <ol>
        <li> <h3>DÉFINITIONS</h3> </li>
        <li>
            <ol>
                <li> <h6>Parties</h6></li>
                <li>
                    <p>
                        Les termes « <mark>vous</mark> » et « <mark>votre</mark> »/« <mark>vos</mark> » vous désignent en tant qu'utilisateur du Site.
                        Un « <mark>utilisateur</mark> » désigne tout individu qui accède au Site, y navigue, le consulte, le reproduit en scraping ou utilise le Site de quelque manière que ce soit.
                        Les termes « <mark>nous</mark> », « <mark>notre</mark> », et « <mark>nos</mark> » font référence à SweetTable.
                    </p>
                </li>
                <li> <h6>Contenu</h6></li>
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



        <li> <h3>MODIFICATIONS APPORTÉES AUX CONDITIONS D'UTILISATION</h3> </li>
        <li>
            <p>
                Nous nous réservons le droit de modifier les Conditions d'utilisation de temps en temps.
                Vous trouverez ici la version la plus récente des présentes Conditions d'utilisation. Vous comprenez et convenez que votre accès à et votre utilisation du Site sont régis par les Conditions d'utilisation en
                vigueur au moment de votre accès à ou votre utilisation du Site. En cas de modifications importantes apportées aux présentes Conditions d'utilisation, nous vous informerons par courriel ou en publiant
                un avis sur le Site avant la date d’entrée en vigueur des modifications. Nous préciserons également en haut de page la date des dernières modifications. Nous recommandons de consulter régulièrement ces
                Conditions d'utilisation car vous êtes tenu de vous conformer à la version modifiée la plus récente. Toute modification de ce type entrera en vigueur lorsque nous publierons les nouvelles Conditions d'utilisation.
                <mark>Vous comprenez et convenez que votre accès suivi au Site ou votre utilisation de ce dernier suite à la date d'entrée en vigueur des modifications apportées aux Conditions d'utilisation implique votre acceptation de la modification.</mark>
            </p>
        </li>

        <li> <h3>TRADUCTION</h3> </li>
        <li>
            <p>
                Nous sommes susceptibles de traduire ces Conditions d'utilisation en langues étrangères à des fins de commodité. Toutefois, la version française de ce document régit vos relations avec SweetTable,
                et toute divergence entre les différentes versions sera résolue en faveur de la version française.
            </p>
        </li>

        <li> <h3>UTILISATION DU SITE</h3> </li>
        <li>
            <ol>
                <li> <h6>Admissibilité</h6></li>
                <li>
                    <p>
                        Pour accéder au Site ou l'utiliser, vous devez avoir au moins 18 ans et disposer du pouvoir et de l'autorité nécessaires pour accepter les présentes Conditions d'utilisation.
                        Vous ne pouvez accéder à ce Site ou l'utiliser si vous êtes notre concurrent ou si nous vous avons préalablement banni du Site ou fermé votre compte.
                    </p>
                </li>

                <li> <h6>Permission d'utiliser le Site</h6></li>
                <li>
                    <p>
                        Nous vous accordons la permission d'utiliser le Site conformément aux restrictions énoncées dans les présentes Conditions d'utilisation.
                        Vous utilisez le Site à vos risques et périls, notamment celui de vous trouver exposé à un Contenu injurieux, indécent, erroné, choquant ou autrement inadéquat.
                    </p>
                </li>

                <li> <h6>Disponibilité du Site</h6></li>
                <li>
                    <p>
                        Le Site pourra être modifié, mis à jour, interrompu, suspendu ou arrêté à tout moment sans notification ni responsabilité envers vous.
                    </p>
                </li>

                <li> <h6>Comptes d'utilisateurs</h6></li>
                <li>
                    <p>
                        Vous devez créer un compte et fournir certaines informations vous concernant afin d'utiliser certaines des fonctionnalités offertes à travers le Site.
                        Vous êtes responsable de la protection de la confidentialité du mot de passe de votre compte.
                        Vous êtes également responsable de toutes les activités survenant sur votre compte ou associées à ce dernier.
                        Vous consentez à nous avertir immédiatement de toute utilisation non autorisée de votre compte.
                        Nous nous réservons le droit de fermer votre compte à tout moment, pour une raison quelconque ou sans raison.

                        <br/><br/>
                        Votre compte est exclusivement réservé à votre usage personnel et non commercial.
                        Lors de la création de votre compte, nous vous demandons de fournir des informations exhaustives et exactes à votre sujet afin de vous donner de la crédibilité en tant que participant au Site.
                        Vous n'usurperez l'identité d'aucune personne physique ou morale (par exemple en usurpant l'identité d'un personnage célèbre ou de votre voisin),
                        ne créerez de compte pour aucune autre personne que vous-même, ne fournirez aucune adresse électronique dont vous ne seriez pas propriétaire,
                        ni ne créerez plusieurs comptes. Si vous utilisez un pseudonyme, veuillez remarquer que les autres pourront quand même vous identifier si, par exemple,
                        vous insérez des informations d'identification dans vos avis, utilisez les mêmes informations de compte sur d'autres sites ou autorisez d'autres sites à partager
                        les informations vous concernant avec Yelp.

                        <!-- TODO: Pour plus d'informations, veuillez lire notre Charte de confidentialité. -->
                    </p>
                </li>

                <!--
                <li> <h6>Communications en provenance de SweetTable et d'autres Utilisateurs</h6></li>
                <li>
                    <p>
                        En créant un compte, vous acceptez de recevoir certaines communications dans le cadre du Site. Par exemple, vous pourrez recevoir des compliments ou des demandes d'amis en provenance d'autres Utilisateurs.
                        Vous recevrez également notre lettre d'information hebdomadaire concernant les événements survenant dans votre quartier.
                        Vous pouvez décider de ne plus recevoir les communications non essentielles en cliquant ici.
                    </p>
                </li>
                -->

            </ol>
        </li>


        <li> <h3> CONTENU</h3> </li>
        <li>
            <ol>
                <li> <h6>Responsabilité à l'égard de Votre Contenu</h6></li>
                <li>
                    <p>
                        Vous êtes seul responsable de Votre Contenu qui, une fois publié, ne peut pas toujours être retiré. Vous assumez tous les risques associés à Votre Contenu, y compris la dépendance de quiconque de sa qualité,
                        son exactitude ou sa fiabilité, ou encore toute divulgation par vos soins dans Votre Contenu d'informations permettant de vous identifier.
                        Vous déclarez que vous êtes propriétaire de Votre Contenu tel qu'il est décrit dans les présentes, ou que vous êtes en possession des autorisations nécessaires pour l'utiliser
                        et pour permettre son utilisation. Vous n'insinuerez pas que Votre Contenu est d'une quelconque manière sponsorisé ou approuvé par SweetTable.
                        <br/> <br/>
                        Vous êtes susceptible d'engager votre responsabilité si, par exemple, Votre Contenu contient des éléments erronés, intentionnellement trompeurs ou diffamatoires ;
                        s'il est en violation avec les droits d'un tiers, y compris tous droits d'auteur, marques de commerce, brevets, secrets de fabrique,
                        droits moraux, droits à la vie privée, droits de publicité, ou tout autre droit de propriété intellectuelle ou industrielle ;
                        s'il contient des éléments illicites, y compris des propos haineux à caractère illégal ou de la pornographie ;
                        s'il exploite ou porte autrement préjudice à des personnes mineures ; ou encore s'il enfreint ou encourage la violation de toute loi ou règlementation.
                    </p>
                </li>

                <li> <h6>Notre droit d'utilisation de Votre Contenu</h6></li>
                <li>
                    <p>
                        Il se peut que nous utilisions Votre Contenu de différentes façons, y compris pour le publier, en modifier le format,
                        l'incorporer à des publicités ou autres documents, créer des œuvres dérivées de celui-ci, le mettre en valeur, le distribuer, et permettre à d'autres d'agir de même
                        sur leurs sites Web et plates-formes médiatiques (« <mark> Autres médias </mark>»). Ainsi, par les présentes, vous nous accordez de façon irrévocable
                        les droits d'utilisation de Votre Contenu à toutes fins, ces droits étant internationaux, perpétuels, non exclusifs, exempts de redevance,
                        pouvant faire l'objet d'une sous-licence, cessibles et transférables.
                        Veuillez noter que vous accordez également par les présentes aux utilisateurs du Site et de tous les Autres médias le droit irrévocable d'accéder à Votre Contenu
                        dans le cadre de leur utilisation du Site et des Autres médias. Enfin, vous renoncez irrévocablement à toute revendication et affirmation à l'encontre de
                        SweetTable et de ses utilisateurs relatives aux droits moraux ou patrimoniaux en ce qui concerne Votre Contenu.
                        Par « <mark> utilisation</mark>  », nous entendons l'utilisation, la copie, la présentation et l'affichage publics, la reproduction, la distribution, la modification,
                        la traduction, la suppression, l'analyse, la commercialisation et la préparation d'œuvres dérivées de Votre Contenu.
                    </p>
                </li>

                <li> <h6>Propriété</h6></li>
                <li>
                    <p>
                        Comme convenu entre vous et SweetTable, vous êtes propriétaire de Votre Contenu. Nous sommes propriétaires du Contenu SweetTable, y compris, sans toutefois s'y limiter,
                        les interfaces visuelles, les fonctionnalités interactives, graphiques, conceptions, compilations, y compris, sans toutefois s'y limiter, notre compilation de Contenu Utilisateur
                        et autre Contenu du Site, codes informatiques, produits, logiciels, agrégats d'évaluations des avis d'utilisateurs, et tous les autres éléments et composants du Site à l'exception
                        de Votre Contenu, du Contenu Utilisateur et du Contenu Tiers. Nous possédons également les droits d'auteur, marques de commerce, marques de service, noms commerciaux,
                        et les autres droits de propriété intellectuelle et industrielle dans le monde entier (« <mark>Droits PI</mark> ») associés au Contenu SweetTable et au Site, qui sont protégés par
                        les lois relatives aux droits d'auteurs, aux emballages, aux brevets, et aux marques de commerce, ainsi que par tous les autres droits et lois en vigueur relatifs à la propriété
                        intellectuelle et industrielle. Ainsi, vous ne vous livrerez pas à la modification, à la reproduction, à la distribution, à la création d'œuvres dérivées ou d'adaptation,
                        à l'affichage public ou à aucune forme d'exploitation du Contenu SweetTable, dans son intégralité ou en partie, excepté avec notre autorisation expresse.
                        Excepté tel qu'énoncé expressément et sans ambiguïté dans les présentes, nous ne vous accordons aucun droit exprès ni implicite, et tous les droits dans et envers le Site et le
                        Contenu SweetTable nous appartiennent.
                    </p>
                </li>

                <li> <h6>Publicité</h6></li>
                <li>
                    <p>
                        SweetTable et les bénéficiaires d'une licence SweetTable peuvent afficher publiquement des publicités ou autres informations adjacentes à ou incluses dans Votre Contenu.
                        Vous n'avez droit à aucune indemnisation pour ces publicités. L'approche, les modalités et la portée de ces publicités sont sujettes à modification sans qu'aucun préavis
                        spécifique ne vous soit donné.
                    </p>
                </li>

                <li> <h6>Flux de Contenu</h6></li>
                <li>
                    <p>
                        Nous rendons une partie du Contenu du Site (« <mark>Contenu de Flux</mark> ») accessible par RSS (Real Simple Syndication) et des flux en format Atom (« <mark>Flux</mark> »).
                        Vous avez la possibilité d'accéder aux Flux et de les utiliser afin d'afficher du Contenu de Flux sur votre ordinateur, site Web ou blog (« <mark>Votre Site</mark> »),
                        à condition que (i) vous utilisiez les Flux à des fins personnelles et non commerciales exclusivement,
                        (ii) vous indiquiez sur votre affichage du Contenu de Flux des liens pointant vers les pages appropriées figurant sur les sites Web de SweetTable et citiez SweetTable
                        en tant que source du Contenu de Flux, (iii) vous n'insinuiez pas par votre affichage ou utilisation du Contenu de Flux que SweetTable promeut ou approuve des causes,
                        idées, sites Web, produits ou services tiers, y compris Votre Site, (iv) vous ne vous livriez pas à la redistribution du Contenu de Flux, et
                        (v) vous ne surchargiez pas les systèmes SweetTable par votre utilisation des Flux. Yelp se réserve tous les droits associés au Contenu de Flux dont celui de désactiver
                        les Flux à tout moment.

                        <!-- Veuillez sélectionner « Partenariats » sur notre page de contacts située ici pour vous renseigner sur les autres utilisations possibles des Flux.-->
                    </p>
                </li>

                <li> <h6>Autres</h6></li>
                <li>
                    <p>
                        Le contenu utilisateur (y compris tout contenu pouvant avoir été créé par des utilisateurs employés ou engagés sous contrat par SweetTable) ne reflète pas nécessairement
                        les opinions de SweetTable. Nous nous réservons le droit de supprimer, filtrer, modifier ou rétablir le Contenu Utilisateur de temps en temps à notre entière discrétion,
                        avec ou sans raison, et sans vous le communiquer. Par exemple, nous nous réservons le droit de supprimer un avis si nous pensons qu'il est en violation avec nos
                        <a>Directive de contenu</a>. Nous ne sommes pas dans l'obligation de sauvegarder Votre Contenu ni de vous en fournir de duplicata, et nous ne nous portons aucunement garant de la confidentialité
                        de Votre Contenu.
                    </p>
                </li>

            </ol>
        </li>

        <li> <h3>RESTRICTIONS</h3></li>
        <li>
            <p>
                Nous ne sommes pas dans l'obligation de faire appliquer les Conditions d'utilisation pour votre compte vis-à-vis d'un autre utilisateur.
                Bien que nous vous encouragions à nous le communiquer si vous pensez qu'un autre utilisateur a violé les Conditions d'utilisation,
                nous nous réservons le droit de procéder à une enquête et de prendre les mesures adéquates à notre entière discrétion.
            </p>
        </li>

        <li>
            <ol>
                <li><h6>Vous consentez à ne pas utiliser le Site et à ne pas aider ni permettre à d'autres d'utiliser le Site pour :</h6></li>
                <li>
                    <p>Violer nos <a>Directives de contenu</a>, par exemple en rédigeant un avis faux ou diffamatoire, en négociant des avis avec d'autres commerces ou en rédigeant
                        un avis pour lequel vous avez été payé directement ou indirectement par le commerce faisant l'objet de l'avis ;</p>
                    <p>
                       Enfreindre des droits détenus par des tiers, y compris tout abus de confiance, droit d'auteur, marque de commerce, brevet,
                        secret de fabrication, droit moral, droit à la vie privée, droit de publicité, ou tout autre droit de propriété intellectuelle
                        ou industrielle ;
                    </p>
                    <p>Menacer, traquer, faire du mal à ou harceler les autres, ou encore promouvoir le sectarisme ou la discrimination ;</p>
                    <p>Promouvoir une activité ou autre opération commerciale ou événement, ou utiliser autrement le Site à des fins commerciales, excepté dans le cadre d'un Compte de Commerce et tel qu'expressément autorisé par SweetTable ;</p>
                    <p>Envoyer des courriels de masse, sondages ou autres messages de masse, qu'ils soient de nature commerciale ou non ; être à l'origine de pollupostage par mot-clé, ou tenter de toute autre façon de manipuler les résultats
                        de recherche du Site ou le site Web de tout tiers ;</p>
                    <p>Demander des informations personnelles à des mineurs ou envoyer ou transmettre de la pornographie ; ou</p>
                    <p>Violer toute loi applicable.</p>
                </li>

                <li><h6>Vous consentez également à ne pas faire ce qui suit et à ne pas aider ni permettre à d'autres de :</h6></li>
                <li>
                    <p>enfreindre les Conditions d'utilisation ;</p>
                    <p>modifier, adapter, s'approprier, reproduire, distribuer, traduire, créer des œuvres dérivées ou des adaptations, afficher en public,
                        vendre, échanger, ou exploiter de quelque manière que ce soit le Site ou le Contenu du Site (autre que Votre Contenu),
                        sauf avec l'autorisation expresse de SweetTable ;</p>
                    <p>utiliser des robots, des moteurs de balayage, des applications de recherche/récupération, ou tout autre dispositif automatisé, processus ou mode d'accès, récupération, scraping,
                        ou encore indexage de toute portion du Site ou du Contenu du Site ;</p>
                    <p>se livrer à la rétro-ingénierie sur n'importe quelle portion du Site ;</p>
                    <p>supprimer ou modifier tout avis de droits d'auteur, marque de commerce ou autres droits de propriété industrielle figurant dans toute portion du
                        Site ou sur tout document imprimé ou copié à partir du Site ;</p>
                    <p>enregistrer, traiter ou explorer les données d'autres utilisateurs ;</p>
                    <p>accéder, récupérer ou indexer toute portion du Site dans le but de créer ou d'enrichir une base de données permettant de
                       rechercher des avis portant sur des commerces ;</p>
                    <p>modifier le format ou le framing de toute portion du Site ;</p>
                    <p>prendre toute mesure imposant ou pouvant imposer, à notre entière discrétion, une charge déraisonnable ou disproportionnée sur l'infrastructure technologique de SweetTable ou procéder autrement
                        à des demandes excessives concernant le Site ;</p>
                    <p>tenter d'accéder sans autorisation au Site, aux comptes d'utilisateurs, aux systèmes informatiques ou aux réseaux connectés au Site via le piratage informatique, l'exploitation de mots de passe ou tout autre moyen ;</p>
                    <p>utiliser le Site ou tout Contenu du Site pour transmettre des virus informatiques, vers informatique, défauts, chevaux de Troie ou autres éléments de nature destructive (collectivement désignés comme des « <mark>virus</mark> ») ;</p>
                    <p>utiliser tout périphérique, logiciel ou sous-programme interférant avec le fonctionnement adéquat du Site, ou tenter autrement d'interférer avec le fonctionnement adéquat du Site ;</p>
                    <p>utiliser le Site en vue de porter atteinte à la sécurité de tout réseau informatique, de craquer des mots de passe ou des codes de sécurité ; perturber ou interférer avec la sécurité du Site ou du Contenu du Site, ou encore y nuire ; ou</p>
                    <p>supprimer, éviter, désactiver, endommager ou interférer de toute autre façon avec des fonctionnalités du Site liées à la sécurité, des fonctionnalités empêchant ou restreignant l'utilisation ou la copie du Contenu du Site ou des
                        fonctionnalités apportant des limitations à l'utilisation du Site.</p>

                </li>
            </ol>
        </li>



    </ol>



</section>




</body>

</html>

