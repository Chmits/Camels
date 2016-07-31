<?php
	abstract class Request
	{
		/**
		*Retourne la valeur d'une variable GET ou POST ayant comme nom $key
		*input url = www.Chmits.dev/index.php?ctl=home&&act=login
		*/
		public static function getParameter($key)
		{
			$ret='';
			if(isset($_POST[$key]) && !empty($_POST[$key]))
				$ret = $_POST[$key];
			if(isset($_GET[$key]) && !empty($_GET[$key]))
				$ret = $_GET[$key];
			return $ret;
		}
		/*
		 *Retourne le controlleur demandé
		 */
		public static function getController()
		{
			return self::getParameter('ctl');
		}
	}
?>