<?php
if($_SESSION['connected']="connected")
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