<?php

class RevueDeQuelquUn{
    private $revus;
    private $voteUtil;
    private $voteDrole;
    private $voteCool;

    public function __construct($revue, $json){
        $this->revus = $revue;
        $this->voteUtil = $json[9];
        $this->voteDrole = $json[10];
        $this->voteCool = $json[11];
    }

    public function affiche($i){
        $this->afficheZoneVoteEtCommentaire($i);
    }

    public function afficheZoneVoteEtCommentaire($i){
        echo '<section>';
            echo '<h6>Cette avis est-il...?</h6>';
            echo '<div>'; // zone des boutton de votes
                $checkImage = 'http://localhost/Meittopi/image/check.png';
                $styleBoutton = 'border: 1px inset rgb(255, 132, 0);';

                    // pour le button votes utils
                if($this->voteUtil){
                    echo '<div id="utileButton'.$i.'"style=" '.$styleBoutton.' " >vote utile';
                }
                else{
                    echo '<div id="utileButton'.$i.'>sdf ';
                }
                if($this->voteUtil){
                    echo '<img src=" '.$checkImage.' "/>';
                }
                echo '</div>';


            echo '</div>';
        echo '</section>';
    }






}