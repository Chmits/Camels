<?php
  session_start();
  if( $_SESSION['connected'] == "connected")
  {
  include_once('../libraries/php/DAO/associationDAO.php');
 //include_once('../views/footer_view.php'); 
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
 echo "<h1>$title<br/></h1>";
 echo "$description<br/>";
 echo "$website<br/>";
 echo "$telephone<br/>";
  echo "$adresse<br/>";

 ?>
<img src="<?php echo "$logo"; ?>" style="height:100px;width: 200px;">
<?php
 //include_once('../views/espace_projet_view.php');
}
else
    header('Location:  ../index.php');      
?>