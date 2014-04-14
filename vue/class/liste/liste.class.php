<?php 

class Liste{
	
	protected $liste;
	
	public function __construct(){
		$this->liste = array ();
	}
	
	public function affiche($idListe, $classLi){
		echo '<ul id="' . $idListe . '" class="liste">';
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
	public function ajoute($element){
		$this->liste[] = $element;
	}
	
	
}




?>
