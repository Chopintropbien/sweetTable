<?php

// editer une revue
if($_POST['note'] != 0 && isset($_POST['titre']) && isset($_POST['revue']) && $_POST['uid_revue']){
    include('model/modifie_revue.php');
    echo $_POST['uid_revue'];
    echo $_POST['titre'];
    modifie_revue($_POST['uid_revue'], $_POST['titre'], $_POST['revue'], $_POST['note']);
}