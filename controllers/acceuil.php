<?php
session_start();
$con="no";
if (isset( $_SESSION['connected']))
	$con= $_SESSION['connected'];
  include_once('../views/acceuil_view.php');
?>