<!-- si le restaurant cherché n'est pas trouvé -->
<div class="error" id="error_find_restau">
    <div>
        <p>Nous n'avons pas trouver le restaurant que vous rechercher.</p>
        <div id="savoir_error_find_restau">En savoir plus</div>
        <p style="display: none" id="text_error_find_restau">
            <br/>
            SweetTable est une toute <mark>nouvelle application</mark> proposée en version alpha. Nous ne disposons donc de peu de données.
            <br/> Il est important
            <em>d'ajouter les restaurants</em> que vous ne trouver pas pour que SweetTable puisse se develloper et <mark>vous</mark> proposer
            un service de plus en <mark>plus performant</mark>.
        </p>
    </div>
    <div>

        <a href="ajouter-restaurant.php" class="button"> Ajouter ce restaurant </a>
    </div>
</div>
<script>
    (function(d){
        d.getElementById('savoir_error_find_restau').onclick = function() {
            this.style.display = 'none';
            d.getElementById('text_error_find_restau').style.display = 'block';
        }
    })(document);
</script>