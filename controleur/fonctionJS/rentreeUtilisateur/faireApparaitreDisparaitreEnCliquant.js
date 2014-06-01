
// si la class du button est "faireDisparaitre" ca fera disparaitre au premier clic puis au deuxieme apparaitre
// sinon c'est l'ordre inverse
function faireApparaitreDisparaitreEnCliquant(buttonACliquer, listeChoseAFaireApparaitre){

    addEvent (buttonACliquer, 'click', function(){
        if(buttonACliquer.className == 'faireDisparaitre'){
            for(var j = 0; j<listeChoseAFaireApparaitre.length; ++j){
                listeChoseAFaireApparaitre[j].style.display = 'block';
            }
            buttonACliquer.className = 'faireApparaitre';
        }
        else{
            for(var j = 0; j<listeChoseAFaireApparaitre.length; ++j){
                listeChoseAFaireApparaitre[j].style.display = 'none';
            }
            buttonACliquer.className = 'faireDisparaitre';
        }


    });

}