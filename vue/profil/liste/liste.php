<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/profil/liste/liste.css"/>




            <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeDeListe.class.css"/>
            <link rel="stylesheet" href="http://localhost/meittopi/vue/class/liste/listeCommente.class.css"/>
            <link rel="stylesheet" href="http://localhost/meittopi/vue/class/restaurant/restaurantRecherche.class.css"/>
			
			<title id="titre">  </title>
		</head>
		
		<body>
			<section class="global">
				<nav id="nav">
					<?php include("../vue/navigateur/navigateur.php"); ?>
				</nav>

				<section id="partiePrincipale">
					
					<?php include("../vue/profil/navigateur/navigateur.php"); ?>
					
					<section id="grossePartie">
						<a href="http://localhost/Meittopi/php/vue/menuPrincipal/profil/ajouterListe.php"> <h6 class="ajous" id = "ajous"> + ajouter une liste</h6> </a>
						
						
						<?php

							include_once('../vue/class/liste/listeDeListe.class.php');
							include_once('../vue/class/liste/listeCommente.class.php');
							include_once('../vue/class/restaurant/restaurantRecherche.class.php');

                            $listeDeListe = new ListeDeListe();
							foreach($listeDeListeJSON as $listeJSON){
								$liste = new ListeCommente($listeJSON[0]);
								foreach($listeJSON[1] as $choseCommenteJSON){
									$liste->ajoute(new RestaurantRevue($choseCommenteJSON[0]), $choseCommenteJSON[1], $choseCommenteJSON[2]);
								}
                                $listeDeListe->ajoute($liste);
							}
							
							$classListe = 'liste';
                            $listeDeListe->afficheEntete('listeDeListe');
                            $listeDeListe->afficheListe($classListe, '');

						?>

				    </section>

                </section>
            </section>
		</body>
	</html>
