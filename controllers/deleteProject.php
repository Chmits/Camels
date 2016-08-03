<?php

include_once('./libraries/php/DAO/projectDAO.php');
//recuperation de l'id

$projectDao = new  ProjectDAO();
$projectDao->deleteProject($id);


?>