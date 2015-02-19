<?php



require dirname(__FILE__) . "/../Vendor/autoload.php";
require dirname(__FILE__) . "/../Config/bootstrap.php";

require dirname(__FILE__) . "/../Lib/TwitterAPI.php";
require dirname(__FILE__) . "/../Lib/TwitterDumper.php";



function dumpTwitterSearchToDB ( $tag = '' , $count = 100,  $verbose = false ) {


	$config = Configure::load();
	
	$db = new DB( $config['db'] );
	$twitter = new TwitterAPI( $config['twitter'] );
	
	$dumper = new TwitterDumper( $db , $twitter );
	$dumped = $dumper->dump( $tag , $count,  $verbose );
	
	printf( "\ntotal volcados %d\n", $dumped );

}



$verbose = true ;


if ( empty( $argv[1] ) ) 
	die( "Error se necesita un tag a buscar" );
	
$tag= $argv[1];


$count = 100;
if ( ! empty( $argv[2] ) ) 
	$count = intval($argv[2]);


dumpTwitterSearchToDB( $tag , $count, $verbose ) ;
