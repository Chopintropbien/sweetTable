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
    // s'il y a plusieur liste sur la meme page $idDifferanteListe differencie les deux liste. Util pour le js
    public function afficheDifferenteListe($idListe, $classLi, $idDifferanteListe){
        $this->afficheDebutUl($idListe);
        $this->afficheLiPlusieurListe($classLi, $idDifferanteListe);
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

    protected function afficheLiPlusieurListe($classLi, $idDifferanteListe){
        $nbElement = count($this->liste);
        for($i = 0; $i < $nbElement ; $i++){
            echo '<li class="'.$classLi.'">';
            $this->liste[$i]->affiche($i, $idDifferanteListe);
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
