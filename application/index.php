<?php
include_once 'config/prepend.inc.php';

if (isset($_GET['site']) && isset($_GET['module']) && file_exists(CONTROLLERDIR.$_GET['site'].'/'.$_GET['module'].'Controller.php')){
	$site = $_GET['site'];
	$module = $_GET['module'];
}
else
{
	$site = DEFAULT_SITE;
	$module = DEFAULT_MODULE;
}

include_once CONTROLLERDIR.$site.'/'.$module.'Controller.php';
$model_file = MODELDIR.$module.'Model.php';
$controller = $module.'Controller';



if (file_exists($model_file)){
	include_once $model_file;
	$model = 1;
}
else
{
	$model = 0;
}
new $controller($model, $module, $site);

if (MODE_DEBUG)
{
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	if (isset($_GET['site']))
		echo "site: ".$_GET['site']."<br/>";
	if (isset($_GET['module']))
		echo "module: ".$_GET['module']."<br/>";
	if (isset($_GET['action']))
		echo "action: ".$_GET['action']."<br/>";
	if (isset($_GET['module']) && !file_exists(CONTROLLERDIR.$_GET['site'].'/'.$_GET['module'].'Controller.php'))
		echo CONTROLLERDIR.$_GET['site'].'/'.$_GET['module']."Controller.php n\'est pas un fichier existant<br/>";
	echo "fichier calculé: ".CONTROLLERDIR.$site.'/'.$module.'Controller.php<br/>';
	echo "controller calculé: ".$controller;
}