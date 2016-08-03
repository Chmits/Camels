<?php
include_once('./libraries/php/DAO/associationDAO.php');

$title= htmlspecialchars($_POST['title']);
$logo= htmlspecialchars($_POST['logo']);
$description= htmlspecialchars($_POST['description']);
$website= htmlspecialchars($_POST['website']);
$adresse= htmlspecialchars($_POST['adresse']);
$telephone= htmlspecialchars($_POST['telephone']);




$associationDAO = new  editAssociationDAO();



$associationDAO->editAssociation('title','logo','description','website','telephone','adresse');


?>