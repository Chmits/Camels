<?php
include_once('./libraries/php/DAO/associationDAO.php');

$associationDAO = new  AssociationDAO();

$result=$associationDAO->getAssociation();
var_dump($result);

?>