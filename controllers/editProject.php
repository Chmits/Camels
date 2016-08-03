<?php

include_once('./libraries/php/DAO/projectDAO.php');

$title= htmlspecialchars($_POST['title']);
$budget=$_POST['budget'];
$document= htmlspecialchars($_POST['document']);
$statut= htmlspecialchars($_POST['statut']);
$resume= htmlspecialchars($_POST['resume']);

$projectDao = new  ProjectDAO();
$projectDao->editProject($title,$budget,$document,$resume,$statut);
?>