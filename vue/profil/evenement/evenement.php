<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>

			<link rel="stylesheet" href="http://localhost/meittopi/vue/profil/evenement/evenement.css"/>

            <link rel="stylesheet" href="http://localhost/meittopi/vue/class/evenement/evenement.class.css"/>
            <link rel="stylesheet" href="http://localhost/meittopi/vue/class/evenement/evenementResume.class.css"/>
			
			
			<title id="titre">  </title>
		</head>
		
		<body>
			<section class="global">
				<nav id="nav">
					<?php include("../vue/navigateur/navigateur.php"); ?>
				</nav>

				<section id="partiePrincipale">
					
					<?php include("../vue/profil/navigateur/navigateur.php"); ?>
					
					<section id="section">
						
						<a class="ajous" href=""> + Organiser Un evenement</a>
						
							
						<?php 
							include_once('../vue/class/liste/liste.class.php');
							include_once('../vue/class/evenement/evenement.class.php');
						
							$liste = new Liste();
							foreach($listeEvenementJSON as $evenementJSON){
								$liste->ajoute(new Evenement($evenementJSON));
							}
							
							$idListe = 'listeDesEvenements';
							$liste->affiche($idListe, 'evenement');
						?>	
							

						
						
						<article id="evenementAuQuelOnParticipeArticle">
                            <?php
                            include_once('../vue/class/evenement/evenementResume.class.php');
                            include_once('../vue/class/liste/listeAcTitre.class.php');

                            $listeAcTitre = new ListeAcTitre('Evenement au quel vous participer');
                            foreach($listeEvenementResumeJSON as $evenementResumeJSON){
                                $listeAcTitre->ajoute(new EvenementResume($evenementResumeJSON));
                            }
                            $listeAcTitre->affiche('evenementAuQuelOnParticipe', '');

                            ?>

						</article>
						
						
					</section>

				</section>

                <!-- suprimer evenenement -->
                <script src="http://localhost/meittopi/controleur/addEvent.js"> </script>
                <script src="http://localhost/meittopi/controleur/fonctionJS/rentreeUtilisateur/supprimerChamp.js"> </script>
                <script src="http://localhost/meittopi/controleur/class/evenement/evenementResume.js"> </script>

                <script>
                    supprimerEvenement();
                </script>

		</body>
	</html>
