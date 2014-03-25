<?php
       class ListeDeListe{
           private $listeDeListe;

           public function __construct(){
               $this->listeDeListe = array();
           }

          public function ajoute($liste){
              $this->listeDeListe[] = $liste;
          }

          public function afficheListe($classListe, $classLi){
              $listeLength = count($this->listeDeListe);
              for($i = 0; $i< $listeLength; ++$i){
                  $this->listeDeListe[$i]->affiche(($classListe . $i) ,$classListe, $classLi);
              }
          }

           public function afficheEntete($idEntete){

              echo '<ul id="'. $idEntete .'">';
               $listeLength = count($this->listeDeListe);
               for($i = 0; $i< $listeLength; ++$i){
                   echo '<li id=". $i ." class="listeDeListe">' . $this->listeDeListe[$i]->titre() . '</li>';
               }
               echo '</ul>';
           }




       }

?>
