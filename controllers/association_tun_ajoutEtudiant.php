<?php
include_once('./libraries/php/DAO/association_tunDAO.php');

$first_name= htmlspecialchars($_POST['first_name']);


$last_name= htmlspecialchars($_POST['last_name']);
$email= htmlspecialchars($_POST['email']);
$phone= htmlspecialchars($_POST['phone']);
$school= htmlspecialchars($_POST['school']);

$junior= htmlspecialchars($_POST['junior']);

$association_tunDAO = new association_tunDAO();
$id_association_tun=1;

//$associationDAO->insertAssociation($title,$logo,$decription,$website,$telephone,$adresse);
$association_tunDAO->ajoutEtudiant($id_association_tun,$first_name, $last_name, $email, $phone, $school, $junior);






?>