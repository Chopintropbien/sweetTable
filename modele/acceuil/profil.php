<?php

function get_profil(){

// TODO: commentaire
    $profil = '{
				 "profilComplet" : [
										"http://localhost/Meittopi/image/profil_vide.png",
										"Lauriane Mollier",
										"Lausanne",
										"2",
										"8",
										"5",
										"4",
										"4",
										"5",
										"1",
										"4",
										"ds"
								   ]
        }';

    return json_decode($profil);

}