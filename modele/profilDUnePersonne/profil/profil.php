<?php

function get_profil_complet(){

// TODO: commentaire
    $profilComplet = '{
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
										"ds",
										[
											["Ce que j\'aime faire : ", "Coder avec mon copin, meme si c\'est très stressant, discuter avec mon copian, jouer ave mon copin..."],
											["Dans la vie je suis plutôt...", "Stresse mais cool à la fois" ]
									    ]
								   ]
        }';

    return json_decode($profilComplet);

}