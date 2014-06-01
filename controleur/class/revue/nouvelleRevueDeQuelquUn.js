
function evenementButtonEtCompliment(){

    var i = 0;
    while(document.getElementById(i + "utileButton")){
        evenementButtonPertinanceAvis(i);

        // TODO: faire que quand on valider un compliment ca nous envois vers une page de confiramtion
        modifierCommentaire('ecrireCompliment',
            'ecrireCompliment',
            'texteCompliment',
            'annulerEcritureCompliment',
            'envoyerCompliement',
            '',
            i)

        ++i;
    }

}




/* fonction pour que les boutons utile drole et cool s'enfonce ou se dé-enfonce quand on clique
 * de plus un check vert qui apparait ou disparait
 * obligatoirement avec des bordure in et outset sans le css
 */
function evenementButtonPertinanceAvis(i){

    var button = [];
    button.push(document.getElementById(i + "utileButton"));
    button.push(document.getElementById(i + "droleButton"));
    button.push(document.getElementById(i + "coolButton"));

    for(var j = 0; j < button.length; ++j){
        //TODO: serveur
        addEvent(button[j], 'click', function(){

            var imgCheck  = document.getElementById(this.id + 'Check');

            if(this.style.border == '' || /outset/.test(this.style.border)){
                this.style.border = '1px #FF8400 inset';
                imgCheck.style.display = "inline-block";
            }
            else if( /inset/.test(this.style.border)){
                this.style.border = '1px #FF8400 outset';
                imgCheck.style.display = "none";
            }

        });

    }

}
