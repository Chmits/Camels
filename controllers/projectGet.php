<?php

include_once('./libraries/php/DAO/projectDAO.php');


$id_association=1;

$projectDao = new  ProjectDAO();




$result=$projectDao->getProjects($id_association);
var_dump($result);


//include_once('./views/home/projet.php');



?>