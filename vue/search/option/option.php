<?php include('vue/search/option/francais/option.php');?>

	<li> <h2 class = "titreOption" id = "titreOptionDistance"> <?php echo $distance; ?> </h2> </li>
	<li>
		<input type="checkbox" class="distance" name="toutDistance" id="toutDistance" /> <label for="toutDistance" id="toutDistanceLabel"> <?php echo $tous; ?> </label><br />
		<input type="checkbox" class="distance" name="voiture" id="voiture" /> <label for="voiture" id="voitureLabel"> <?php echo $en_voiture; ?> </label><br />
		<input type="checkbox" class="distance" name="velo" id="velo" /> <label for="velo" id="veloLabel"> <?php echo $en_velo; ?> </label><br />
		<input type="checkbox" class="distance" name="pied" id="pied" /> <label for="pied" id="piedLabel"> <?php echo $a_pied; ?> </label><br />
		<input type="checkbox" class="distance" name="500m" id="500m" /> <label for="500m" id="500mLabel"> <?php echo $moins_500m; ?> </label><br />
	
	</li>
	
	<li>
		<h2 class = "titreOption" id = "titrePrix"><?php echo $prix; ?> </h2>
	</li>
	<li>
		<input type="checkbox" class="sous" name="toutPrix" id="toutPrix" /> <label for="toutPrix" id="toutPrixLabel"> <?php echo $tous; ?></label><br />
		<input type="checkbox" class="sous" name="$" id="$" /> <label for="$" id="$Label"><?php echo $devise; ?></label><br />
		<input type="checkbox" class="sous" name="$$" id="$$" /> <label for="$" id="$$Label">
            <?php
                for($i = 0; $i<2; ++$i){echo $devise;}
            ?>
        </label><br />
		<input type="checkbox" class="sous" name="$$$" id="$$$" /> <label for="$" id="$$$Label">
            <?php
            for($i = 0; $i<3; ++$i){echo $devise;}
            ?>
		</label><br />
		<input type="checkbox" class="sous" name="$$$$" id="$$$$" /> <label for="$" id="$$$$Label">
            <?php
            for($i = 0; $i<4; ++$i){echo $devise;}
            ?>
        </label><br />
		<input type="checkbox" class="sous" name="$$$$$" id="$$$$$" /> <label for="$" id="$$$$$Label">
            <?php
            for($i = 0; $i<5; ++$i){echo $devise;}
            ?>
		</label><br />
	</li>
	
	<li>
		<h2 class = "titreOption" id = "titreCuisine"><?php echo $type_cuisine; ?></h2>
	</li>
		
	<li>
        <!-- visible -->
        <div>
            <input class="cuisine" type="checkbox" name="toutCuisine" id="toutCuisine" />
            <label  class = "nonCacheCuisine" for="toutCuisine" id="toutCuisineLabel"> <?php echo $tous;?></label>
        </div>
        <?php include("vue/search/option/cuisine.php"); ?>
	</li>
	
	</li>
	<li class="+" id="cuisinesAvancees" >
        <?php echo $plus_cuisine; ?>
	</li>				
	<li>  
		<h2 class = "titreOption" id="titreFonctionnalite"><?php echo $fonctionnalite; ?></h2>
	</li>
	</li>
	<li id="fonctionsCachees">
        <!-- visible -->
        <div>
            <input class = "fonction" type="checkbox" name="toutFonction" id="toutFonction" />
            <label for="toutFonction" id="toutFonctionLabel"> <?php echo $tous; ?> </label>
        </div>
        <?php include("vue/search/option/fonctionnalite.php"); ?>
	</li>
	<li class="+" id="fonctionsAvancees">


        <?php echo $plus_fonctionnalite; ?>
	</li>

<script src = "<?php echo $GLOBALS['host'];?>/vue/search/option/js/coche.js"> </script>

<!-- pour pouvoir afficher plus d'option -->
<script src = "<?php echo $GLOBALS['host'];?>/vue/search/option/js/plus_option.js"> </script>

<script>
    // assure le bon fonctionnement des coches
    coche('toutDistance', 'distance');
    coche('toutPrix', 'sous');
    coche('toutCuisine', 'cuisine');
    coche('toutFonction', 'fonction');

    plusDOption('cuisinesAvancees', 'cacheCuisine');
    plusDOption('fonctionsAvancees', 'cacheFonction');

</script>
