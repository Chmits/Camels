<?php

include_once('./libraries/DAO/projectDAO.php');

/*$title= htmlspecialchars($_POST['title']);

//echo htmlspecialchars($_POST['budget']);
$document= htmlspecialchars($_POST['document']);
$statut= htmlspecialchars($_POST['statut']);
$resume= htmlspecialchars($_POST['resume']);
$statut= htmlspecialchars($_POST['statut']);

$budget=$_POST['budget'];*/
$id_association=1;

$projectDao = new  ProjectDAO();


//$projectDao->insertProject($id_association,$title,$budget,$document,$resume,$statut);

$result=$projectDao->getProjects($id_association);
var_dump($result);


//include_once('./views/home/projet.php');



?>