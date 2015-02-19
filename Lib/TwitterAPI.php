<?php


use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterAPI  {

	private $_conn ;

	function __construct( $config ) {
		$default = array ( 
			'consumer_key' => null ,
			'consumer_secret' => null  , 
			'access_token' => null , 
			'access_token_secret' => null ) ;
			
		extract ( array_intersect_key( $config , $default ) );
		
		$this->_conn = new TwitterOAuth( $consumer_key, $consumer_secret , $access_token, $access_token_secret);

	}

	
	public function getByTag( $tag ='' , $count = 100 ){ 
	
		$request = 'search/tweets';
		$params = array("q" => $tag , "count" => $count );
		$result  =  $this->_conn->get( $request , $params );
		return $result ;		
	}
} 
