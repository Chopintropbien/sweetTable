
<h4>Question pour aider les autres utilisateur</h4>
<ul>


    <?php
    // les questions a afficher
    $i = rand(0, 19);

    $j = rand(0, 19);
    while($j == $i) $j = rand(0, 19);

    $k = rand(0, 19);
    while($k == $i || $k == $j) $k = rand(0, 19);

    $l = rand(0, 19);
    while($l == $i || $l == $j || $l == $k) $l = rand(0, 19);

    ?>

    <li <?php $nb = 0; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?> >
        <p> Ce restaurant propose-t-il des plats à emporter ? </p>
        <input type="radio" name="aEmporter" value="oui"/> <label> Oui</label>
        <input type="radio" name="aEmporter" value="non"<label> Non</label>
        <input type="radio" name="aEmporter" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 1; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant a-t-il un buffet ? </p>
        <input type="radio" name="buffet" value="oui"/> <label> Oui</label>
        <input type="radio" name="buffet" value="non"<label> Non</label>
        <input type="radio" name="buffet" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 2; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant a-t-il un buffet à volonté ? </p>
        <input type="radio" name="buffetVolonte" value="oui"/> <label> Oui</label>
        <input type="radio" name="buffetVolonte" value="non"<label> Non</label>
        <input type="radio" name="buffetVolonte" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 3; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant propose-t-il un large choix de bière et de vin?</p>
        <input type="radio" name="BiereVin" value="oui"/> <label> Oui</label>
        <input type="radio" name="BiereVin" value="non"<label> Non</label>
        <input type="radio" name="BiereVin" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 4; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-t-il sous form de café concert ? </p>
        <input type="radio" name="CafeConcert" value="oui"/> <label> Oui</label>
        <input type="radio" name="CafeConcert" value="non"<label> Non</label>
        <input type="radio" name="CafeConcert" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 5; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant accepte-t-il les cartes de crédit ? </p>
        <input type="radio" name="carteCredit" value="oui"/> <label> Oui</label>
        <input type="radio" name="carteCredit" value="non"<label> Non</label>
        <input type="radio" name="carteCredit" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 6; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-t-il adapté aux enfants en bas age ? </p>
        <input type="radio" name="enfantBasAge" value="oui"/> <label> Oui</label>
        <input type="radio" name="enfantBasAge" value="non"<label> Non</label>
        <input type="radio" name="enfantBasAge" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 7; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-il adapté aux grande occasion ? </p>
        <input type="radio" name="grandeOccasion" value="oui"/> <label> Oui</label>
        <input type="radio" name="grandeOccasion" value="non"<label> Non</label>
        <input type="radio" name="grandeOccasion" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 8; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-il ouvert jusqu'au bout de la nuit ? </p>
        <input type="radio" name="boutDeLaNuit" value="oui"/> <label> Oui</label>
        <input type="radio" name="boutDeLaNuit" value="non"<label> Non</label>
        <input type="radio" name="boutDeLaNuit" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 9; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant fait-t-il des livraisons à domicile ? </p>
        <input type="radio" name="livraison" value="oui"/> <label> Oui</label>
        <input type="radio" name="livraison" value="non"<label> Non</label>
        <input type="radio" name="livraison" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 10; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-il aménagé pour les personnes à mobilité réduite ?</p>
        <input type="radio" name="mobiliteReduite" value="oui"/> <label> Oui</label>
        <input type="radio" name="mobiliteReduite" value="non"<label> Non</label>
        <input type="radio" name="mobiliteReduite" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 11; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant a-t-il un beau panorama ?</p>
        <input type="radio" name="panorama" value="oui"/> <label> Oui</label>
        <input type="radio" name="panorama" value="non"<label> Non</label>
        <input type="radio" name="panorama" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 12; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant propose-t-il des petits-déjeuners ou des brunchs ?</p>
        <input type="radio" name="mobiliteReduite" value="oui"/> <label> Oui</label>
        <input type="radio" name="mobiliteReduite" value="non"<label> Non</label>
        <input type="radio" name="mobiliteReduite" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 13; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-il adapté aux groupes ? </p>
        <input type="radio" name="groupes" value="oui"/> <label> Oui</label>
        <input type="radio" name="groupes" value="non"<label> Non</label>
        <input type="radio" name="groupes" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 14; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-il adapté aux repas d'affaire ? </p>
        <input type="radio" name="repasAffaires" value="oui"/> <label> Oui</label>
        <input type="radio" name="repasAffaires" value="non"<label> Non</label>
        <input type="radio" name="repasAffaires" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 15; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant est-il romantique ? </p>
        <input type="radio" name="romantique" value="oui"/> <label> Oui</label>
        <input type="radio" name="romantique" value="non"<label> Non</label>
        <input type="radio" name="romantique" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 16; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant accepte-t-il les réservation ? </p>
        <input type="radio" name="reservation" value="oui"/> <label> Oui</label>
        <input type="radio" name="reservation" value="non"<label> Non</label>
        <input type="radio" name="reservation" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 17; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant possède-t-il une télévision ? </p>
        <input type="radio" name="tele" value="oui"/> <label> Oui</label>
        <input type="radio" name="tele" value="non"<label> Non</label>
        <input type="radio" name="tele" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 18; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant possède-t-il une terrasse extérieur ? </p>
        <input type="radio" name="terrasse" value="oui"/> <label> Oui</label>
        <input type="radio" name="terrasse" value="non"<label> Non</label>
        <input type="radio" name="terrasse" value="bof"<label> Je ne sais pas</label>
    </li>

    <li <?php $nb = 19; if($nb != $i && $nb != $j && $nb != $k && $nb != $l) echo 'style="display: none;"';?>>
        <p> Ce restaurant propose-t-il une connexion wifi ? </p>
        <input type="radio" name="terrasse" value="oui"/> <label> Oui</label>
        <input type="radio" name="terrasse" value="non"<label> Non</label>
        <input type="radio" name="terrasse" value="bof"<label> Je ne sais pas</label>
    </li>


</ul>