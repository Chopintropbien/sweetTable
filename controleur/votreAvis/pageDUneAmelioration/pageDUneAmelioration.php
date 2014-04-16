<?php

include('../modele/votreAvis/pageDUneAmelioration/ameliorationComplete.php');
include('../modele/votreAvis/pageDUneAmelioration/commentaireAmelioration.php');

$ameliorationCompleteJSON = get_amelioration_complete();
$listeCommentaireJSON = get_commentaites_amelioration();

include('../vue/votreAvis/pageDUneAmelioration/pageDUneAmelioration.php');