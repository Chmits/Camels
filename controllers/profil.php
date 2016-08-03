<?php
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
  include_once('../libraries/php/DAO/associationDAO.php');
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
else
    header('Location:  ../index.php');      
?>