<?php 

class Liste{
	
	protected $liste;
	
	public function __construct(){
		$this->liste = array ();
	}
	
	public function affiche($idListe, $classLi){
		$this->afficheDebutUl($idListe);
        $this->afficheLi($classLi);
        $this->afficheFinUl();
	}

    protected function afficheDebutUl($idListe){
        echo '<ul id="' . $idListe . '" class="liste">';
    }
    protected  function afficheFinUl(){
        echo '</ul>';
    }
    protected function afficheLi($classLi){
        $nbElement = count($this->liste);
        for($i = 0; $i < $nbElement ; $i++){
            echo '<li class="'.$classLi.'">';
            $this->liste[$i]->affiche($i);
            echo '</li>' ;
            if($i != $nbElement-1){
                echo '<hr/>';
            }
        }
    }

	public function ajoute($element){
		$this->liste[] = $element;
	}
	
	
}




?>
