<?php
 include_once('../libraries/php/DAO/t_login.Class.php');
//get username and password
$username=$_POST['username'];
$password=md5($_POST['password']);

$obj= new t_login_DAO();
session_start();
if( $_SESSION['connected'] == "connected")
  {

      header('Location: ../controllers/profil.php');   
  }
else if($obj->authentifiate($username,$password))
{
	session_start();
	  $_SESSION["username"] = $username;
    $_SESSION['connected'] = "connected";
    $list= $obj->role($username,$password);
    $ok=$list[1];
    $_SESSION["id_log"] = $ok->id_login; // id dans table login
    $_SESSION["id"] = $ok->id_assoc_sw;
    $_SESSION["id_tn"] = $ok->id_assoc_tun;
    $_SESSION["id_etudiant"] = $ok->id_etudiant;
    $_SESSION['role'] = $ok->role;
    //Here you are welcome 
  
   header('Location: ../controllers/profil.php');      

}
else
{
    header('Location:  ../controllers/login.php');      
}



?>