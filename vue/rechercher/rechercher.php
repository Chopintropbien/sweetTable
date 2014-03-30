<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
    <link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>
    
			<link rel="stylesheet" href="http://localhost/meittopi/vue/rechercher/rechercher.css"/>
			
			<link rel="stylesheet" href="http://localhost/meittopi/vue/class/restaurant/restaurantRecherche.class.css"/>
			<title id="titre"> </title>
		</head>
		
		<body>
			<section class="global">
				<nav id="nav">
					<?php include("vue/navigateur/navigateur.php"); ?>
				</nav>
				
				<section id="partiePrincipale">
					
					<h1 id="titreRecherche"></h1>

					<ul id="options">
						<?php include("vue/rechercher/option.php"); ?>
					</ul>
					
					<?php
                        include_once('vue/class/restaurant/restaurantRecherche.class.php');

                        include_once('vue/class/liste/liste.class.php');
                    echo '<sqdfc';
                        $liste = new Liste();

                        foreach($liste_restaurant_rechercheJSON as $restaurant_rechercheJSON){
                            $liste->ajoute(new RestaurantRecherche($restaurant_rechercheJSON));
                        }
                        $liste->affiche('rechercheRestau', 'restaurant');
                    ?>


					<iframe id="carte" width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/?ie=UTF8&amp;t=m&amp;ll=46.754917,1.73584&amp;spn=4.516326,6.591797&amp;z=6&amp;output=embed"></iframe>

			</section>
		</body>
	</html>

        
