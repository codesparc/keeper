<?php
/**
 Application Configuration
*/
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