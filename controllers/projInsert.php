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


include_once('../views/formulaires/add_formulaire_view.php');
}




?>