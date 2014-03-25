<?php

class Evenement{	
	private $speudo;
	private $photoProfil;
	private $photoEvenement;
	private $titreEvenement;
	private $dateDEcriture;
	private $dateEvenement;
	private $listeInvite;
	private $messagePerso;
	private $description;
	private $reponseUtilisateurInvitation;
	private $lienPersoneCreerEvenement;
	private $lienEvenement;
	
	

	

	public function __construct($json){
		if(is_array($json)){
				// mettre les fonctions securisante ici
			$this->speudo = htmlspecialchars($json[0]);
			$this->photoProfil = $json[1];
			$this->photoEvenement = $json[2];
			$this->titreEvenement = $json[3];
			$this->dateDEcriture = $json[4];
			$this->dateEvenement = $json[5];
			$this->listeInvite = $json[6];
			$this->messagePerso = $json[7];
			$this->description = $json[8];
			$this->reponseUtilisateurInvitation = $json[9];
			$this->lienPersoneCreerEvenement = htmlspecialchars($json[10]);
			$this->lienEvenement = $json[11];
		}
	}
	
	public function affiche($i){
		include ('francais.php');
		
			// photo de profil
		echo '<img src="' . $this->photoProfil .'"></img>';
			// article à droite de la photo
		echo '<article>';
			echo '<time>'. $this->dateDEcriture .'</time>';
			echo '<h6>'; // titre qui a fait l'evenement
				echo '<a id="lienPersonne'. $i .'" href="'.$this->lienPersoneCreerEvenement.'">'. $this->speudo. '</a>'; // francais
				echo '<span class="aCreerUnEvenement">'. $ACreerEvenement.' </span>'; 
			echo '</h6>';
			
			echo '<section>'; // partie en bas du titre de celui qui a fait l'événement
				echo '<ul>'; // liste des photos de l'evenement
					for($j = 0; $j<3 and $j < count($this->photoEvenement); ++$j){
						echo '<li> <img src="'. $this->photoEvenement[$j].'" /> </li>';
					}
				echo '</ul>';
				
				echo '<section>'; // section à droite des photos de l'evenement 
					echo '<a href="'.$this->lienEvenement.'">'. $this->titreEvenement .'</a>'; // titre evenement
					echo '<time>'. $this->dateEvenement.'</time>';
					echo '<article>'; // liste des invité
						$nbInvité = count($this->listeInvite);
						for($j=0; $j< 6 and $j< $nbInvité; ++$j){
							echo '<span>';
							echo '<a href='. $this->listeInvite[$j][2].' >'. $this->listeInvite[$j][0] .'</a>';
							$reponseInviter;
							
							switch($this->listeInvite[$j][1]){
								case 0:
									$reponseInviter = $estInviter;
								break;
								case 1:
									$reponseInviter = $neVientPas;
								break;
								case 2:
									$reponseInviter = $peutEtre ;
								break;
								case 3:
									$reponseInviter = $vient;
								break;
								default:
									// lancer une erreur
							}
							echo '<span>'.$reponseInviter.'</span>';
							if(!($j == 6 or $j == $nbInvité)){
								echo ', ';
							}
							echo '</span>';
							
						}
					echo'</article>';
					echo '<p>'. $this->description .'</p>'; 
					echo '<div>'; // est ce que l'utilisateur participe?
						echo '<p>'.$participe.'</p>';
						$reponduOui = ($this->reponseUtilisateurInvitation == 3)? 'checked': '';
						$reponduPeutEtre = ($this->reponseUtilisateurInvitation == 2)? 'checked': '';
						$reponduNon =  ($this->reponseUtilisateurInvitation == 1)? 'checked': '';
						
						
						echo  '<input type="radio" name="participe'.$i.'" value="participe" id="participe"'. $reponduOui. '/> <label for="participe">'.$oui.'</label>';
						echo  '<input type="radio" name="participe'.$i.'" value="participePeutEtre" id="participePeutEtre" '.$reponduPeutEtre.'/> <label for="participePeutEtre">'.$peutEtre.'</label>'; 
						echo  '<input type="radio" name="participe'.$i.'" value="participePas" id="participePas" '.$reponduNon.'/> <label for="participePas"> '.$non.' </label>'; 
					echo'</div>';
				echo '</section>';

			echo '</section>';
			
				// message perso
			echo '<p> <strong>' . $this->speudo .':</strong> '. $this->messagePerso .'</p>';
		
		echo '</article>';

	} 

	
}
