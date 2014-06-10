
function afficheEvenement(){

    var i = 0;
    while(document.getElementById(i + 'croixApparitionElement')){
        var button = document.getElementById(i + 'croixApparitionElement');
        faireApparaitreDisparaitreEnCliquant(button, [document.getElementById(i +'evenement')]);

        ++i;
    }
}







