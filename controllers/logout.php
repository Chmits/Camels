<?php
 session_start();
  if( $_SESSION['connected'] == "connected")
  {
 	  	session_destroy();
  } 
 header('Location:  ../index.php');      

?>