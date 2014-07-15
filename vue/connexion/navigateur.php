<?php include('vue/connexion/francais/navigateur.php'); ?>

<img src="http://localhost/Meittopi/image/logoSweetTable.png" alt="SweetTable" id="logo"/>
<form action="http://localhost/meittopi/acceuil.php" method="post"  id="tableau">

    <table>
        <tr>
            <td id="titreEmail"> <?php echo $adresseEmail; ?> </td>
            <td id="titreMotDePasse"> <?php echo $motDePasse; ?></td>
        </tr>
        <tr>
            <td> <input type="email" name="emailInscrit" id="emailC" /> </td>
            <td> <input type="password" name="motdepasseInscrit"  id="motdepasseC"/> </td>
            <td> <input type="submit" value="<?php echo $connexion; ?>" id="loupe" /> </td>
        </tr>
        <tr id="moinsImportant">
            <td> <input type="checkbox" name="sectionActive" id="sectionActive"/>
                <label for="sectionActive" id="gardersection"><?php echo $garderSectionActive; ?></label>
            </td>
            <td id="titreMotDePasseOubliee"> <?php echo $motDePasseOublie; ?> </td>
        </tr>
    </table>

</form>

