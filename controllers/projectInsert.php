<?php
session_start();
if($_SESSION['connected']="connected")
{
include_once('../libraries/php/DAO/projectDAO.php');

$title= htmlspecialchars($_POST['title']);
$document="ok";
$statut= "ok";
$resume="ok";
$budget=$_POST['budget'];

$id_association=$_SESSION['id'];
$id_team=1;

$projectDao = new  ProjectDAO();
$projectDao->insertProject($id_association,$id_team,$budget,$title,$document,$resume,$statut);


header('Location:  ../controllers/projInsert.php?ins=1');   
}

?>