<?php

include('listeAcTitre.class.php');


class ListeACommenter extends ListeAcTitre{

    public function __construct($titre){
        parent::__construct($titre);
    }

    public function affiche($idListe, $classLi){
        echo '<ul id="' . $idListe . '" class="listeACommenter">';
        $this->afficheTitre();
        echo '<hr/>';
        $this->afficheLi($classLi, $idListe);
        echo '<hr/>';
        $this->afficheZoneCommentaire();
        $this->afficheFinUl();

    }

    protected  function afficheZoneCommentaire(){
        // TODO: francais

        $quenPensezVous = 'Qu\'en pensez vous?';
        $repondre = 'Répondre';

        echo '<li id="ecrireReponse">';
            echo '<h5 >'.$quenPensezVous.'</h5>';
            echo '<textarea></textarea>';
            echo '<input id="repondre" class="repondre" value="'.$repondre.'" type="button">';
        echo '</li>';

    }

}