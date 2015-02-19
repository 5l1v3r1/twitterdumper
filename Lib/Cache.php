<?php 

class Cache {


	private $_cacheDriver ;
	
	public function __construct( $config = array() ) {
		$type = $config['driver'] ;
		
		$default = array ( 'host' => null, 'port' => null );
		extract( array_intersect_key( $config[$type], $default ) );		
				
		if ( $type == 'memcached') {
					
			$memcached = new Memcached();
			$memcached->addServer( $host , $port );

			$this->_cacheDriver = new \Doctrine\Common\Cache\MemcachedCache();
			$this->_cacheDriver->setMemcached($memcached);

		}
		
	}

	public function contains( $id = false ) {
		return $this->_cacheDriver->contains( $id ) ;
	}

	public function fetch( $id = false  ) {
		return $this->_cacheDriver->fetch( $id ) ;
	}

	public function save( $id  = false , $value = false  ) {
		return $this->_cacheDriver->save( $id , $value ) ;
	}

	public function delete( $id  = false ) {
		return $this->_cacheDriver->delete( ) ;
	}
	
	public function deleteAll( ) {
		return $this->_cacheDriver->deleteAll( ) ;
	}
		
		
	private function _buildCacheKey ( $query ) {
		return md5( $query );
	}
	
	public function isCachedQuery( $query = '' ) {
		$key = $this->_buildCacheKey ( $query );
		return $this->contains( $key );
	}
	
	public function getCachedQuery( $query = '' ) {
		$key = $this->_buildCacheKey ( $query );
		return $this->fetch( $key ) ;
	}
	
	public function setCachedQuery( $query = '', $value = '' ) {
		$key = $this->_buildCacheKey ( $query );
		$this->save( $key, $value );
	}
	
	
		
}

