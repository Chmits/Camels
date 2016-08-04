<?php 
include_once('DBCon.Class.php');
class Db
{
		public static $dbh;
		private function _construct()
		{
		}
		public static function open()
		{
			if(!self::$dbh)
			{
				self::$dbh =DbCon::getInstance();
			}
		}
		public static function getRowList($sql)
		{
			if(empty($sql)) return null;
			$list = array();
			$statement = null;
			try
			{
				//echo "$sql";

				$statement=self::$dbh->query($sql);
				$res=$statement->setFetchMode(PDO::FETCH_OBJ);
			}catch(PDOException $ex)
			{
				//Log::addMessage(Log::DEBUG,$sql);
				//Log::addException(Log::ERROR,$ex,true);
				return false;
			}
			$i=0;
			foreach ($statement as $row) {
				$i+=1;
				$list[$i]=$row;
			}
			return $list;
		}
		public static function insertQuery($sql)
		{
			if(empty($sql)) return false;
			
			try
			{
				echo "$sql";
				self::$dbh->exec($sql);

				return self::$dbh->lastInsertID();
			}catch(PDOException $ex)
			{
				echo "SQL error! : ".$ex->getMessage();
				return false;
			}
		}

		public static function updateQuery($sql){
			if(empty($sql)) return false;
			try{
				self::$dbh->exec($sql);
			}
			catch(PDOException $ex)
			{
				echo "error !!".$ex->getMessage();
				return false;
			}
					
	    }

	    public static function deleteQuery($sql)
	    {

	    	if(empty($sql)) return false;
			try{
				
				$count =self::$dbh->exec($sql);
				echo "$count";

			   }
			catch(PDOException $ex)
			{
				echo "Error !!".$ex->getMessage();
				return false;
			}
	    }
	    public static function ajoutEtudiant($sql)
	    { 
	    	if(empty($sql)) return false;
			try{
				
				$count =self::$dbh->exec($sql);
				echo "$count";

			   }
			catch(PDOException $ex)
			{
				echo "Error !!".$ex->getMessage();
				return false;
			}

	    }


		public static function close()
		{
			self::$dbh=null;
			DbCon::close();
		}

		

}
 ?>