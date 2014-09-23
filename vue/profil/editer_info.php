<article id="editer_info_profil" style="display: none;">
    <form action="" method="post" id="form_mise_a_jour" enctype="multipart/form-data">

        <?php
        if($profil_JSON->picture) $src_photo = 'data:image/png;base64,' . $profil_JSON->picture->thumbnail; // peut etre rajouter [0] a picture
        else $src_photo = $_SESSION['photo_profil_vide'];
        ?>
        <img src="<?php echo $src_photo;?>" id="photo_profil_img"/>
        <input type="file" name="photo_profil" id="photo_profil_input"/>

        <ul>
            <li>
                <span> <label for="new_name">Nom complet : </label> </span>
                <span> <input type="text" value="<?php echo $profil_JSON->name;?>" name="new_name" id="new_name"/> </span>
            </li>
            <li>
                <span> <label for="">Ville présent actuellement : </label> </span>
                        <span>
                            <input type="search" value="<?php echo $profil_JSON->location;?>"/>
                            <select>
                                <option> Pays</option>
                            </select>
                        </span>

            </li>
            <li>
                <span> <label for=""> Date de naissance : </label> </span>
                        <span>

                            <?php

                            include('vue/profil/francais.php');


                            $birthday_jour = -1;
                            $birthday_mois = -1;
                            $birthday_annee = -1;
                            if($profil_JSON->birthday){
                                $birthday = explode('-', $profil_JSON->birthday);
                                $birthday_jour = $birthday[2];
                                $birthday_mois = $birthday[1];
                                $birthday_annee = $birthday[0];
                            }

                            ?>
                            <!-- jour -->
                        <select name="jourDeNaissance" id='jour'>
                            <option value="null"> <?php echo $jour; ?> </option>
                            <?php
                            for($i = 1; $i <= 31; ++$i){
                                echo '<option value="'.$i.'"';
                                if($birthday_jour == $i) echo 'selected';
                                echo '>'.$i.'</option>';
                            }
                            ?>
                        </select>

                        <!-- mois -->
                         <select name="moisDeNaissance" id='mois'>
                             <option value="null"> <?php echo $mois; ?> </option>

                             <option value="1" <?php if($birthday_mois == '1') echo 'selected'?> >
                                 <?php echo $jan; ?> </option>

                             <option value="2" <?php if($birthday_mois == '2') echo 'selected'?>>
                                 <?php echo $fev; ?></option>

                             <option value="3" <?php if($birthday_mois == '3') echo 'selected'?>>
                                 <?php echo $mars; ?> </option>

                             <option value="4" <?php if($birthday_mois == '4') echo 'selected'?>>
                                 <?php echo $avr; ?> </option>

                             <option value="5" <?php if($birthday_mois == '5') echo 'selected'?>>
                                 <?php echo $mai; ?> </option>

                             <option value="6" <?php if($birthday_mois == '6') echo 'selected'?>>
                                 <?php echo $juin; ?> </option>

                             <option value="7" <?php if($birthday_mois == '7') echo 'selected'?>>
                                 <?php echo $juil; ?> </option>

                             <option value="8" <?php if($birthday_mois == '8') echo 'selected'?>>
                                 <?php echo $aout; ?> </option>

                             <option value="9" <?php if($birthday_mois == '9') echo 'selected'?>>
                                 <?php echo $sep; ?> </option>

                             <option value="10" <?php if($birthday_mois == '10') echo 'selected'?>>
                                 <?php echo $oct; ?> </option>

                             <option value="11" <?php if($birthday_mois == '11') echo 'selected'?>>
                                 <?php echo $nov; ?> </option>

                             <option value="12" <?php if($birthday_mois == '12') echo 'selected'?>>
                                 <?php echo $dec; ?> </option>
                         </select>



                        <!-- annee -->
                        <select name="anneeDeNaissance" id='annee'>
                            <option value="null"> <?php echo $annee; ?> </option>
                            <?php
                            for($i = 2014; $i >= 1900; --$i){
                                echo '<option value="'.$i.'"';
                                if($birthday_annee == $i) echo 'selected';
                                echo '>'.$i.'</option>';
                            }
                            ?>
                        </select>

                        <p id="message_check_date"> </p>

                        </span>
            </li>
        </ul>

        <div class="div_annuler_publier">
            <p id="annuler_profil">Annuler</p>
            <input type="button" value="Valider" id="envoie_mise_a_jour"/>
        </div>

    </form>
</article>