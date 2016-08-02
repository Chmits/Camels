<?php

include_once('DB.class.php');

class AssociationDAO {

	public static function insertAssociation($title=0,$logo=0,$decription=0,$website=0,$telephone=0,$adresse=0){

		
		$sql="INSERT INTO `t_association_sw`(`title`, `logo`, `description`, `website`, `telephone`, `adresse`) VALUES ('$title', '$logo', '$description', '$website', $telephone,' $adresse');";

		//$sql="INSERT INTO `t_association_sw` (`title`, `logo`, `description`, `website`, `telephone`, `adresse`) VALUES (title, logo, description, website, 111, adresse);";
		
		Db::open();
	
		Db::insertQuery($sql);
		
	}

	//recupère les associations
	public static function getAssociation(){

		$result = array();
		$sql="SELECT * FROM `t_association_sw` ; ";


		Db::open();


		$result = Db::getRowList($sql);
		
		return $result;
	}
}

?>