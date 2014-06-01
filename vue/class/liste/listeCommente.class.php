<?php
	include_once('listeAcTitre.class.php');
	
	class ListeCommente extends ListeAcTitre{
		private $commentaire;
		
		public function __construct($titre){
			parent::__construct($titre);
		}

        public function titre(){
            return $this->titre;
        }
		    // mettre un boolean pour nouvelleListe
		public function affiche($idListe, $classListe, $classLi, $nouvelleListe){

			echo '<ul id="' . $idListe . '" class="'. $classListe .'">';
				echo '<li class="entete">';
						//titre de la liste ou un input de saisie si c'est une nouvelle liste
                    $nouvelleListe?  $this->affiche_input_nouvelle_liste(): $this->affiche_titre_liste();
                    if(count($this->liste) != 0)  {
                        echo '<hr id="0ligne"/>';
                    }
				echo '</li>';
					// liste des choses commanté
				$nbElement = count($this->liste);
				for($i = 0; $i < $nbElement ; $i++){
					echo '<li class="'.$classLi.' "  id="'.$i.'elementListe">';
					     echo '<div class="elementCommente">';
                             echo '<div class="'. $this->liste[$i][2] .'">';
							    $this->liste[$i][0]->affiche($i);
                          echo '</div>';
						echo '</div>';
						echo '<div class="commentaire">'; 
							$this->affiche_commantaire($i);
						echo '</div>';
						echo '<div class="fermerElement" id="'.$i.'fermerElement">  + </div>';
					echo '</li>' ;
					echo '<hr/ id="'.($i+1).'ligne">';
				}
				echo '<li	 class="ajouterALaListe">';
					$this->affiche_ajouter_a_la_liste();
				echo '</li>';
			echo '</ul>';
            $nouvelleListe? $this->affiche_option_bas_liste_nouvelle_liste() :$this->affiche_option_bas_liste();


        }

        private function affiche_titre_liste(){
            echo '<h1>'. $this->titre .'</h1>';
            echo '<input type="texte" placeholder="Nouveau titre" style="display: none;"/>' ;
        }
        private function affiche_input_nouvelle_liste(){
            echo '<h1 style="display: none;">'. $this->titre .'</h1>';
            echo '<input type="texte" placeholder="Nouveau titre"/>' ;
        }
        private function affiche_option_bas_liste(){
            echo '<div id="enregistrerListeEmplacement"> ';
            echo '<span> Supprimer cette liste </span>';
            echo '</div>';
        }
        private function affiche_option_bas_liste_nouvelle_liste(){
            echo '<div id="enregistrerListeEmplacement"> ';
                 echo '<span> Annuler </span>';
                 echo '<input type="button" value="Enregistrer" id="enregistrerListe"/> ';
            echo '</div>';
        }

		private function affiche_commantaire($i){
            include ('francais/listeCommente.php');

			echo '<h6> '.$commentaire.' </h6>';
			if($this->liste[$i][1] == ''){ // s'il n'y a pas de commentaire
				echo '<p  style="display: none;" id="'.$i.'texteCommentaire"></p>';
				echo '<textarea id="'.$i.'textareaCommentaire"> </textarea>';

                echo '<article>';
                    echo '<p style="display: none;" id="'.$i.'annulerCommentaire" > '.$annuler.'</p>';
                    echo '<input type="button" value="'.$enregistrer.'" id="'.$i.'validerCommentaire"/>';
                echo '</article>';

				echo '<div style="display: none;" id="'.$i.'modifierCommentaire"> <span>'.$modifierCommentaire.' </span> </div>';
			}
			else{
				echo '<p id="'.$i.'texteCommentaire">'.$this->liste[$i][1].'</p>';
				echo '<textarea style="display: none;" id="'.$i.'textareaCommentaire"> </textarea>';

				echo '<article>';
                    echo '<p id="'.$i.'annulerCommentaire"  style="display: none;"> '.$annuler.'</p>';
                    echo '<input type="button" value="'.$enregistrer.'" id="'.$i.'validerCommentaire"  style="display: none;"/>';
                echo '</article>';

				echo '<div> <span id="'.$i.'modifierCommentaire">'.$modifierCommentaire.'</span> </div>';
			}
			

		}
		
		private function affiche_ajouter_a_la_liste(){
            include ('francais/listeCommente.php');

			echo '<h3>'.$ajouterALaListe.' </h3>';
				// qu'est ce qu'on veut ajouter à la liste
			echo '<select name="typeAjousListe"> ';
				echo '<option value="type" id="type"> '.$quoi.'</option>';
				echo '<option value="amis" id="Un amis">'.$ami.' </option>';
				echo '<option value="restaurant" id="restaurant">'.$restau.' </option>';
				echo '<option value="evenement" id="evenement">'. $evenement.'</option>';
				echo '<option value="discution" id="discution">'. $discution.'</option>';
			echo '</select>';
				// champ pour rechercher
			echo '<input type="texte" id="chercherElementAjouList" placeholder="'.$rechercher.'"/>';
				// valide
			echo '<div>';
				echo '<input type="button" id="ajouterALaListe" value="'.$valider.'" />';
			echo '</div>';

		}
		
		public function ajoute($choseCommente, $commentaire, $typeAjout){
			$this->liste[] = array ($choseCommente, $commentaire, $typeAjout);
		}
	}
?>
