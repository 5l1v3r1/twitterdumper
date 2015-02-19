<?php


$settings['db']  = array(
    'dbname' => 'critizen',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$settings['twitter'] = array (
	'consumer_key' => '',
	'consumer_secret' => ''  , 
	'access_token' => '' , 
	'access_token_secret' => '' 
	
); 

$settings['cache'] = array ( 
	'driver' => 'memcached',
	'memcached' => array(
	    'host' => 'localhost',
    	'port' => 11211,
    )
);
