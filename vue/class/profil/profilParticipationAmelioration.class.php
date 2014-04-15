<?php


class ProfilParticipationAmelioration{
    private $speudo;
    private $ville;
    private $photo;
    private $nbVotePour;
    private $nbVoteContre;
    private $nbAmelioration;
    private $status;

    public function __construct($json){
        $this->speudo = $json->speudo;
        $this->ville = $json->ville;
        $this->photo = $json->photoProfil;
        $this->nbVotePour = $json->nbPour;
        $this->nbVoteContre = $json->nbContre;
        $this->nbAmelioration = $json->nbAmelioration;
        $this->status = $json->statut;
    }

    public function affiche(){
        include('vue/class/profil/francais/profilParticipationAmelioration.php');

        echo '<article id="profilAmelioration">';
            // "titre" du profil, avec le speudo et la ville ou la personne habite
            echo '<h4>'.$this->speudo.'</h4>';
            echo '<address>'.$this->ville.'</address>';

            echo '<hr>';

            // en bas du titre du profil
            echo '<article>';
                // photo de profil
                echo '<img src="'.$this->photo.'"/>';

                // liste des notification (votes)
                echo '<ul>';
                    // nombre vote pour
                    echo '<li>';
                        echo '<img src="'.$photoPouceHautVert.'"/>';
                        echo '<p>'.$this->nbVotePour.$votePour.'</p>';

                    echo '</li>';

                    // nombre vote conte
                    echo '<li>';
                        echo '<img src="'.$photoPouceBasRouge.'"/>';
                        echo '<p>'.$this->nbVoteContre.$voteContre.'</p>';
                    echo '</li>';

                    // nombre d'amelioration proposer
                    echo '<li>';
                        echo '<img src="'.$photoTravaux.'"/>';
                        echo '<p>'.$this->nbAmelioration.$amelioration.'</p>';
                    echo '</li>';


                echo '</ul>';
            echo '</article>';

        echo '</article>';
    }


}