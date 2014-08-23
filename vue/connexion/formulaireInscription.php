
<?php include('vue/connexion/francais/formulaireInscription.php'); ?>

<form action="home.php" method="post" id="inscription" >

    <table>
        <tr>
            <td> <h1 id="creerUnCompteTitre"> <?php echo $creerUnCompte; ?> </h1> </td>
        </tr>
        <tr>
            <td> <input type="text" name="prenom" id="prenomjava" placeholder="<?php echo $prenom; ?>" class="petitChamp"/>
                <input type="text" name="nom" id="nomjava" placeholder="<?php echo $nomDeFamille; ?>" class="petitChamp"/> </td>
        </tr>
        <tr>
            <td><input type="email" name="email" id="email" placeholder="<?php echo $votreAdressEmail; ?>" class='grandChamp'/> </td>
        </tr>
        <tr>
            <td> <input type="email" name="confirmemail" id="confirmemail" placeholder=" <?php echo $confirmerVotreAdresseEmail; ?>" class='grandChamp' /></td>
        </tr>
        <td> <input type="password" name="motdepasse" id="motdepasse" placeholder=" <?php echo $motDePasse; ?>" class='grandChamp'/> </td>
        </tr>

        <tr>
            <td> <h3 id="ville_titre"><?php echo $ville_d_habitation; ?></h3> </td>
        </tr>

        <tr>
            <td>
                <span id="span_ville">
                    <input type="hidden" name="uid_ville"/>
                    <input type="text" autocomplete="off" placeholder="Ville" id="ville" name="ville" class="petitChamp"/>
                    <div id="ville_search" style="display: none;"> </div>
                </span>

                <select id="pays" name="pays">
                    <option value="null"> Pays</option>
                    <option value="US">Etats-Unis</option>
                    <option value="FR">France</option>
                    <option value="CH">Suisse</option>
                </select>
            </td>
        </tr>

        <tr  id="button_inscription">
            <td><input type="button" value="<?php echo $inscription; ?>" id="creerUnCompte" class="important_button" /> </td>
        </tr>
    </table>

</form>

<!-- script de verification si le formulaire est bien remplie -->
<script src = "<?php echo $GLOBALS['host'];?>/controller/connexion/formulaireInscriptionVerificationChamp.js"> </script>


<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/add_event.js"></script>
<script src="<?php echo $GLOBALS['host'];?>/controller/js_function/auto_complexion.js">  </script>
<script>
    autoComplexion('ville', 'ville_search', 'http://localhost/sweettable/controller/navigator/lieu.php');
</script>




