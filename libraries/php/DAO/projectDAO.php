<?php

include_once('Db.class.php');

class DAO {

	public static function insertProject($id_association_sw=0,$id_team=0,$budget=0,$title=0,$document=0,$resume=0,$statut=0){

		//$sql="INSERT INTO t_project (`id_assoc_sw`, `title_2`, `budget`, `document`, `description`, `status`) VALUES  ($id_association, '$title', $budget, '$document', '$description', '$statut')";

		//$sql=" NSERT INTO `t_project` (`id_project`, `id_assoc_sw`, `title_2`, `budget`, `document`, `description`, `status`) VALUES (NULL, '1', 'zz', '22', 'zdz', 'dzd', 'zd')";
		
		$sql="INSERT INTO t_project (`id_association_sw`, `id_team`, `budget`, `title`, `document`,`resume`, `status`) VALUES ($id_association_sw,$id_team,$budget, '$title', '$resume', '$document', 'status')";
		
		Db::open();
	
		Db::insertQuery($sql);
	}
	//recupère les projets
	public static function getProjects(){

		$result = array();
		$sql="SELECT * FROM `t_project` ;";

        

		Db::open();

		
		$result = Db::getRowList($sql);
		


        return $result ;
	}

	public static function editProject($id_association_sw=0,$id_team=0,$budget=0,$title=0,$document=0,$resume=0,$statut=0){

		$sql = "UPDATE `t_project` set `budget` = '$budget',`title`='$title' , `document`='$document' , `resume`='$resume', `statut`='$statut' WHERE id_project = $id ;";
        DB::open();
        DB::updateQuery($sql);
        DB::close();

	}
	public static function deleteProject($id_association_sw=0,$id_team=0,$budget=0,$title=0,$document=0,$resume=0,$statut=0,$id){
		$sql="DELETE * FROM `t_project` WHERE `t_project`.`id_project` = $id;";
		DB::open();
        DB::deleteQuery($sql);
        DB::close();
	}
}

?>