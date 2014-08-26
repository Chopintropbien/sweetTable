
function coordonance_date_naissance(jour, mois, annee, message){

    var moisVal = mois.options[mois.selectedIndex].value;
    var jourVal = jour.options[jour.selectedIndex].value;
    var anneeVal = annee.options[annee.selectedIndex].value;

    // si pas bien replis
    if(moisVal == 'null' || jourVal == 'null' || anneeVal == 'null'){
        jour.style.border = '1px red solid';
        mois.style.border = '1px red solid';
        annee.style.border = '1px red solid';
        message.innerHTML = '';
        return false;
    }

    // n'autaurise pas les 31 quand il n'y en a pas
    else if((moisVal == 2 || moisVal == 4 || moisVal == 6 || moisVal == 9 || moisVal == 11) && jourVal == 31){
        jour.style.border = '1px red solid';
        mois.style.border = '1px red solid';
        message.innerHTML = 'Le 31 n\'existe pas pour ce mois';
        return false;
    }
    // n'autaurise pas le 30frevier
    else if( moisVal == 2 && jourVal == 30){
        jour.style.border = '1px red solid';
        mois.style.border = '1px red solid';
        message.innerHTML = 'Le 30 n\'existe pas en février';
        return false;
    }

    // si l'annee n'est pas bixetile => pas authauriser le 29 fevrier
    else if( ! is_bisextile(anneeVal) && moisVal == 2 && jourVal == 29){
        jour.style.border = '1px red solid';
        mois.style.border = '1px red solid';
        annee.style.border = '1px red solid';
        message.innerHTML = 'Cette année n\'est pas bissextile';
        return false;
    }

    else{
        jour.style.border = 'none';
        mois.style.border = 'none';
        annee.style.border = 'none';
        message.innerHTML = '';
        return true;
    }

}


function is_bisextile(year){
    return (year % 4 == 0 && year % 100 != 0) || year % 400 == 0;
}




