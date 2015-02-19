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

	public function request ( $request = '' , $value = '' ,$count = 15 ) {
		return $this->_conn->get( $request , array("q" => $value , "count" => $count ));
	}
	
	
	public function getByTag( $tag ='' , $count = 100 ){
		return $this->request('search/tweets', $tag , $count );
	}
} 
