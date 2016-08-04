<?php
include_once('DB.Class.php');
class t_login_DAO
{
	function __construct()
	{
	}

	public function authentifiate($username,$password)
	{
		$sql = "";
		$sql="select * from t_login where username='".$username."' and password='".$password."';";
		Db::open();
		$list = Db::getRowList($sql);
		Db::close();
		return $list != null;
	}
	public function role($username,$password)
	{
		$sql = "";
		$sql="select * from t_login where username='".$username."' and password='".$password."';";
		Db::open();
		$list = Db::getRowList($sql);
		Db::close();
		return $list ;
	}
}

?>