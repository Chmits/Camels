<?php

  session_start();
  if( $_SESSION['connected'] == "connected")
  include_once('../views/acceuil/acceuil_view.php');
  else
  header('Location:  ../index.php');      




?>