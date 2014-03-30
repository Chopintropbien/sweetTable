<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/29/14
 * Time: 10:16 AM
 */

class RestaurantRevue {
	private $nom;
		protected $photo;
		protected $note;
		protected $prix;
		protected $nbAvis;
		protected $listeCathegorie;
		protected $quartier;
		protected $rue;
		protected $villeEtZip;
		protected $tel;
		protected $listeEvenement;
		protected $lienRestau; 
		
		public function __construct($restaurantJSON){
			if(is_array($restaurantJSON)){
				$this->nom = $restaurantJSON[0];
				$this->photo = $restaurantJSON[1];
				$this->note = $restaurantJSON[2];
				$this->prix = $restaurantJSON[3];
				$this->nbAvis = $restaurantJSON[4];
				$this->listeCathegorie = $restaurantJSON[5];
				$this->quartier = $restaurantJSON[6];
				$this->rue = $restaurantJSON[7];
				$this->villeEtZip = $restaurantJSON[8];
				$this->tel = $restaurantJSON[9];
				$this->listeEvenement = $restaurantJSON[10]; 
				$this->lienRestau = $restaurantJSON[11]; 
			}

		}
		
		public function affiche($i){
			include('francais/restaurantRecherche.php');
			
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
						echo '<p>'. $this->nbAvis .$avis. '</p>';
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

		}
} 
