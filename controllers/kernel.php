<?php 


include_once('./libraries/php/Request.Class.php');
include_once('./configurations/database.php');


$ctl= Request::getController();

//Select the controller
if(empty($ctl))
{
	$ctl = 'login';
}

//Redirect
if(!file_exists('controllers/'.$ctl.'.php'))
{
	$ctl = 'login';
}
	include('controllers/'.$ctl.'.php');


 ?>
