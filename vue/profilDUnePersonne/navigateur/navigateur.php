<?php include('../vue/profilDUnePersonne/navigateur/francais.php'); ?>

<nav id="navProfil">
	<ul>
		<a href="http://localhost/meittopi/profilDUnePersonne/profil.php">
			<li class="rechercheProfil" id = "profilNav"><?php echo $sonProfil; ?></li>
		</a>
		
		<a href="http://localhost/meittopi/profilDUnePersonne/revue.php">
			<li class="rechercheProfil"  id = "listeNav"> <?php echo $sesRevue; ?> </li>
		</a>
		
		<a href="http://localhost/meittopi/profilDUnePersonne/amis.php">
			 <li class="rechercheProfil" id = "suivisNav"> <?php echo $sesAmis; ?> </li>
		</a>
		
		<a href="http://localhost/meittopi/profilDUnePersonne/compliment.php">
			<li class="rechercheProfil" id = "complimentNav"> <?php echo $sesCompliment; ?>  </li>
		</a>
		
	</ul>

</nav>

