<?php

include_once('../libraries/php/DAO/projectDAO.php');

$title= htmlspecialchars($_POST['title']);
//$document= htmlspecialchars($_POST['document']);
//$statut= htmlspecialchars($_POST['statut']);
$resume= htmlspecialchars($_POST['description']);

$budget=$_POST['budget'];

$id_association=1;
$id_team=1;

$projectDao = new  ProjectDAO();


//$projectDao->insertProject($id_association,$id_team,$title,$budget,$document,$resume,$statut);


exit();
header('Location:  ../controllers/projInsert.php');      
?>