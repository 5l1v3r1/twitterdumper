<?php

class TwitterDumper {

	private $_twitter ;
	private $_storage;

	function __construct ( $db , $twitter ) {
			
		$this->_db = $db 	;
		$this->_twitter = $twitter ;
			
	}

	function dump( $tag , $count = 100,  $verbose = false  ) {

		$total = 0 ;

		$tweets = $this->_twitter->getByTag( $tag , $count ) ;
				
		foreach ( $tweets->statuses as $tweet ) {
	
			$data = array ( 			
				'user_id' => $tweet->user->id,
				'user_name' => $tweet->user->name,
				'user_mention' => $tweet->user->screen_name,
				'profile_image_url' => $tweet->user->profile_image_url,
				'tweet_id' => $tweet->id,
				'text' => $tweet->text,				
				'created_at' => strtotime($tweet->created_at) 
				);
				
			$status = $this->_db->add('tweets', $data );
			
			if ( $status && $verbose ) {
				echo ".";	
				$total ++ ;			
			}
			
		}

		return $total ;

	}
		
}

