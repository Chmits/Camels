
<?php
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
  	$title=$_POST["title"];
  	$id_team=$_POST["id_team"];
  	$id_association_sw=$_POST["id_association_sw"];
  	$budget=$_POST["budget"];
  	$resume=$_POST["resume"];
  	$status=$_POST["status"];
  	$document=$_POST["document"];
  	echo "title=$title<br/>id_team=$id_team<br/>id_association_sw=$id_association_sw<br/>budget=$budget<br/>status=$status<br/><br/>resume=$resume<br/>document=$document";
    //include_once('../libraries/php/DAO/projectDAO.php');
  }
   else
    header('Location:  ../index.php');      

?>