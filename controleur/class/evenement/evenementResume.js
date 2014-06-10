function supprimerEvenement(){
    var i = 0;
    while(document.getElementById(i + 'supprimerEvenement')){
        //supprimer les element de la liste
        supprimerParentNode('supprimerEvenement', i);
        ++i;
    }
}