<?php
 include_once('../libraries/php/DAO/t_login.Class.php');
//get username and password
$username=$_POST['form-username'];
$password=md5($_POST['form-password']);

$obj= new t_login_DAO();

if($obj->authentifiate($username,$password))
{
	session_start();
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    //Here you are welcome 
    header('Location: acceuil.php');      

}
else
{
	//connection failed!
}



?>