<?php

include_once('../libraries/php/DAO/projectDAO.php');
//recuperation de l'id
 /*session_start();
 $id=$_SESSION["id"];*/
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
  	  $id=$_POST["id"]; 
      $projectDao = new  ProjectDAO();
      $projectDao->deleteProject($id);
    header('Location:  espace_projet.php');      

  }
    else
    header('Location:  ../index.php');      


echo "i'm here!";
?>