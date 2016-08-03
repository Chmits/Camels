<?php

include_once('Db.class.php');

class AssociationDAO {

	public static function insertAssociation($title=0,$logo=0,$decription=0,$website=0,$telephone=0,$adresse=0){

//$sql=" NSERT INTO `t_project` (`id_project`, `id_assoc_sw`, `title_2`, `budget`, `document`, `description`, `status`) VALUES (NULL, '1', 'zz', '22', 'zdz', 'dzd', 'zd')";
		
		

		$sql="INSERT INTO `t_association_sw` (`title`, `logo`, `description`, `website`, `telephone`, `adresse`) VALUES ('$title', '$logo', '$description', '$website', '$telephone', '$adresse')";
		
		Db::open();
	
		Db::insertQuery($sql);
		
	}

	//modifier les données
	public static function editAssociation($budget=0,$title=0,$resume=0,$document=0,$status=0,$id_association_sw){
		//UPDATE `t_project` SET `budget` = '30', `status` = 'soumis' WHERE `t_project`.`id_project` = 5;

		$sql = "UPDATE `t_association_sw` set `budget` = '$budget',`title`='$title' , `resume`='$resume' , `document`='$document', `statut`='$statut' WHERE id_association_sw = $id ;";
        DB::open();
        DB::updateQuery($sql);
        DB::close();

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