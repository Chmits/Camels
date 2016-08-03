<?php

include_once('DB.class.php');
class association_tunDAO{

	public static function ajoutEtudiant($id_association_tun=0,$first_name=0,$last_name=0,$email=0,$phone=0,$school=0,$junior=0){		

		$sql="INSERT INTO `t_etudiant` (`id_association_tun`, `first_name`, `last_name`, `email`, `phone`, `school`, `junior`) VALUES ('$id_association_tun', '$first_name', '$last_name', '$email', '$phone', '$school','$junior')";
		
		DB::open();
	
		DB::insertQuery($sql);
		
	}
}
