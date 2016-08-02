<?php
 include_once('../libraries/php/DAO/t_login.Class.php');
//get username and password
$username=$_POST['form-username'];
$password=md5($_POST['form-password']);

$obj= new t_login_DAO();

if($obj->authentifiate($username,$password))
{
	session_start();
	$_SESSION["username"] = $username;
    $_SESSION['connected'] = "connected";
    $list= $obj->role($username,$password);
    $ok=$list[1];
    $_SESSION['id'] = $ok->id_login;
    $_SESSION['role'] = $ok->role;
    //Here you are welcome 
   header('Location: acceuil.php');      

}
else
{
    header('Location:  ../index.php?nc=t');      
}



?>