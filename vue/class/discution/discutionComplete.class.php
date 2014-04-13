<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 4/12/14
 * Time: 7:17 PM
 */

class DiscutionComplete {
    private $titre;
    private $dateDeCreation;
    private $photoAuteurDiscution;
    private $speudoAuteurDiscution;
    private $texte;
    private $typeDiscution;
    private $lienAuteur;

    private $listeReponse;

    public function __construct($json){
        $this->titre = $json[0];
        $this->dateDeCreation = $json[1];
        $this->photoAuteurDiscution = $json[2];
        $this->speudoAuteurDiscution = $json[3];
        $this->texte = $json[4];
        $this->typeDiscution = $json[5];
        $this->lienAuteur = $json[6];

        $this->listeReponse = array();
    }

    public function ajoute($reponse){
        $this->listeReponse[] = $reponse;
    }
    public function affiche(){

        echo '<ul id="discution">';
			// sujet de la discution, question initial
			$this->afficheSujetDiscution();

            $nbReponse = count($this->listeReponse);
            for($i=0; $i<$nbReponse; ++$i){
                echo '<hr/>';
                echo '<li class="reponse">';
                    $this->listeReponse[$i]->affiche($i);
                echo '</li>';
            }
            // zone de saisie
            echo '<hr/>';
            $this->afficheZoneSaisieReponse();

			
        echo '</ul>';
    }

    private function afficheSujetDiscution(){
        include('../vue/class/discution/francais/discutionComplete.php');

		echo '<li class="liEntete">';
			echo '<h3>'.$this->titre.'</h3>';
			
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
		echo '</li>';
    }
    
    private function afficheZoneSaisieReponse(){
        include('../vue/class/discution/francais/discutionComplete.php');

		echo '<li class="ecrireReponse">';
			echo '<h5 >'.$quenPensezVous.'</h5>';
			echo '<textarea></textarea>';
			echo '<input id="repondre" class="repondre" value="'.$repondre.'" type="button">';
		echo '</li>';
		
		
	}

} 
