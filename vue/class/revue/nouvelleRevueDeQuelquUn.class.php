<?php

include_once('vue/class/noteEtoile/noteEtoile.class.php');

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
                NoteEtoile::afficheEtoile($this->noteRestau, 23);
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
                    echo '<div id="'.$i.'utileButton" style=" '.$styleBoutton.' " >'.$util;
					echo '<img src="'.$checkImage.'" id="'.$i.'utileButtonCheck"/>';
					echo '</div>';
                }
                else{
                    echo '<div id="'.$i.'utileButton">'.$util;
                    echo '<img src="'.$checkImage.'" id="'.$i.'utileButtonCheck" style=" display: none;"/>';
                    echo '</div>';
                }
                
                    // pour le button votes drole
                if($this->voteDrole){
                    echo '<div id="'.$i.'droleButton" style=" '.$styleBoutton.' " >'.$drole;
					echo '<img src="'.$checkImage.'" id="'.$i.'droleButtonCheck"/>';
					echo '</div>';
                }
                else{
                    echo '<div id="'.$i.'droleButton" >'.$drole;
                    echo '<img src="'.$checkImage.'" id="'.$i.'droleButtonCheck" style=" display: none;"/>';
                    echo '</div>';
                }
                
                    // pour le button votes cool
                if($this->voteCool){
                    echo '<div id="'.$i.'coolButton"style=" '.$styleBoutton.' " >'.$cool;
					echo '<img src="'.$checkImage.'" id="'.$i.'coolButtonCheck"/>';
					echo '</div>';
                }
                else{
                    echo '<div id="'.$i.'coolButton">'.$cool;
                    echo '<img src="'.$checkImage.'" id="'.$i.'coolButtonCheck" style=" display: none;"/>';
                    echo '</div>';
                }


            echo '</div>';
        echo '</section>';
    }
	public function afficheZoneCompliment($i){
        include('vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');
        include('../vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');

		echo '<article>';
			//  
			echo '<input id="'.$i.'ecrireCompliment" class="ecrireCompliment" type="texte" placeholder="'.$envoyerCompliement.'" style="display: block;"/>';
			echo '<textarea id="'.$i.'texteCompliment" style="display: none;"></textarea>';
			
			
			echo '<div id="'.$i.'buttonsCompliment">';
				echo '<p id="'.$i.'annulerEcritureCompliment" class="annulerEcritureCompliment" style="display: none;">';
				echo $annuler;
				echo '</p>';
				echo '<input id="'.$i.'envoyerCompliement" class="envoyerCompliement" type="button" value="'.$envoyer.'" style="display: none;"/>';
			echo '</div>';
		echo '</article>';	
	}





}
