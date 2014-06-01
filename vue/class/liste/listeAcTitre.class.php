<?php
	include_once('liste.class.php');
	
	class ListeAcTitre extends Liste{
		protected $titre;
		
		public function __construct($titre){
			$this->titre = $titre;
		}
		
		public function affiche($idListe, $classLi){
            echo '<ul id="' . $idListe . '" class="listeAcTitre">';
            $this->afficheTitre();
            echo '<hr/>';
            $this->afficheLi($classLi);
            $this->afficheFinUl();
		}
        public function afficheDifferenteListe($idListe, $classLi, $idDifferanteListe){
            echo '<ul id="' . $idListe . '" class="listeAcTitre">';
            $this->afficheTitre();
            echo '<hr/>';
            $this->afficheLiPlusieurListe($classLi, $idDifferanteListe);
            $this->afficheFinUl();
        }

        protected function afficheTitre(){
            echo '<li> <h1>'. $this->titre .'</h1></li>';
        }
		
		
		 
	}
?>
