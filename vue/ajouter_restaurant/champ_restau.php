
<?php include('vue/search/option/francais/option.php');?>

<section id="champ_restau">

    <div>
        <span>  <label><span>* </span>Nom du restaurant: </label> </span>
        <span> <input type="text" name="nom_restau"/> </span>
    </div>

    <div>
        <span> <label><span>* </span> Adresse: </label> </span>
        <span>
            <input type="text" name="adresse_1"/>
            <input type="text" name="adresse_2"/>
            <input type="text" placeholder="Code postal" id="code_postal" name="code_postal"/>
            <input type="text" placeholder="Ville" id="ville" name="ville"/>
            <select id="pays" name="pays">
                <option value="US">Etats-Unis</option>
                <option value="FR">France</option>
                <option value="CH">Suisse</option>
            </select>
        </span>
    </div>

    <div>
        <span> <label> Horraire:</label>  </span>
        <span id="horraire">

            <?php
            $_SESSION['uid'] = 'user21';
            if($_SESSION['uid'] == 'user21') echo '<input type="text" name="horraire_admin"/>';
            else include('vue/ajouter_restaurant/horraire.php')
            ?>
        </span>
    </div>

    <?php
    if($_SESSION['uid'] == 'user21'){
        ?>
        <div>
            <span> <label> Date d'ouverture :</label> </span>
            <span> <input type="text" name="date_ouverture"/>  </span>
        </div>

        <?php
    }
    ?>

    <div>
        <span> <label> Numéro de téléphone:</label> </span>
        <span> <input type="text" name="tel"/>  </span>
    </div>

    <div>
        <span>  <label> Site internet:</label> </span>
        <span> <input type="text" name="site_internet"/> </span>
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