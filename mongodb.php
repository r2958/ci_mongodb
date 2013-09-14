<?php
class AdMongo{
	protected static $instance = null;
	protected $cache;
	protected $config = array();
	private function __construct(){
		$this->cache = '';
		$this->config = '';
		$this->db = new Mongo($this->config);
	}

       public static function getInstance(){
		if(self::$instance !=null && self::$instance instanceof AdMongo){
			return self::$instance;
		}else{
			self::$instance = new AdMongo();
			return self::$instance;
		}
	
	}
	
	public function get(){

	}

	public function deletef(){
	
	}


}


?>
