<?php

class Configure {
	
	static public function load(){
		require dirname(__FILE__) . "/../Config/settings.php";		
		return $settings;
	}
}
