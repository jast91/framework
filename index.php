<?php

// windows -->\
// unix --->/

define("DS",DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATH", ROOT ."aplication".DS);

/*echo DS;
echo "<br>";
echo ROOT;
echo "<br>";
echo APP_PATH;
*/
require_once(APP_PATH."config.php");
require_once(APP_PATH."request.php");
require_once(APP_PATH."bootstrap.php");
require_once(APP_PATH."controller.php");
require_once(APP_PATH."model.php");
require_once(APP_PATH."view.php");
try {
	bootstrap:: run(new request);
	} catch(Exception $e){
		echo $e ->getMessage;
	}	

/*
/*echo "<pre>";
print_r(get_required_files());
*/
/*

if (isset($_GET['url'])){
	$url = filter_input(INPUT_GET, 'url',FILTER_SANITIZE_URL);
	$url = explode("/", $url);
	$url = array_filter($url);


	$controller = array_shift($url);
	$action = array_shift($url);
	$args = $url;
}

/*echo $controller;
echo "<br>";
echo $action;
echo "<br>";
print_r($args);*/
/*

if(!isset($controller)){
$controller = "pages";
}
if(!isset($action)){
$action ="index";
}
if(!isset($args)){
$args = array(0=>null);
}

$path = ROOT."controllers".DS.$controller."controller.php";
$view = ROOT ."views".DS.$controller.DS.$action.".php";
$header =ROOT ."views".DS."layouts".DS."default".DS."header.php";
$footer =ROOT ."views".DS."layouts".DS."default".DS."footer.php";


if(file_exists($path)){
	include_once($path);
	$ob = new $controller();
	$ob->$action($args);

	if (file_exists($view)) {
		include_once($header);
		include_once($view);
		include_once($footer);

	}else{
		echo "La vista para la accion $action no existe";
	}
}else{
	echo "El controlador $controller no existe";	
}*/