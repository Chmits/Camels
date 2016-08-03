<?php

include_once('DB.Class.php');

class ProjectDAO {

	public static function insertProject($id_association_sw=0,$id_team,$budget=0,$title=0,$document=0,$resume=0,$statut=0){

		$sql="INSERT INTO t_project (`id_association_sw`, `id_team`, `budget`, `title`, `document`,`resume`, `status`) VALUES ($id_association_sw,$id_team,$budget, '$title', '$resume', '$document', 'status')";
		Db::open();
		Db::insertQuery($sql);
		Db::close();

	}
	//recupère les projets
	public static function getProjects($id=0){

		$sql="SELECT * FROM `t_project` where id_association_sw='$id' ;";
		Db::open();
		$result = Db::getRowList($sql);
		Db::close();


        return $result ;
	}
	public static function getAffectedProjects($id=0){

		$result = array();
		$sql="SELECT * FROM `t_project` where id_association_sw='$id' and status='affected';";
		Db::open();
		$result = Db::getRowList($sql);
		Db::close();


        return $result ;
	}
}

?>