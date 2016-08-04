<?php
  $con="no";

  session_start();
  if( $_SESSION['connected'] == "connected" and $_SESSION['role'] == "association")
  {
  include_once('../libraries/php/DAO/associationDAO.php');
  $con="connected";
 $associationDao = new  associationDAO();
 $id_association= $_SESSION['id'];
 $result=$associationDao->getAssociationbyID($id_association);
 $obj=$result[1];
 $title=$obj->title;
 $logo=$obj->logo;
 $description=$obj->description;
 $website=$obj->website;
 $telephone=$obj->telephone;
 $adresse=$obj->adresse;
 
  
    
/*
 ?>
<img src="<?php echo "$logo"; ?>" style="height:100px;width: 400px;">
<?php*/
 include_once('../views/profil_assoc_sw.php');
}
else if ($_SESSION['connected'] == "connected" and $_SESSION['role'] == "association_tn" ) 
{
	  include_once('../libraries/php/DAO/association_tunDAO.php');
   $con="connected";

	 $associationDao = new  association_tunDAO();
     $id_association= $_SESSION['id_tn'];
     $result=$associationDao->getAssociationbyID($id_association);

  $obj=$result[1];
 $title=$obj->name;
 $description=$obj->description;
 $website=$obj->website;
 $telephone=$obj->phone;
 $adresse=$obj->adresse;

	 include_once('../views/profil_assoc_tn.php');
}
else
    header('Location:  ../index.php');      
?>