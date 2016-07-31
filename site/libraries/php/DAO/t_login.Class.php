<?php
include_once('DB.Class.php');
class t_login_DAO
{
	function __construct()
	{
	}

	public function authentifiate($username,$password)
	{
		return 1;
	}

	public static function veify($username,$password,$role)
	{
		$sql = "";
		$sql="INSERT INTO `t_assoc_sw`(`nom_assoc`, `adresse`, `description`, `website`) VALUES 
            ('".$nom_assoc."','".$adresse."','".$description."','".$website."');";
		Db::open();
		$id = Db::insertQuery($sql);
		//Db::close();
		return $id;
	}
}
?>