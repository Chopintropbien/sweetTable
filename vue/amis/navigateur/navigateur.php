<?php include('../vue/amis/navigateur/francais.php'); ?>

<nav id="navProfil">
    <ul>
        <a href="http://localhost/meittopi/amis/rechercher-amis.php">
            <li class="rechercheProfil" id = "profilNav"><?php echo $rechercher; ?></li>
        </a>

        <a href="http://localhost/meittopi/amis/inviter-amis.php">
            <li class="rechercheProfil"  id = "listeNav"> <?php echo $inviter; ?> </li>
        </a>

        <a href=" http://localhost/meittopi/amis/facebook.php">
            <li class="rechercheProfil" id = "amisNav"> <?php echo $facebook; ?> </li>
        </a>
    </ul>

</nav>