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
		
		public function affiche($idListe, $classListe, $classLi){
			
			echo '<ul id="' . $idListe . '" class"'. $classListe .'">';
				echo '<li class="entete">';
						//titre de la liste
					echo '<h1>'. $this->titre .'</h1>';
					echo '<input type="texte" placeholder="Nouveau titre" style="display: none;"/>' ;
					echo '<hr/>';
				echo '</li>';
					// liste des choses commanté
				$nbElement = count($this->liste);
				for($i = 0; $i < $nbElement ; $i++){
					echo '<li class="'.$classLi.'">';
						echo '<div class="restaurant">'; 
							$this->liste[$i][0]->affiche($i);
						echo '</div>';
						echo '<div class="commentaire">'; 
							$this->affiche_commantaire($i);
						echo '</div>';
						echo '<div class="fermerElement">  + </div>';
					echo '</li>' ;
					echo '<hr/>';		
				}
				echo '<li	 class="ajouterALaListe">';
					$this->affiche_ajouter_a_la_liste();
				echo '</li>';
			echo '</ul>';
		
				// pour creer une nouvelle liste
			echo '<div id="enregistrerListeEmplacement"> ';
				echo '<span  style="display: none;"> Annuler </span>';
				echo '<span> Supprimer cette liste </span>';
				echo '<input type="button" value="Enregistrer" id="enregistrerListe"  style="display: none;"/> ';
			echo '</div>';



		}
		private function affiche_commantaire($i){
			echo '<h6> Commentaire: </h6>'; // francais
			if($this->liste[$i][1] == ''){ // s'il n'y a pas de commentaire
				echo '<p  style="display: none;"></p>';
				echo '<textarea> </textarea>';
				echo '<article> <input type="button" value="Enregistrer"/> </article>'; // fr
				echo '<div style="display: none;"> <span> modifier votre commantaire </span> </div>'; // fr
			}
			else{
				echo '<p>'.$this->liste[$i][1].'</p>';
				echo '<textarea style="display: none;"> </textarea>';
				echo '<article style="display: none;"> <input type="button" value="Enregistrer"/> </article>'; // fr
				echo '<div> <span> modifier votre commantaire </span> </div>'; // fr
			}
			

		}
		
		private function affiche_ajouter_a_la_liste(){
			echo '<h3> Ajouter à la liste:</h3>';
				// qu'est ce qu'on veut ajouter à la liste
			echo '<select name="typeAjousListe"> ';
				echo '<option value="type" id="type"> Quoi? </option>';
				echo '<option value="amis" id="Un amis"> Amis </option>';
				echo '<option value="restaurant" id="restaurant"> Un restaurant </option>';
				echo '<option value="evenement" id="evenement"> Un evénement </option>';
				echo '<option value="discution" id="discution"> Une discution </option>';
			echo '</select>';
				// champ pour rechercher
			echo '<input type="texte" id="chercherElementAjouList" placeholder="Rechercher"/>';
				// valide
			echo '<div>';
				echo '<input type="button" id="ajouterALaListe" value="Validé" />';
			echo '</div>';
	
		}
		
		public function ajoute($choseCommente, $commentaire){
			$this->liste[] = array ($choseCommente, $commentaire);
		}
	}
?>
