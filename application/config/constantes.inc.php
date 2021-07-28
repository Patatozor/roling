<?php
define('SEL', 'P4T4T0Z0R');
define('ENV', 'TEST');

switch(ENV){
// Mode environnement de test
    case 'TEST':
			define('HOST', 'https://patatozor.ovh/roling/');		
			break;
		case 'PROD':
			define('HOST', 'https://patatozor.ovh/roling/');
			break;
		case 'DEV':
			define('HOST', 'http://localhost/roling/');
			break;
}
define('APPDIR', 'application/');
define('ADMINURL', HOST.'admin/');
define('PUBLICURL', HOST.'public/');
define('TEMPLATES_DIR', APPDIR.'view/');
define('CONTROLLERDIR', APPDIR.'controller/');
define('MODELDIR', APPDIR.'model/');
define('ASSETSDIR', HOST.APPDIR.'assets/');
define('LAYOUTS_DIR', TEMPLATES_DIR.'layouts/');
define('IMAGESDIR', ASSETSDIR.'images/');
define('DEFAULT_ACTION', 'home');
define('DEFAULT_SITE', 'admin');
define('DEFAULT_MODULE', 'home');
