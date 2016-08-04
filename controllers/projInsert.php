<?php
session_start();
if(isset($_SESSION['connected']))
$con=$_SESSION['connected']=="connected";
else
$con=" ";
if($con=="connected")
{
include_once('../libraries/php/DAO/projectDAO.php');

/*$title= htmlspecialchars($_POST['title']);
$document= htmlspecialchars($_POST['document']);
$statut= htmlspecialchars($_POST['statut']);
$resume= htmlspecialchars($_POST['resume']);
*/



$id_association=1;
$id_team=1;

$projectDao = new  ProjectDAO();


//$projectDao->insertProject($id_association,$id_team,$title,$budget,$document,$resume,$statut);



include_once('../views/formulaires/add_formulaire_view.php');
}
else
{
	header('Location ../controllers/acceuil.php');
}


?>