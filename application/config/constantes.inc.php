<?php
define('SEL', 'P4T4T0Z0R');
define('ENV', 'DEV');

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
define('HOST_ADMIN', HOST.'admin/');
define('HOST_PUBLIC', HOST.'public/');
define('TEMPLATES_DIR', 'application/view/');
define('LAYOUTS_DIR', TEMPLATES_DIR.'layouts/');
define('CONTROLLERDIR', 'controller/');
define('ASSETSDIR', HOST.'application/assets/');
define('IMAGESDIR', ASSETSDIR.'images/');
define('DEFAULT_ACTION', 'home');
define('DEFAULT_SITE', 'admin');
define('DEFAULT_MODULE', 'home');
