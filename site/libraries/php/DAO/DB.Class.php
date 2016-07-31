<?php 
include_once('DBCon.Class.php');
class Db
{

	public static $PDO;
	private function _construct()
	{

	}
	public static function open($dbName)
	{

		if(!self::$PDO)
		{
			self::$PDO =DbCon::getInstance($dbName);
			var_dump(self::$PDO);		
		}
	}
	public static function getRowList($sql)
	{
		if(empty($sql)) return null;
		$list = array();
		$statement = null;
		try
		{
			$statement=self::$PDO->query($sql);
			$statement=self::setFetchMode(PDO::FETCH_OBJ);
		}catch(PDOException $ex)
		{
			//Log::addMessage(Log::DEBUG,$sql);
			//Log::addException(Log::ERROR,$ex,true);
			return false;
		}

		foreach ($statement as $row) {
			$list[]=$row;
		}
		return $list;
	}
	public static function insertQuery($sql)
	{
		if(empty($sql)) return false;
		try
		{
			self::$PDO->exec($sql);
			return self::$PDO->lastInsertID();
		}catch(PDOException $ex)
		{
			echo "SQL error! : ".$ex->getMessage();
			return false;
		}
	}

}







 ?>