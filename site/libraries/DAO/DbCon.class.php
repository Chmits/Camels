<?php
class DBCon
{
	public static $dbh;

	private static $dbOb;


	private function __construct()
	{

		$dsn = 'mysql:dbname=test;host=127.0.0.1';
		$user = 'root';
		$password = 'root';

		try {
		    self::$dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
		    echo 'Connexion échouée : ' . $e->getMessage();
		}
			
	}

	public static function getInstance()
	{

		if(!self::$dbh){

			new DbCon();

		}

		return self::$dbh;


	}
	public static function close()
	{
		self::$instance=null;
		self::$dbOb=null;
	}

}
?>