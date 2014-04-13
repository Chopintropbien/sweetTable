<?php

class ReponseDiscution {
    private $dateDeCreation;
    private $photoAuteurDiscution;
    private $speudoAuteurDiscution;
    private $texte;
    private $lienAuteur;

    private $listeReponse;

    public function __construct($json){
        $this->dateDeCreation = $json[0];
        $this->photoAuteurDiscution = $json[1];
        $this->speudoAuteurDiscution = $json[2];
        $this->texte = $json[3];
        $this->lienAuteur = $json[4];

        $this->listeReponse = array();
    }

    public function affiche($i){
        include('../vue/class/discution/francais/discutionComplete.php');
		echo '<div>';
			echo '<img src="'.$this->photoAuteurDiscution.'">';
			echo '<a href="'.$this->lienAuteur.'">';
				echo '<p>'.$this->speudoAuteurDiscution .'</p>';
			echo '</a>';
		echo '</div>';
		
		echo '<article>';
			echo '<p>'.$this->texte.'</p>';
			echo '<time>'.$this->dateDeCreation.'</time>';
			echo '<section>';
				echo '<a class="compliement" href="a">'.$envoyerCompliment.'</a>';
				echo '<a class="message" href="a">'.$envoyerMessage.'</a>';
				echo '<a class="contenueIndesirable" href="a">'.$signalerContenueInnaproprié.'</a>';
			echo '</section>';
		echo '</article>';


    }
} 
