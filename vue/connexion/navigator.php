<?php include('vue/connexion/francais/navigateur.php'); ?>

<nav id="main_nav">

    <a href="<?php echo $GLOBALS['host'];?>/home.php">
        <img src="<?php echo $GLOBALS['host'];?>/vue/image/logo_sweettable.png"/>
    </a>

    <form action="" method="post">

        <table>
            <tr>
                <td> <?php echo $adresseEmail; ?> </td>
                <td> <?php echo $motDePasse; ?></td>
            </tr>
            <tr>
                <td> <input type="email" name="emailInscrit"/> </td>
                <td> <input type="password" name="motdepasseInscrit"/> </td>
                <td>
                    <button value="submit" type="submit">
                        <?php echo $connexion; ?>
                    </button>
            </tr>
            <tr>
                <td class="moinsImportant"> <input type="checkbox" name="sectionActive" id="sectionActive"/>
                    <label for="sectionActive"><?php echo $garderSectionActive; ?></label>
                </td>
                <td  class="moinsImportant"> <?php echo $motDePasseOublie; ?> </td>
            </tr>
        </table>

    </form>

</nav>