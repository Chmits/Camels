<?php
class DBCon
{
	private static $instance;
	private static $dbOb;
	private $dbUser;
	private $dbPass;
	private $dbDSN;

	private function __construct($dbDSN,$dbUser,$dbPass)
	{
		try
		{
			
			self::$instance= new PDO('mysql:host=localhost;dbname=web4innov','root','root');
			

			

			try
		{
			$count = self::$instance->exec("select count(id_project) from t_project");

			var_dump($count);
		}catch(PDOException $ex)
		{
			echo "SQL error! : ".$ex->getMessage();
			return false;
		}
			exit;
			
		}
		catch(Exception $exception)
		{
			echo "Could not connect to Database";
			var_dump($exception);
			die();
		}
	}

	public static function getInstance($dbName)
	{
		
		
		
			self::$dbOb= new DBCon("mysql:dbname=web4innov;host=localhost","root","root");
			var_dump(self::$dbOb);




		
		return self::$dbOb;
	}
	public static function close()
	{
		self::$instance=null;
		self::$dbOb=null;
	}

}
?>