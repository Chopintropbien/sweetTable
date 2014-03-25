<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/base.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/profil/navigateur/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/navigateur/navigateur.css"/>
			<link rel="stylesheet" href="http://localhost/meittopi/vue/profil/evenement/evenement.css"/>
			
			
			
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
							<ul id="evenementAuQuelOnParticipe">
								<li><h4> Evenement au quel je participe</h4></li>
								<hr/>
								<li>
									<img src="http://localhost/Meittopi/image/profil_vide.png" />
									<input type="button" class="petiteCroix"value ="+"/>
									<article> 
										<a><h6> kZEFB SZfh IF fqhjeb fquj</h6></a>
										<time> mardi 20 à 20h</time>
										<p> Avec: <a>Mehdi</a>, <a>Andrei</a> </p>
										<p>Participation? <a>Peut-être</a></p>
									</article>
									
								</li>
								<hr/>
								<li>
									<img src="http://localhost/Meittopi/image/profil_vide.png" />
									<input type="button" class="petiteCroix"value ="+"/>
									<article> 
										<a><h6> kZEFB SZfh IF fqhjeb fquj</h6></a>
										<time> mardi 20 à 20h</time>
										<p> Avec: <a>Mehdi</a>, <a>Andrei</a> </p>
										<p>Participation? <a>Peut-être</a></p>
									</article>
								</li>
						</ul>
						</article>
						
						
					</section>

				</section>


		</body>
	</html>
