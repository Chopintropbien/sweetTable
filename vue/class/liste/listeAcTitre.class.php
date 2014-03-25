<?php
	include_once('liste.class.php');
	
	class ListeAcTitre extends Liste{
		protected $titre;
		
		public function __construct($titre){
			$this->titre = $titre;
		}
		
		public function affiche($idListe, $classLi){
			echo '<ul id="' . $idListe . '">';
			echo '<li> <h1>'. $this->titre .'</h1></li>';
			$nbElement = count($this->liste);
			for($i = 0; $i < $nbElement ; $i++){
				echo '<li class="'.$classLi.'">';
				$this->liste[$i]->affiche($i);
				echo '</li>' ;
				if($i != $nbElement-1){
					echo '<hr/>';
				}
			}
			echo '</ul>';
		}
		
		
		 
	}
?>
