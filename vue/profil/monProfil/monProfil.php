
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="http://localhost/Meittopi/css/base.css"/>
			<link rel="stylesheet" href="http://localhost/Meittopi/css/menuPricipal/navigateur/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/Meittopi/css/menuPricipal/profil/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/Meittopi/css/menuPricipal/profil/monProfil.css"/>

			<link rel="stylesheet" href="http://localhost/meittopi/vue/class/profil/profilNotification.class.css"/>
			<title id = "titre">  </title>
		</head>
		
		<body>
			<section class="global">
				<nav id="nav">
					<?php include("../vue/navigateur/navigateur.php"); ?>
				</nav>
				
					
			
				<section id="partiePrincipale">
					
					<?php include("../vue/profil/navigateur/navigateur.php"); ?>
					
					    <!--   afficher le profil -->
                    <?php
                        include_once('../vue/class/profil/profilComplet.class.php');
                        foreach($profilCompletJSON as $profilJSON){
                            $profil = new ProfilComplet($profilJSON);
                        }
                        $profil->affiche();
                    ?>

                        <!-- afficher les notifications -->

                    <?php
                        include_once('../vue/class/liste/listeAcTitre.class.php');
                        include_once('../vue/class/notification/notification.class.php');

                        $liste = new ListeAcTitre('Notifications');
                        foreach($listeNotificationJSON as $notificationJSON){
                            $liste->ajoute(new Notification($notificationJSON));
                        }
                        $liste->affiche('notification', '');
                    ?>


					
				</section> 
		

				
		
		</body>
	</html>
