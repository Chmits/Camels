<?php

include_once('DbCon.class.php');

Class Db {

	private static $dbh;
	public static function open(){
		
		if(!self::$dbh)
		{
			
			self::$dbh = DbCon::getInstance();
			echo "open";
			exit();
		}
			
		
	}


	public static function insertQuery($sql){

		
                self::$dbh->exec($sql);

		

	}

/************* NEW METHODS *****************/

	public static function updateQuery($sql){
		
		self::$dbh->exec($sql);			

	}


	public static function getRowList($sql) {


		$list  = array();

		$statement = self::$dbh->query($sql);
	
		$statement->setFetchMode(PDO::FETCH_OBJ);
		
		if(isset($statement)) 

		{

			foreach($statement as $row)

			{

				$list[] = $row;
			}

		}

		return $list;
	}

	public static function close()
	{

		self::$dbh = null;
		DbCon::close();

	}	
/************* END NEW  METHODS *****************/
}

?>

