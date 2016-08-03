<?php

include_once('Db.class.php');

class associationDAO {

	public static function insertAssociation($title=0,$logo=0,$decription=0,$website=0,$telephone=0,$adresse=0){		

		$sql="INSERT INTO `t_association_sw` (`title`, `logo`, `description`, `website`, `telephone`, `adresse`) VALUES ('title', 'logo', 'description', 'website', 'telephone', 'adresse')";
		
		Db::open();
	
		Db::insertQuery($sql);
		
	}

	//recupère les associations
  	public static function getAssociation(){

		
		$sql="SELECT * FROM `t_association_sw`";
		Db::open();
		$result = Db::getRowList($sql);

		return $result;
	}
		public static function getAssociationbyID($id=0){
		$sql="SELECT * FROM `t_association_sw` where id_association='$id';";
		Db::open();
		$result = Db::getRowList($sql);

		return $result;
	}
}

?>