
<?php
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
    $con="connected";
  	$title=$_POST["title"];
    $id=$_POST["id"];
  	$id_team=$_POST["id_team"];
  	$id_association_sw=$_POST["id_association_sw"];
  	$budget=$_POST["budget"];
  	$resume=$_POST["resume"];
  	$status=$_POST["status"];
  	$document=$_POST["document"];

    include_once('../views/show_project/show_project.php');

  }
   else
    header('Location:  ../controllers/acceuil.php');      

?>