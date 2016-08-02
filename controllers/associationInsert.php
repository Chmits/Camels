<?php
include_once('./libraries/php/DAO/associationDAO.php');

$title= htmlspecialchars($_POST['title']);


$logo= htmlspecialchars($_POST['logo']);
$description= htmlspecialchars($_POST['description']);
$website= htmlspecialchars($_POST['website']);
$adresse= htmlspecialchars($_POST['adresse']);

$telephone=$_POST['telephone'];

$associationDAO = new AssociationDAO();


//$associationDAO->insertAssociation($title,$logo,$decription,$website,$telephone,$adresse);
$associationDAO->insertAssociation('title', 'logo', 'description', 'website', 24240393, 'adresse');






?>