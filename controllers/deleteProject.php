<?php

include_once('../libraries/php/DAO/projectDAO.php');
//recuperation de l'id
 /*session_start();
 $id=$_SESSION["id"];*/
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
  	  if (isset($_POST["id"])) $id=$_POST["id"]; 
      if(isset($_GET["id"])  )   $id=$_GET["id"]; 


      $projectDao = new  ProjectDAO();
     
      $projectDao->deleteProject($id);
    header('Location:  espace_projet.php');      

  }
    else
    header('Location:  ../controllers/acceuil.php');      


echo "i'm here!";
?>