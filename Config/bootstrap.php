<?php

//bootstrap.php


require dirname(__FILE__) . "/../Lib/DB.php";
require dirname(__FILE__) . "/../Lib/Cache.php";
require dirname(__FILE__) . "/../Lib/Configure.php";


$config = Configure::load();

if ( empty($config['db'] ) ){
	echo "Error no existe la configuracion de base de datos";
	die();

}

if ( empty($config['twitter'] ) ){
	echo "Error no existe la configuracion authenticacion de twitter";
	die();

}


