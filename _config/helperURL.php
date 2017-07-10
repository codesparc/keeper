<?php
/**
 Application Configuration
*/
 ini_set('error_reporting', 'E_ALL');
 ini_set("display_errors","on");

 class helperURL
 {	
    function protocol(){
    	return isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
    }
	function serverURL(){	
		return self::protocol().$_SERVER['HTTP_HOST'];
	}

	function baseURL(){	  
	  return self::serverURL().'/keeper/';
	}

	public static function basepath(){
		return dirname(__DIR__);
	}

	function configURL(){
		return self::baseURL().'config/';
	}
 	
	function includeURL(){		
		return self::baseURL().'includes/';
	}
	
	function includeFunc(){
		return self::baseURL().'functions/';
	}

	function assetsURL(){
		return self::baseURL().'static/assets/';
	}

	function pluginsURL(){
		return self::baseURL().'static/plugins/';
	}
 } 
?>