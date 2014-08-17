
<section id="horraire_general">
    <h6> Fonctionne généralement:</h6>

    <div>
        <label> De</label>
        <select id="h_ouverture_1">
            <?php include('vue/ajouter_restaurant/select_horraire.php');?>
        </select>
        <span> h à </span>
        <select id="h_fermeture_1">
            <?php include('vue/ajouter_restaurant/select_horraire.php');?>
        </select>
        <span> h  </span>

        <span class="plus" id="plus_autre_tranche_horraire"> + </span>

        <span style="display: none;" id="autre_tranche_horraire">
            <label> et de </label>
            <select id="h_ouverture_2">
                <?php include('vue/ajouter_restaurant/select_horraire.php');?>
            </select>
            <span> h à </span>
            <select id="h_fermeture_2">
                <?php include('vue/ajouter_restaurant/select_horraire.php');?>
            </select>
            <span> h  </span>
        </span>
    </div>
</section>

<div id="ajouter_exeption"> Ajouter une exeption</div>

<article id="exeption" style="display: none;">

    <div>
        <span>Lundi</span>

        <span class="horraire">
            <div id="0ferme" style="display: none;"> Fermé</div>
            <div id="0ouvert"> </div>
        </span>

        <span>
            <span id="0editer"> Editer</span>
            <span id="0fermer" style="display: none;"> Fermé</span>
            <span id="0ouvrir" style="display: none;">Ouvert</span>
            <span id="0valider" style="display: none;"> Valider</span>
        </span>
    </div>

    <div>
        <span>Mardi</span>

        <span class="horraire">
             <div id="1ferme" style="display: none;"> Fermé</div>
        <div id="1ouvert"> </div>
        </span>

        <span>
         <span id="1editer" > Editer</span>
            <span id="1fermer" style="display: none;"> Fermé</span>
            <span id="1ouvrir" style="display: none;">Ouvert</span>
            <span id="1valider" style="display: none;"> Valider</span>
        </span>
    </div>

    <div>
        <span>Mercredi</span>

        <span class="horraire">
            <div id="2ferme" style="display: none;"> Fermé</div>
            <div id="2ouvert"> </div>
        </span>

        <span>
            <span id="2editer"> Editer</span>
            <span id="2fermer" style="display: none;"> Fermé</span>
            <span id="2ouvrir" style="display: none;">Ouvert</span>
            <span id="2valider" style="display: none;"> Valider</span>
        </span>
    </div>

    <div>
        <span>Jeudi</span>

        <span class="horraire">
            <div id="3ferme" style="display: none;"> Fermé</div>
            <div id="3ouvert"> </div>
        </span>

        <span>
            <span id="3editer"> Editer</span>
            <span id="3fermer" style="display: none;"> Fermé</span>
            <span id="3ouvrir" style="display: none;">Ouvert</span>
            <span id="3valider" style="display: none;"> Valider</span>
        </span>
    </div>

    <div>
        <span>Vendredi</span>

        <span class="horraire">
            <div id="4ferme" style="display: none;"> Fermé</div>
            <div id="4ouvert"> </div>
        </span>

        <span>
            <span id="4editer"> Editer</span>
            <span id="4fermer" style="display: none;"> Fermé</span>
            <span id="4ouvrir" style="display: none;">Ouvert</span>
            <span id="4valider" style="display: none;"> Valider</span>
        </span>
    </div>


    <div>
        <span>Samedi</span>

        <span class="horraire">
            <div id="5ferme" style="display: none;"> Fermé</div>
            <div id="5ouvert"> </div>
        </span>

        <span>
            <span id="5editer"> Editer</span>
            <span id="5fermer" style="display: none;"> Fermé</span>
            <span id="5ouvrir" style="display: none;">Ouvert</span>
            <span id="5valider" style="display: none;"> Valider</span>
        </span>
    </div>

    <div>
        <span>Dimanche</span>

        <span class="horraire">
            <div id="6ferme" style="display: none;"> Fermé</div>
            <div id="6ouvert"> </div>
        </span>

        <span>
            <span id="6editer"> Editer</span>
            <span id="6fermer" style="display: none;"> Fermé</span>
            <span id="6ouvrir" style="display: none;">Ouvert</span>
            <span id="6valider" style="display: none;"> Valider</span>
        </span>
    </div>

</article>