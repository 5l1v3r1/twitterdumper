<?php

use Doctrine\DBAL\DriverManager;

class DB {


	private $_db = false ;
	private $_cache = false ;
	
	public $errors = array();
	
	
	public function __construct( $config = array () ) {
	

		try {
			$this->_db = DriverManager::getConnection( $config );
		}
		catch( PDOException $e ){
			$this->errors[] = $e->getMessage();
			return false ;
		}
			
	}
	
	
	public function setCache( $cacheDriver ) {
		$this->_cache = $cacheDriver ;
	}
	
	
	public function query ( $query = '' ) {
		
		if ( ! $this->_db ) 
			return false ;
			
		$result = array() ;
		
		if ( $this->_cache && $this->_cache->isCachedQuery( $query ) )
			return $this->_cache->getCachedQuery( $query ) ; 
			
		
		if ( $rs = $this->_db->query($query) ) {  
			while ($row = $rs->fetch()) {
				$result[] = $row ;
			}
		}
		
		if ( $this->_cache )
			$this->_cache->setCachedQuery( $query , $result ) ; 
		
		return $result ;			
	
	}
	
	public function add ( $table = '', $values = '' ){
		return $this->_db->insert( $table , $values  );
	}
	
}
