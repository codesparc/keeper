<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set("display_errors","on");
define('APP_ROOT', __DIR__);

/*$GLOBALS['config']=array(
	'mysql'=>array(
		'host'=>"localhost",
		'user'=>"root",
		'pass'=>"root",
		'db'=>"keeper"
	)
);
*/

spl_autoload_register(function($class){
 require_once APP_ROOT.'/classes/'.$class.'.php';
});
?>