<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/29/14
 * Time: 10:16 AM
 */

include_once('vue/class/noteEtoile/noteEtoile.class.php');
include_once('../vue/class/noteEtoile/noteEtoile.class.php');

include_once('vue/class/restaurant/restaurantDeBase.class.php');
include_once('../vue/class/restaurant/restaurantDeBase.class.php');



class RestaurantRevue extends RestaurantDeBase{

    // a refaire pour qu'il y ai que l'adesse et le tel
		protected $quartier;
		protected $rue;
		protected $villeEtZip;
		protected $tel;

		
		public function __construct($restaurantJSON){
			if(is_array($restaurantJSON)){
                parent::__construct($restaurantJSON);
				$this->quartier = $restaurantJSON[6];
				$this->rue = $restaurantJSON[7];
				$this->villeEtZip = $restaurantJSON[8];
				$this->tel = $restaurantJSON[9];
			}
		}
		
		protected  function affichePartieDroitePhoto($i){
			include('francais/restaurantRecherche.php');

                parent::affichePartieDroitePhoto($i);
				
				echo '<aside>'; // coordonné restau
					echo '<p>'. $this->quartier .'</p>';
					echo '<adress>'.$this->rue.'<br/>'.$this->villeEtZip.'<br/>'.$this->tel.'</adress>';
				echo '</aside>';

		}

        public function affiche($i){
            echo '<img src="'.$this->photo .'"></img>';
            echo '<section>'; // a droite de la photo
                $this->affichePartieDroitePhoto($i);
            echo '</section>';

        }
} 
