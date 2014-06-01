
// si il y a une ligne a supprimer dans une liste, l'appeler pas un id: i + ligne
function supprimerParentNode(idButtonSupprimer, i){

    var buttonSupprimer = document.getElementById(i + idButtonSupprimer);
    // si on click sur la petite crois, on efface la caracteristique

    addEvent(buttonSupprimer, 'click',function(){
        if(confirm("Etes-vous sûr de suprimer cette partie?")){ // TODO: Francais
            var parentLi = this.parentNode;
            parentLi.parentNode.removeChild(parentLi);

            // cache la ligne du haut
            var ligne = document.getElementById(i + 'ligne');
            if(ligne != null){
                ligne.style.display = 'none';
            }

        }
        //TODO: envoyer au serveur


    });


}
