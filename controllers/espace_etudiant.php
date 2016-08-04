<?php
$con="ok";
  session_start();
  if( $_SESSION['connected'] == "connected" and $_SESSION['role'] == "association_tn")
  {
  	$con="connected";
	 include_once('../libraries/php/DAO/association_tunDAO.php');
	 $assoc_tn = new  association_tunDAO();
	 $id_junior=$_SESSION["id_tn"];
	 $nom="Espace étudiants";
	// $result=$assoc_tn->getStudents($id_junior);
	//var_dump($result);exit();
	
	 include_once('../views/espace_etudiant/espace_etudiant.php');
 }
 else
    header('Location:  ../controllers/acceuil.php');      

?>