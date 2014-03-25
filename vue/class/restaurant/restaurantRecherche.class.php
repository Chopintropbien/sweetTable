<?php
	class RestaurantRecherche{
		private $nom;
		private $photo;
		private $note;
		private $prix;
		private $nbAvis;
		private $listeCathegorie;
		private $listeAmisQuiAime;
		private $listeAmisQuiBof;
		private $liseAmisQuiAimePas;
		private $listeEvenement;
		private $quartier;
		private $rue;
		private $villeEtZip;
		private $tel;
		private $lienRestau; 
		
		public function __construct($restaurantJSON){
			if(is_array($restaurantJSON)){
				$this->nom = $restaurantJSON[0];
				$this->photo = $restaurantJSON[1];
				$this->note = $restaurantJSON[2];
				$this->prix = $restaurantJSON[3];
				$this->nbAvis = $restaurantJSON[4];
				$this->listeCathegorie = $restaurantJSON[5];
				$this->listeAmisQuiAime = $restaurantJSON[6];
				$this->listeAmisQuiBof = $restaurantJSON[7];
				$this->liseAmisQuiAimePas = $restaurantJSON[8];
				$this->listeEvenement = $restaurantJSON[9];
				$this->quartier = $restaurantJSON[10];
				$this->rue = $restaurantJSON[11];
				$this->villeEtZip = $restaurantJSON[12];
				$this->tel = $restaurantJSON[13];
				$this->lienRestau = $restaurantJSON[14]; 
			}

		}
		
		public function affiche($i){
			echo '<img src="'.$this->photo .'"></img>';
			echo '<section>'; // a droite de la photo
				echo '<article>'; // info restau
					echo '<article>'; // tire restau
						echo '<p>'. ($i+1).'. </p>';
						echo '<a href="'.$this->lienRestau.'"><h4>'.$this->nom.'</h4></a>';
					echo'</article>';
					
					echo '<div>'; // etoile et nobre d'avis
						echo '<div>'; // note
							for($j=0; $j<$this->note; ++$j){
								echo '<canvas width="23" height="23"></canvas>';
							}
						echo '</div>';
						echo '<p>'. $this->nbAvis .' avis</p>'; // francais
					echo'</div>';
					
					echo '<section>'; // prix et cathegorie
							// pris
						$prix = '';
						for($j=0; $j<$this->prix; ++$j){ $prix = $prix . '$';}
						echo '<div>'.$prix.'</div>';
						
							// categorie
						$nbCathegorie = count($this->listeCathegorie);
						$cathegorie = '';
						for($j=0; $j<$nbCathegorie; ++$j){ 
							$cathegorie = $cathegorie . $this->listeCathegorie[$j];
							if(!($j == $nbCathegorie-1)){ $cathegorie = $cathegorie . ', '; }
						}
						echo '<p>'.$cathegorie.'</p>';
						
						echo ' <span id="croixApparitionElement'.$i.'">+</span>';
					echo'</section>';
					
						// evenement caché
					echo '<aside id="evenement'.$i.'" style="display: none;">';
						$listeEvenement = count($this->listeEvenement);
						for($j=0; $j<$listeEvenement; ++$j){ 
							echo '<a> <h6>'.$this->listeEvenement[$j][0].':</h6>'.$this->listeEvenement[$j][1].'</a>';
						 }

					echo '</aside>';
				echo'</article>';
				
				echo '<aside>'; // coordonné restau
					echo '<p>'. $this->quartier .'</p>';
					echo '<adress>'.$this->rue.'<br/>'.$this->villeEtZip.'<br/>'.$this->tel.'</adress>';
				echo '</aside>';
				
				echo '<section>'; // tableau des amis qui aimes ou pas
					echo '<ul>'; //  avis positif
						echo '<h6>'.'Avis positif'.'</h6>'; // francais
						foreach($this->listeAmisQuiAime as $amisQuiAime){
							echo '<li><a href="'.$amisQuiAime[2].'"><p>'.$amisQuiAime[0].': </p></a><a href="'.$amisQuiAime[3] .'"> <span>'.$amisQuiAime[1].' avis'.'</span></a></li>';
						}
					echo '</ul>';
					
					echo '<ul>'; // Avis mitigé
						echo '<h6>'.'Avis mitigé'.'</h6>'; // francais
						foreach($this->listeAmisQuiBof as $amisQuiAimeBof){
							echo '<li><a href="'.$amisQuiAimeBof[2].'"><p>'.$amisQuiAimeBof[0].': </p></a><a href="'.$amisQuiAimeBof[3] .'"> <span>'.$amisQuiAimeBof[1].' avis'.'</span></a></li>';
						}
					echo '</ul>';
					
					echo '<ul>'; // avis negatif
						echo '<h6>'.'Avis negatif'.'</h6>'; // francais
						foreach($this->liseAmisQuiAimePas as $amisQuiAimePas){
							echo '<li><a href="'.$amisQuiAimePas[2].'"><p>'.$amisQuiAimePas[0].': </p></a><a href="'.$amisQuiAimePas[3].'"> <span>'.$amisQuiAimePas[1].' avis'.'</span></a></li>';
						}
					echo '</ul>';
				echo '</section>';
			echo'</section>';
		}
		
	}
?>
