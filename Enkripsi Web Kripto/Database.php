<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'test');

class Database {
	public $conn;
	function __construct()
	{
		$this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	}
}
?>