
<?php
  if( $_SESSION['connected'] == "connected")
  {
  	$id_project=$_GET["id"];
    //include_once('../libraries/php/DAO/projectDAO.php');
  }
else
    header('Location:  ../index.php');      

?>