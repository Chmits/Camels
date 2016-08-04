<?php 


include_once('./libraries/php/Request.Class.php');
include_once('./configurations/database.php');


$ctl= Request::getController();

//Select the controller
if(empty($ctl))
{
	$ctl = 'acceuil';
}

//Redirect
if(!file_exists('Camels/controllers/'.$ctl.'.php'))
{
	$ctl = 'acceuil';
}
	include('Camels/controllers/'.$ctl.'.php');


 ?>
