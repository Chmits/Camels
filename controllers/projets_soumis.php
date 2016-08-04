<?php
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
	 include_once('../libraries/php/DAO/projectDAO.php');
	 $projectDao = new  ProjectDAO();
	 $id_association=$_SESSION["id"];
	 $nom="Projets soumis";

	
	 	 $result=$projectDao->getProjects_soumis();
	 	 //var_dump($result);exit();
	 
	
	 include_once('../views/espace_projet_view.php');
 }
 else
    header('Location:  ../index.php');      

?>