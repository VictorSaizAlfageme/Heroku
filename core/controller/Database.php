<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b80f16ac677af0";$this->pass="eb5a2ce8";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_da80dcf2b2cfcea";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
