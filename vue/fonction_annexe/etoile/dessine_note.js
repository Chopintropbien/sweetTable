function dessine_note(){

    var etoiles = document.getElementsByTagName('canvas');

    for (var i = 0; etoiles.length > i; i++) {
        if(etoiles[i].className == 'etoileComplete'){
            dessineEtoile(etoiles[i], etoiles[i].width);
        }
        else if(etoiles[i].className == 'demiEtoile'){
            dessineDemiEtoile(etoiles[i], etoiles[i].width);
        }

    }
}