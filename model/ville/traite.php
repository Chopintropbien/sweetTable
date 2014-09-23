<?php

// ajoute les cantons pour la suisse
include('../ajoute_location.php');
include('../attache_location.php');
include('../ajoute_restaurant_db.php');

// ajoute la suisse
//var_dump(ajoute_location('CH', 'country', 'Suisse'));
//ajoute_location('CH_GPS', 'GPS', 'lat=46.94809&log=7.44744');
//attache_location('CH', 'CH_GPS');

//ajoute_location('AA', 'country', 'payts', '69.77,41.34', 3000000000000);

//ajoute_restaurant_db('coucou', 'coucou', '1 septembre 2014', 'lu,ma');
//attache_location('AA', '8EY79P');
//ajoute_restaurant_db('jaime', 'Chez J\'aime', '1 septembre 2014', 'lu,ma');
//attache_location('FR', 'jaime');
//ajoute_restaurant_db('jaime', 'les artichaux', '1 septembre 2014', 'lu,ma');
//var_dump(attache_location('FR', 'jaime'));

/*
// ajoute des canton a la suisse
ajoute_location('CH_ZR', 'region', 'Zurich');
ajoute_location('CH_ZR_GPS', 'GPS', 'lat=47.36667&log=8.55');
attache_location('CH', 'CH_ZR');

ajoute_location('CH_BE', 'region', 'Berne');
ajoute_location('CH_BE_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_BE');

ajoute_location('CH_LU', 'region', 'Lucerne');
ajoute_location('CH_LU_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_LU');

ajoute_location('CH_UR', 'region', 'Uri');
ajoute_location('CH_UR_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_UR');

ajoute_location('CH_SZ', 'region', 'Schwytz');
ajoute_location('CH_SZ_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_SZ');

ajoute_location('CH_OW', 'region', 'Obwald');
ajoute_location('CH_OW_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_OW');

ajoute_location('CH_NW', 'region', 'Nidwald');
ajoute_location('CH_NW_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_NW');

ajoute_location('CH_GL', 'region', 'Glaris');
ajoute_location('CH_GL_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_GL');

ajoute_location('CH_ZG', 'region', 'Zoug');
ajoute_location('CH_ZG_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_ZG');

ajoute_location('CH_FR', 'region', 'Fribourg');
ajoute_location('CH_FR_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_FR');

ajoute_location('CH_SO', 'region', 'Soleure');
ajoute_location('CH_SO_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_SO');

ajoute_location('CH_BS', 'region', 'Bâle-Ville');
ajoute_location('CH_BS_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_BS');

ajoute_location('CH_BL', 'region', 'Bâle-Campagne');
ajoute_location('CH_BL_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_BL');

ajoute_location('CH_SH', 'region', 'Schaffhouse');
ajoute_location('CH_SH_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_SH');

ajoute_location('CH_AR', 'region', 'Appenzell Rhodes-Extérieures');
ajoute_location('CH_AR_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_AR');

ajoute_location('CH_AI', 'region', 'Appenzell Rhodes-Intérieures');
ajoute_location('CH_AI_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_AI');

ajoute_location('CH_SG', 'region', 'Saint-Gall');
ajoute_location('CH_SG_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_SG');

ajoute_location('CH_GR', 'region', 'Grisons');
ajoute_location('CH_GR_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_GR');

ajoute_location('CH_AG', 'region', 'Argovie');
ajoute_location('CH_AG_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_AG');

ajoute_location('CH_TG', 'region', 'Thurgovie');
ajoute_location('CH_TG_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_TG');

ajoute_location('CH_TI', 'region', 'Tessin');
ajoute_location('CH_TI_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_TI');

ajoute_location('CH_VD', 'region', 'Vaud');
ajoute_location('CH_VD_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_VD');

ajoute_location('CH_VS', 'region', 'Valais');
ajoute_location('CH_VS_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_VS');

ajoute_location('CH_NE', 'region', 'Neuchâtel');
ajoute_location('CH_NE_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_NE');

ajoute_location('CH_GE', 'region', 'Genève');
ajoute_location('CH_GE_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_GE');

ajoute_location('CH_JU', 'region', 'Jura');
ajoute_location('CH_JU_GPS', 'GPS', 'lat=46.94809&log=7.44744');
attache_location('CH', 'CH_JU');



$results = array();
$file = fopen("ville.txt","r");
$i = 0;

// traite la base de donne recuperer sur internet pour
//  - faire un fichier texte qui servira au systeme d auto-complexion
//  - rentrer ces informatons dans la base de donne
while(! feof($file) && $i < 10){
    $ligne = fgetcsv($file, 0, "\n");

    $ville = explode("\t", $ligne[0]);
    for($j = 0; $j < count($ville); ++$j){
        echo ($ville[$j]);
    }


    ++$i;
}
fclose($file); */
