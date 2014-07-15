
<?php include('vue/connexion/francais/formulaireInscription.php'); ?>

<form action="http://localhost/meittopi/controleur/connexion/inscription.php" method="post" id="inscription" >

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
        <!-- a faire au javascrip -->

    </table>

    <table id="dateEtGenre">
        <tr>
        <tr>
            <td> <h3 id="dateDeNaissanceTitre"><?php echo $votreDateDeNaissance; ?></h3> </td>
        </tr>
        <td>
            <!-- jour -->
            <select name="jourDeNaissance" class="date" id='jour'>
                <option value="jour"> <?php echo $jour; ?> </option>
                <?php
                for($i = 1; $i <= 31; ++$i){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>

            <!-- mois -->
            <select name="moisDeNaissance" class="date" id='mois'>
                <option value="mois"> <?php echo $mois; ?> </option>
                <option value="1"> <?php echo $jan; ?> </option>
                <option value="2"> <?php echo $fev; ?></option>
                <option value="3"> <?php echo $mars; ?> </option>
                <option value="4"> <?php echo $avr; ?> </option>
                <option value="5"> <?php echo $mai; ?> </option>
                <option value="6"> <?php echo $juin; ?> </option>
                <option value="7"> <?php echo $juil; ?> </option>
                <option value="8"> <?php echo $aout; ?> </option>
                <option value="9"> <?php echo $sep; ?> </option>
                <option value="10"> <?php echo $oct; ?> </option>
                <option value="11"> <?php echo $nov; ?> </option>
                <option value="12"> <?php echo $dec; ?> </option>
            </select>

            <!-- annee -->
            <select name="anneeDeNaissance" class="date" id='annee'>
                <option value="annee" id="annee"> <?php echo $annee; ?> </option>
                <?php
                for($i = 2014; $i >= 1900; --$i){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>


        </td>
        </tr>
        <tr>
            <td>
                <input type="radio" name="sexe" value="f" id="femme" class="genre"/>
                <label for="femme"  name="sex" class='genre' id="femmeLabel"><?php echo $femme; ?></label>
                <input type="radio" name="sexe" value="h" id="homme" class="genre"/>
                <label for="homme"  name='sex' class='genre' id="hommeLabel"><?php echo $homme; ?></label>
            </td>
        </tr>
        <tr>
            <td><input type="button" value="<?php echo $inscription; ?>" id="creerUnCompte" /> </td>
        </tr>
    </table>
</form>

<!-- script de verification si le formulaire est bien remplie -->
<script src = "http://localhost/meittopi/vue/objetXMLHttpRequest.js"> </script>
<script src = "http://localhost/meittopi/vue/connexion/formulaireInscriptionVerificationChamp.js"> </script>





