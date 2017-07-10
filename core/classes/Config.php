<?php
/**
* 
*/
class Config{
	
	public static function get($path=null){

		if($path){
			$config=explode('/',$path);
			foreach ($config as $key => $value) {
				# code...
			}
		}

		print_r($config);
	}


}

?>