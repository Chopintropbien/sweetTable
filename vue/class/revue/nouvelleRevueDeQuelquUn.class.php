<?php

class NouvelleRevueDeQuelquUn{
    private $speudo;
    private $photo;
    private $retaurantCommente;
    private $dateDEcriture;
    private $noteRestau;
    private $texterevue;
    private $utilisateurSuitLaPersonne;
    private $lienPersonne;
    private $lienRestau;
    private $voteUtil;
    private $voteDrole;
    private $voteCool;

    public function __construct($json){
        $this->speudo = $json[0];
        $this->photo = $json[1];
        $this->retaurantCommente = $json[2];
        $this->dateDEcriture = $json[3];
        $this->noteRestau = $json[4];
        $this->texterevue = $json[5];
        $this->utilisateurSuitLaPersonne = $json[6];
        $this->lienPersonne = $json[7];
        $this->lienRestau = $json[8];
        $this->voteUtil = $json[9];
        $this->voteDrole = $json[10];
        $this->voteCool = $json[11];
    }



    public function affiche($i){
        include('vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');
        include('../vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');

        echo '<div class = "nouvelleRevueDeQuelquUn">';
			echo '<img src="'.$this->photo.'"/>';
			
			echo '<article>';
				echo '<time>'.$this->dateDEcriture.'</time>';
				
				// titre 
				echo '<h6>';
				echo '<a href="'.$this->lienPersonne.'"><strong>'.$this->speudo.'</strong></a>';
				echo '<span>'.$aEcritSur.'</span>';
				echo '<a href="'.$this->lienRestau.'"><mark>'.$this->retaurantCommente.'</mark></a>';
				echo '</h6>';
				
				// etoile
				echo '<div>';
					echo '<canvas width="23" height="23"></canvas>';
				echo '</div>';
				
				// commentaire
				echo '<p>'.$this->texterevue.'</p>';
	
	
		        $this->afficheBouttonDeVote($i);
		        $this->afficheZoneCompliment($i);
	        echo '</article>';
        echo '</div>';
    }

    public function afficheBouttonDeVote($i){
        include('vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');
        include('../vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');

        echo '<section>';
            echo '<h6>'.$cetteAvisEstIl.'</h6>';
            echo '<div>'; // zone des boutton de votes
                $checkImage = 'http://localhost/Meittopi/image/check.png';
                $styleBoutton = 'border: 1px inset rgb(255, 132, 0);';

                    // pour le button votes utils
                if($this->voteUtil){
                    echo '<div id="utileButton'.$i.'" style=" '.$styleBoutton.' " >'.$util;
					echo '<img src=" '.$checkImage.' "/>';
					echo '</div>';
                }
                else{
                    echo '<div id="utileButton'.$i.'">'.$util.'</div>';
                }
                
                    // pour le button votes drole
                if($this->voteDrole){
                    echo '<div id="utileButton'.$i.'"style=" '.$styleBoutton.' " >'.$drole;
					echo '<img src=" '.$checkImage.' "/>';
					echo '</div>';
                }
                else{
                    echo '<div id="utileButton'.$i.'" >'.$drole.'</div>';
                }
                
                    // pour le button votes cool
                if($this->voteCool){
                    echo '<div id="utileButton'.$i.'"style=" '.$styleBoutton.' " >'.$cool;
					echo '<img src=" '.$checkImage.' "/>';
					echo '</div>';
                }
                else{
                    echo '<div id="utileButton'.$i.'">'.$cool.'</div>';
                }


            echo '</div>';
        echo '</section>';
    }
	public function afficheZoneCompliment($i){
        include('vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');
        include('../vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');

		echo '<article>';
			//  
			echo '<input id="ecrireCompliment1" class="ecrireCompliment" type="texte" placeholder="'.$envoyerCompliement.'" style="display: block;"/>';
			echo '<textarea id="texteCompliment1" style="display: none;"></textarea>';
			
			
			echo '<div id="buttonsCompliment1" style="display: none;">';
				echo '<p id="annulerEcritureCompliment1" class="annulerEcritureCompliment">';
				echo $annuler;
				echo '</p>';
				echo '<input id="envoyerCompliement1" class="envoyerCompliement" type="button" value="'.$envoyer.'"/>';
			echo '</div>';
		echo '</article>';	
	}





}
