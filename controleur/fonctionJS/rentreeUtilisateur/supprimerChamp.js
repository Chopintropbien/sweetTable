function supprimerParentNode(idButtonSupprimer, i){

    var buttonSupprimer = document.getElementById(i + idButtonSupprimer);
    // si on click sur la petite crois, on efface la caracteristique

    addEvent(buttonSupprimer, 'click',function(){
        if(confirm("Etes-vous sûr de suprimer cette partie?")){ // TODO: Francais
            var parentLi = this.parentNode;
            parentLi.parentNode.removeChild(parentLi);
        }
        //TODO: envoyer au serveur


    });


}
