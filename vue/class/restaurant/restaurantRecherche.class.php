<?php

include_once('vue/class/restaurant/restaurantRevue.class.php');
	class RestaurantRecherche extends RestaurantRevue{
		private $listeAmisQuiAime;
		private $listeAmisQuiBof;
		private $liseAmisQuiAimePas;
		
		
		public function __construct($restaurantJSON){
			if(is_array($restaurantJSON)){
                echo 'q<sezdf';
				parent::__construct($restaurantJSON);
				$this->listeAmisQuiAime = $restaurantJSON[12];
				$this->listeAmisQuiBof = $restaurantJSON[13];
				$this->liseAmisQuiAimePas = $restaurantJSON[14];
			}

		}
		
		public function affiche($i){
			include('francais/restaurantRecherche.php');
                parent::affiche($i);

				echo '<section>'; // tableau des amis qui aimes ou pas
					echo '<ul>'; //  avis positif
						echo '<h6>'.$avisPositif.'</h6>';
						foreach($this->listeAmisQuiAime as $amisQuiAime){
							echo '<li><a href="'.$amisQuiAime[2].'"><p>'.$amisQuiAime[0].': </p></a><a href="'.$amisQuiAime[3] .'"> <span>'.$amisQuiAime[1].$avis.'</span></a></li>';
						}
					echo '</ul>';
					
					echo '<ul>'; // Avis mitigé
						echo '<h6>'.$avisMitiger.'</h6>';
						foreach($this->listeAmisQuiBof as $amisQuiAimeBof){
							echo '<li><a href="'.$amisQuiAimeBof[2].'"><p>'.$amisQuiAimeBof[0].': </p></a><a href="'.$amisQuiAimeBof[3] .'"> <span>'.$amisQuiAimeBof[1]. $avis.'</span></a></li>';
						}
					echo '</ul>';
					
					echo '<ul>'; // avis negatif
						echo '<h6>'.$avisNegatif.'</h6>';
						foreach($this->liseAmisQuiAimePas as $amisQuiAimePas){
							echo '<li><a href="'.$amisQuiAimePas[2].'"><p>'.$amisQuiAimePas[0].': </p></a><a href="'.$amisQuiAimePas[3].'"> <span>'.$amisQuiAimePas[1].$avis.'</span></a></li>';
						}
					echo '</ul>';
				echo '</section>';
			echo'</section>';
		}
		
	}
?>
