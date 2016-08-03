<?php
  if( $_SESSION['connected'] == "connected")
  {
include_once('../libraries/php/DAO/projectDAO.php');
 //include_once('../views/footer_view.php'); 
 $projectDao = new  ProjectDAO();
 $id_association=1;
 $result=$projectDao->getProjects($id_association);
 //var_dump($result);
 $testvar="je suis chams";
 include_once('../views/espace_projet_view.php');
}
else
    header('Location:  ../index.php?nc=t');      

?>