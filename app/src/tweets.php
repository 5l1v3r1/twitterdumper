<?php 

//tweets

require dirname(__FILE__) . "../../../Vendor/autoload.php";
require dirname(__FILE__) . "../../../Config/bootstrap.php";



function smartyDump( $content ){

	$smarty = new Smarty();
	$smarty->setTemplateDir( dirname(__FILE__) . '/../templates' );
	$smarty->assign( 'content' , $content  );
	$smarty->display('raw.tpl');

}

function rawDump( $content ){
	echo $content ;
}



function getTweets() {

	$config = Configure::load();
	
	$db = new DB( $config['db'] );

	if ( ! empty( $config['cache']['driver'] ) ) {
			
		$cache = new Cache( $config['cache'] );
		$db->setCache ( $cache );
	}

	$sql = "select * from tweets";
	$tweets = $db->query( $sql ); 

	return $tweets ;
	
}

$tweets = getTweets( );
$content = json_encode( $tweets ) ;

//smartyDump( $content );
rawDump( $content );

