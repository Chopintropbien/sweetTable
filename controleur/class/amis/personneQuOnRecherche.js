

function imageCheckAjouterAmi(){

    imageCheckAjouterAmiDUneListe('propostionAmi');
    imageCheckAjouterAmiDUneListe('');
}

function imageCheckAjouterAmiDUneListe(idDifferanteListe){

    var i = 0;
    while(document.getElementById(i + 'imageCareChek' + idDifferanteListe)){
        var img = document.getElementById(i + 'imageCareChek' + idDifferanteListe);
        addEvent (img, 'click', function(){
            var i = this.id[0];

            var checkedSrc = 'http://localhost/Meittopi/image/caseCheckRemplie.png';
            var unCheckedSrc = 'http://localhost/Meittopi/image/caseCheckVide.png';
            var p = document.getElementById(i + 'nbRevus' + idDifferanteListe);
            var div = document.getElementById(i + 'nbAmiEnCommun' + idDifferanteListe);
            var textAcImage = document.getElementById(i + 'textAcImage' + idDifferanteListe);

            // TODO: envoyer au servuer
            if(this.src == unCheckedSrc){
                this.src = checkedSrc;
                p.style.display = 'block';
                div.style.display = 'none';
                textAcImage.innerHTML = 'Ami(e)'; //TODO: francais
            }
            else if(this.src == checkedSrc){
                if(confirm('Etes-vous sûr de ne plus vouloir être ami avec cette personne?')){
                    this.src = unCheckedSrc;
                    p.style.display = 'none';
                    div.style.display = 'block';
                    textAcImage.innerHTML = 'Ajouter'; //TODO: francais
                }
            }
        });

        ++i;
    }

}
