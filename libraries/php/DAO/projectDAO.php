<?php

include_once('DB.Class.php');

class projectDAO {

	public static function insertProject($id_association_sw=0,$id_team=0,$budget=0,$title=0,$document=0,$resume=0,$statut=0){

		$sql="INSERT INTO t_project (`id_association_sw`, `id_team`, `budget`, `title`, `document`,`resume`, `status`) 
		VALUES ($id_association_sw,$id_team,$budget, '$title', '$resume', '$document', 'status');";
		Db::open();
		Db::insertQuery($sql);
		Db::close();

	}
	/* liste de tous les projets d'une association suisse */
	public static function getProjects($id=0){

		$sql="SELECT * FROM `t_project` where id_association_sw='$id' ;";
		Db::open();
		$result = Db::getRowList($sql);
		Db::close();
        return $result ;
	}
	/* liste de tous les projets d'une association suisse mais affecté */
	public static function getAffectedProjects($id=0){

		$result = array();
		$sql="SELECT * FROM `t_project` where id_association_sw='$id' and status='affected';";
		Db::open();
		$result = Db::getRowList($sql);
		Db::close();


        return $result ;
	}
		/* liste de tous les projets d'une association suisse mais affecté */
	public static function getProjects_soumis(){
		$result = array();
		$sql="SELECT * FROM `t_project` where  status='soumis';";
		Db::open();
		$result = Db::getRowList($sql);
		Db::close();
        return $result ;
	}

	public static function editProject($id_association_sw=0,$id_team=0,$budget=0,$title=0,$document=0,$resume=0,$statut=0){
		$sql = "UPDATE `t_project` set `budget` = '$budget',`title`='$title' , `document`='$document' , `resume`='$resume', `statut`='$statut' WHERE id_project = $id ;";
        DB::open();
        DB::updateQuery($sql);
        DB::close();
	}
	public static function deleteProject($id=0){
		$sql="DELETE FROM `t_project` WHERE  `id_project` = $id;";
		DB::open();
        DB::deleteQuery($sql);
        DB::close();
	}
}

?>