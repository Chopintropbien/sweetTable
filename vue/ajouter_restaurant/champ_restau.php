
<?php include('vue/search/option/francais/option.php');?>

<section id="champ_restau">

    <div>
        <span>  <label><span>* </span>Nom du restaurant: </label> </span>
        <span> <input type="text"/> </span>
    </div>

    <div>
        <span> <label><span>* </span> Adresse: </label> </span>
        <span>
            <input type="text"/>
            <input type="text"/>
            <input type="text" placeholder="Code postal" id="code_postal"/>
            <input type="text" placeholder="Ville" id="ville"/>
            <select id="pays">
                <option>France</option>
            </select>
        </span>
    </div>

    <div>
        <span> <label> Horraire:</label>  </span>
        <span id="horraire">
            <?php include('vue/ajouter_restaurant/horraire.php');?>
        </span>
    </div>

    <div>
        <span> <label> Numéro de téléphone:</label> </span>
        <span> <input type="text"/>  </span>
    </div>

    <div>
        <span>  <label> Site internet:</label> </span>
        <span> <input type="text"/> </span>
    </div>

    <div>
        <span> <label> Cathégorie:</label> </span>
        <span class="cuisine_fonctionnalite">
            <?php include("vue/search/option/cuisine.php"); ?>
            <div class="+" id="cuisinesAvancees" >
                <?php echo $plus_cuisine; ?>
            </div>
        </span>
    </div>

    <div>
        <span> <label> Fonctionnalité:</label> </span>
        <span class="cuisine_fonctionnalite">
            <?php include("vue/search/option/fonctionnalite.php"); ?>
            <div class="+" id="fonctionsAvancees">
                <?php echo $plus_fonctionnalite; ?>
            </div>
        </span>
    </div>

    <div>
        <span> <label> Remarque pour l'équipe:</label> </span>
        <span> <textarea></textarea> </span>
    </div>


</section>

<!-- pour pouvoir afficher plus d'option -->
<script src = "<?php echo $GLOBALS['host'];?>/vue/search/option/js/plus_option.js"> </script>

<script>
    plusDOption('cuisinesAvancees', 'cacheCuisine');
    plusDOption('fonctionsAvancees', 'cacheFonction');
</script>