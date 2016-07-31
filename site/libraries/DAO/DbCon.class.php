<?php
class DBCon
{
	private static $dbOb;
	private $dbUser;
	private $dbPass;
	private $dbDSN;

	private function __construct($dbDSN,$dbUser,$dbPass)
	{
		try
		{
			self::$dbOb= new PDO('mysql:dbname=web4innovation;host=vvv.dev','root','root');	
		}
		catch(Exception $exception)
		{
			echo "Could not connect to Database";
			die();
		}
	}

	public static function getInstance()
	{
		
		if(!self::$dbOb)
		{
						self::$dbOb= new DBCon("mysql:dbname=web4innovation;host=vvv.dev","root","root");	
		}
		
		var_dump(self::$dbOb);
		exit();
		return self::$dbOb;
	}
	public static function close()
	{
		self::$instance=null;
		self::$dbOb=null;
	}

}
?>