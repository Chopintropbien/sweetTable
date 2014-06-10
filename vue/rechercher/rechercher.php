
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<html>
		<head>
			<meta charset="utf-8"/>

			<link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
            <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

			<link rel="stylesheet" href="http://localhost/meittopi/vue/rechercher/rechercher.css"/>

			<link rel="stylesheet" href="http://localhost/meittopi/vue/class/restaurant/restaurantRecherche.class.css"/>
			<title id="titre">Tutoriel Google Maps </title>

            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <!-- Elément Google Maps indiquant que la carte doit être affiché en plein écran et
            qu'elle ne peut pas être redimensionnée par l'utilisateur -->
            <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
            <!-- Inclusion de l'API Google MAPS -->
            <!-- Le paramètre "sensor" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->
            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>



        </head>

		<body onload="onLoad();">
			<section class="global">
				<nav id="nav">
					<?php include("vue/navigateur/navigateur.php"); ?>
				</nav>

				<section id="partiePrincipale">

					<h1 id="titreRecherche"></h1>

                    <!-- carte de recherche -->

                    <div id="contientCarte">
                        <div id="carte" style="width: 100%; height: 250px;">  </div>
                        <aside id="infoBulle"></aside>
                    </div>


					<?php
                        include_once('vue/class/restaurant/restaurantRecherche.class.php');
                        include_once('vue/class/liste/liste.class.php');
                        $liste = new Liste();

                        foreach($liste_restaurant_rechercheJSON as $restaurant_rechercheJSON){
                            $liste->ajoute(new RestaurantRecherche($restaurant_rechercheJSON));
                        }
                        $liste->affiche('rechercheRestau', 'restaurant');
                    ?>

                    <ul id="options">
                        <?php include("vue/rechercher/option.php"); ?>
                    </ul>






			</section>

            <!-- carte -->
            <script src="http://localhost/meittopi/controleur/rechercher/initializeCarte.js"> </script>

            <script>

                google.maps.event.addDomListener(window, 'load', initialize);

            </script>

            <!-- etoile des restau -->
                <script src="http://localhost/meittopi/controleur/fonctionJS/etoile/dessineEtoile.js"> </script>
                <script src="http://localhost/meittopi/controleur/fonctionJS/etoile/dessineDemiEtoile.js"> </script>
                <script src="http://localhost/meittopi/controleur/class/noteEtoile/noteEtoile.js"></script>

                <script>
                    noteEtoile();
                </script>

                <!-- evenement restaurant -->
                <script src="http://localhost/meittopi/controleur/fonctionJS/rentreeUtilisateur/faireApparaitreDisparaitreEnCliquant.js"> </script>
                <script src="http://localhost/meittopi/controleur/class/restaurant/restaurantDeBase.js"></script>

                <script>
                    afficheEvenement();
                </script>


		</body>
	</html>


