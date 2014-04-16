<?php

class PropositionAmelioration {
    protected $photo;
    protected $titre;
    protected $description;
    protected $nbPersonnePour;
    protected $nbPersonnePourMax;
    protected $nbPersonneContre;
    protected $nbPersonneContreMax;
    protected $nbDon;
    protected $nbDonMax;
    protected $utilisateurAime;
    protected $utilisateurAimePas;
    protected $utilisateurDon;
    protected $lienAmelioration;
    protected $lienDon;

    public function __construct($json){
		$this->photo = $json[0];
        $this->titre = $json[1];
        $this->description = $json[2];
        $this->nbPersonnePour = $json[3];
        $this->nbPersonnePourMax = $json[4];
        $this->nbPersonneContre = $json[5];
        $this->nbPersonneContreMax = $json[6];
        $this->nbDon = $json[7];
        $this->nbDonMax = $json[8];
        $this->utilisateurAime = $json[9];
        $this->utilisateurAimePas = $json[10];
        $this->utilisateurDon = $json[11];
        $this->lienAmelioration = $json[12];
        $this->lienDon = $json[14];
    }
    public function affiche(){
        // photo
        $this->affichePhoto('');

        // reste
        $this->toutSaufPhoto('');
    }
    public function toutSaufPhoto($i){
        include('vue/class/propositionAmelioration/francais/propositionAmelioration.php');
        include('../vue/class/propositionAmelioration/francais/propositionAmelioration.php');

		// partie de description de la propostion
		echo '<article>';
			echo '<a href="'.$this->lienAmelioration.'">';
				echo '<h2>'.$this->titre.'</h2>';
			echo '</a>';
			echo '<p>'.$this->description.'</p>';
		echo '</article>';
		
		
		echo '<aside>';
			echo '<ul>';

        // si les personne votre encore pour ou contre
			if($this->nbPersonnePour < $this->nbPersonnePourMax
			&& $this->nbPersonneContre < $this->nbPersonneContreMax){

                // colorie le pouce en vert si l'utilisateur a voté pour
                if($this->utilisateurAime){
                    $photoPouceHaut = $photoPouceHautVert;
                }
                else{
                    $photoPouceHaut = $photoPouceHautBlanc;
                }


				echo '<li>';
					echo '<div>';
						echo '<p>'.$pour.'</p>';
						echo '<canvas title="5/10" width="100" height="10" id="canvasnbPour0"></canvas>';
					echo '</div>';
					echo '<img class="pouceHaut" src="'.$photoPouceHaut.'">';
				echo '</li>';

                // colorie le pouce en vert si l'utilisateur a voté pour
                if($this->utilisateurAimePas){
                    $photoPouceBas = $photoPouceBasRouge;
                }
                else{
                    $photoPouceBas = $photoPouceBasBlanc;
                }

                echo '<li>';
                    echo '<div>';
                        echo '<p>'.$contre.'</p>';
                        echo '<canvas title="5/10" width="100" height="10" id="canvasnbPour0"></canvas>';
                    echo '</div>';
                    echo '<img class="pouceBas" src="'.$photoPouceBas.'">';
                echo '</li>';
			}

        // recolte de don
			if($this->nbPersonnePour >= $this->nbPersonnePourMax
			&& $this->nbDon < $this->nbDonMax){
				echo '<li class="don">';
					echo '<div id="nbDon3">';
						echo '<p>'.$don.'</p>';
						echo '<canvas title="7/20" width="100" height="10" id="canvasnbDon3"></canvas>';
					echo '</div>';
					
					echo '<a href="">';
						echo '<img class="tirelire" src="'.$photoTirelire.'">';
					echo '</a>';
				echo '</li>';
			}

        // en devellopement
			if($this->nbPersonnePour >= $this->nbPersonnePourMax
			&& $this->nbDon >= $this->nbDonMax){
				echo '<li>';
					echo '<img class="enDevellopementImage" src="'.$photoTravaux.'">';
					echo '<h6 class="enDevellopementTitre">'.$enDevellopement.'</h6>';
				echo '</li>';
			}

        // annulé
			if($this->nbPersonneContre >= $this->nbPersonneContreMax){
				echo '<li class="annule">';
				echo '<img class="annule" src="'.$photoCroix.'">';
				echo '<h6>'.$annule.'</h6>';
				echo '</li>';
			}
			echo '</ul>';
		echo '</aside>';

    }
    public function affichePhoto($i){
        //photo
        echo '<div>';
            echo '<a href="'.$this->lienAmelioration.'">';
                echo '<img src="'.$this->photo.'">';
            echo '</a>';
        echo '</div>';
    }



} 
