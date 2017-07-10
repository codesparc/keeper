<?php
 
 class Url{

 	public static function protocol(){
 		
 		return isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
 	}

 	public static function baseurl(){

 		return self::protocol().$_SERVER['SERVER_NAME'].'/keeper/';
 	}

 	public static function basepath(){

 		return  APP_ROOT . '/../';
 	}

 	public static function plugins(){

 		return self::baseurl().'static/plugins/';
 	}

 	public static function assets(){
 		 return self::baseurl().'static/assets/';
 	}

 }


?>

