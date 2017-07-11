<?php
/**
* 
*/
class Config{
	
	public static function get($path=null){

		if($path){
			$path=explode('/',$path);			
			$config=$GLOBALS['config'];
			foreach ($path as $bit) {
				if(isset($config[$bit])){
					$config=$config[$bit];
					var_dump($config);
				}
			}
		 return $config;
		}

		return false;
	}


}

?>