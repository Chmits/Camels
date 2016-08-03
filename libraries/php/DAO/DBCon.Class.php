<?php
class DbCon
{
	private static $dbh;
	private function __construct()
	{

		$dsn = 'mysql:dbname=web4innovation;host=127.0.0.1';
		$user = 'root';
		$password = 'root';

		try {
		    self::$dbh = new PDO($dsn, $user, $password);
		    self::$dbh->exec("SET NAMES 'UTF8'");

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
		$dbh=null;
	}

}
?>