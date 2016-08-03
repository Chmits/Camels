<?php

include_once('Db.class.php');

class ProjectDAO {

	public static function insertCondidature($id_project=0,$id_team=0,$name_team=0,$cv=0,$cover_letter=0){

		
		
        $sql="INSERT INTO `t_condidature` (`id_project`, `id_team`, `name_team`, `cv`, `cover_letter`) VALUES 
        ($id_project, '$id_team', '$name_team', '$cv','$cover_letter')";

		Db::open();
	
		Db::insertQuery($sql);
	}
	//recupère la liste de condidature
	public static function getCondidature(){

		$sql="SELECT * FROM `t_condidature`";

        $result = array();
		Db::open();
		$result = Db::getRowList($sql);
        return $result ;
	}
}

?>