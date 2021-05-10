<?php
/* Consignes d'utilisation:
-faites une copie de ce fichier sous le nom de fichier: db.constantes.inc.php dans le même dossier, l'extension finale
doit être php
-remplacez les valeurs entre chevrons (exemple: <db host>) par les valeurs appropriées
-c'est prêt!
*/

require_once 'constantes.inc.php';

switch(ENV){
// Mode environnement de test
    case 'TEST':
        define('DBHOST', 'patatoipatate.mysql.db');
        define('DBLOGIN', 'patatoipatate');
        define('DBPW', 'Azerf0605');
        define('DBNAME','patatoipatate');
        define('DBENC', 'utf8');
        define('MODE_DEBUG', true);
        break;

//Mode environnement de développement
    case 'DEV':
        define('DBHOST', 'localhost');
        define('DBLOGIN', 'root');
        define('DBPW', '');
        define('DBNAME','roling');
        define('DBENC', 'utf8');
        define('MODE_DEBUG', true);
        break;

//Mode environnement de production
    case 'PROD':
        define('DBHOST', 'patatoipatate.mysql.db');
        define('DBLOGIN', 'patatoipatate');
        define('DBPW', 'Azerf0605');
        define('DBNAME','patatoipatate');
        define('DBENC', 'utf8');
        define('MODE_DEBUG', false);
        break;
}