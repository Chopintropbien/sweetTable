<?php include('../vue/profil/navigateur/francais.php'); ?>

<nav id="navProfil">
	<ul>
		<a href="http://localhost/meittopi/profil/monProfil.php">
			<li class="rechercheProfil" id = "profilNav"><?php echo $monProfil; ?></li>
		</a>
		
		<a href="http://localhost/meittopi/profil/revue.php">
			<li class="rechercheProfil"  id = "listeNav"> <?php echo $mesRevue; ?> </li>
		</a>
		
		<a href=" http://localhost/meittopi/profil/liste.php">
			<li class="rechercheProfil" id = "amisNav"> <?php echo $mesListe; ?> </li>
		</a>

		<a href="http://localhost/meittopi/profil/evenement.php">
			 <li class="rechercheProfil" id = "evenementNav">  <?php echo $lesEvenement; ?></li>
		</a>
		
		<a href="http://localhost/meittopi/profil/amis.php">
			 <li class="rechercheProfil" id = "suivisNav"> <?php echo $mesAmis; ?> </li>
		</a>
		
		<a href="http://localhost/meittopi/profil/compliment.php">
			<li class="rechercheProfil" id = "complimentNav"> <?php echo $mesCompliment; ?>  </li>
		</a>
		
	</ul>

</nav>

