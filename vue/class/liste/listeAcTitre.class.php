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
            echo '<hr id="0ligne"/>';
            $this->afficheLi($classLi, $idListe);
            $this->afficheFinUl();
		}
        public function afficheDifferenteListe($idListe, $classLi, $idDifferanteListe){
            echo '<ul id="' . $idListe . '" class="listeAcTitre">';
            $this->afficheTitre();
            echo '<hr id="0ligne"/>';
            $this->afficheLiPlusieurListe($classLi, $idDifferanteListe, $idListe);
            $this->afficheFinUl();
        }

        protected function afficheTitre(){
            echo '<li> <h1>'. $this->titre .'</h1></li>';
        }
		
		
		 
	}
?>
