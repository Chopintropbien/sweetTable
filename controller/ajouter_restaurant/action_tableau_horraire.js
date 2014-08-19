

/* action quand les horraires sont affiché */
(function(){

    for(var i = 0; i<7 ; ++i){

        /* quand les utilisateur click sur editer */
        document.getElementById(i + 'editer').onclick = function(){

            var i = this.id[0];
            this.style.display = 'none';

            var fermer = document.getElementById( i + 'fermer');
            if(document.getElementById(i + 'ferme').style.display == 'none'){
                document.getElementById( i + 'fermer').style.display = 'inline-block';
            }
            else{
                document.getElementById(i + 'ouvrir').style.display = 'inline-block';
            }
            document.getElementById( i + 'valider').style.display = 'inline-block';

            // effacer les span et afficher les select
            var span = document.getElementsByClassName(i + 'span');
            var select = document.getElementsByClassName(i + 'horraire');
            for(var j = 0; j< span.length; ++j){
                span[j].style.display = 'none';
                select[j].style.display = 'inline-block';

                select[j].value = span[j].innerHTML;
            }
        }

        /* quand l'utilisateur valide */
        document.getElementById(i + 'valider').onclick = function(){
            var i = this.id[0];
            this.style.display = 'none';
            document.getElementById( i + 'fermer').style.display = 'none';
            document.getElementById(i + 'ouvrir').style.display = 'none';
            document.getElementById( i + 'editer').style.display = 'inline-block';

            // effacer les span et afficher les select
            var span = document.getElementsByClassName(i + 'span');
            var select = document.getElementsByClassName(i + 'horraire');
            for(var j = 0; j< span.length; ++j){
                span[j].style.display = 'inline-block';
                select[j].style.display = 'none';

                span[j].innerHTML = select[j].value;
            }
        }

        /* quand l'utilisateur click sur fermé */
        document.getElementById(i + 'fermer').onclick = function(){
            var i = this.id[0];
            this.style.display = 'none';
            document.getElementById(i + 'ferme').style.display = 'inline-block';
            document.getElementById(i + 'ouvert').style.display = 'none';
            document.getElementById(i + 'ouvrir').style.display = 'inline-block';
        }

        /* quand l'utilsateur clique sur ouvert */
        document.getElementById(i + 'ouvrir').onclick = function(){
            var i = this.id[0];
            this.style.display = 'none';
            document.getElementById(i + 'ouvert').style.display = 'inline-block';
            document.getElementById(i + 'ferme').style.display = 'none';
            document.getElementById(i + 'fermer').style.display = 'inline-block';
        }
    }

})();