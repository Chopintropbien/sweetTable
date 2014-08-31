<?php

include_once('vue/fonction_annexe/etoile/note_etoile.php');
include_once('vue/class/publication/publication.class.php');

class Publication_Revue extends Publication{
    private $note_restau;
    private $texte_revue;

    public function __construct($nom_personne_qui_publie, $photo_profil, $uid_personne_publie, $date_ecriture,
                                $restaurant_nom, $uid_restaurant, $titre, $note_restau, $teste_revue,
                                $photo1, $photo2, $photo3){
        parent::__construct($nom_personne_qui_publie, $photo_profil, $uid_personne_publie, $date_ecriture,
            $restaurant_nom, $uid_restaurant, $titre, $photo1, $photo2, $photo3);
        $this->note_restau = $note_restau;
        $this->texte_revue =$teste_revue;
    }

    // affiche_personne -> affiche la photo et le nom de ce lui qui a ecrit la revue
    public function affiche($i, $affiche_personne){
        include('vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');

        parent::affiche_debut($i, 'publication_revue', 'a écrit sur', $affiche_personne);
				// etoile
				echo '<div>';
                    note_etoile($this->note_restau, 30);
				echo '</div>';

				// commentaire
				echo '<p>'.$this->texte_revue.'</p>';




        parent::affiche_fin();
    }
}
