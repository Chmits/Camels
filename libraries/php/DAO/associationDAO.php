<?php

include_once('Db.class.php');

class ProjectDAO {

	public static function insertAssociation($title=0,$logo=0,$decription=0,$website=0,$telephone=0,$adresse=0){

//$sql=" NSERT INTO `t_project` (`id_project`, `id_assoc_sw`, `title_2`, `budget`, `document`, `description`, `status`) VALUES (NULL, '1', 'zz', '22', 'zdz', 'dzd', 'zd')";
		
		

		$sql="INSERT INTO `t_association_sw` (`title`, `logo`, `description`, `website`, `telephone`, `adresse`) VALUES ('title', 'logo', 'description', 'website', 'telephone', 'adresse')";
		
		Db::open();
	
		Db::insertQuery($sql);
		
	}

	//recupère les associations
	public static function getAssociation(){

		$result = array();
		$sql="SELECT * FROM `t_association_sw`";


		Db::open();
		$result = Db::getRowList($sql);

		return $result;
	}
}

?>