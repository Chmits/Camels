<?php
  session_start();
  if( $_SESSION['connected'] == "connected" and $_SESSION['role'] == "association_tn")
  {
	 include_once('../libraries/php/DAO/assoc_tnDAO.php');
	 $assoc_tn = new  association_tunDAO();
	 $id_junior=$_SESSION["id_tun"];
	 echo "$id_junior";

	 $nom="Espace étudiants";

	 $result=$assoc_tn->getStudents($id_junior);
	 	 //var_dump($result);exit();
     exit();
	
	 include_once('../views/espace_etudiant/espace_etudiant.php');
 }
 else
    header('Location:  ../controllers/acceuil.php');      

?>