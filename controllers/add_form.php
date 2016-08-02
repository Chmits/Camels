<?php
  session_start();
  if( $_SESSION['connected'] == "connected" /*and $_SESSION['connected']=="association_swisse"*/)
  {
	 /*include_once('../libraries/php/DAO/projectDAO.php');
	 //include_once('../views/footer_view.php'); 
	 $projectDao = new  ProjectDAO();
	 $id_association=$_SESSION["id"];
	 if($_SESSION["id"]=="association_swisse")
	 {
	 	 $result=$projectDao->getProjects($id_association);

	 }
	*/
	 //var_dump($result);
	 include_once('../views/formulaires/add_formulaire_view.php');
 }
 else
    header('Location:  ../index.php?nc=t');      

?>