
<!DOCTYPE html>
<html>
<head>
  <title>Soummetre projet</title>
  
      
    <link rel="stylesheet" type="text/css" href="../resources/acceuil_needs/css/normalize.css">

         <link href="../libraries/acceuil_needs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../libraries/acceuil_needs/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
     <link href="../libraries/acceuil_needs/css/creative.min.css" rel="stylesheet">

         <?php include_once('../views/links2.php'); ?> 
      <?php include_once('../views/links.php'); ?> 

</head>
<body >
     <?php include_once('../views/header4.php'); ?>


<form class="form-horizontal" method="post" action="../controllers/projectInsert.php">
<!-- Form Name -->


<!-- File Button --> 


<!-- Text input-->
<div class="form-group" style="margin-top:150px">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="title" type="text" placeholder="Titre" class="form-control input-md" required="">

  </div>
</div>

<!-- Budget input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
 <input id="textinput" name="budget" type="text" placeholder="Budget" class="form-control input-md" required=""> 
</div>
    
  </div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton"></label>
  <div class="col-md-4">
    <input id="filebutton" name="document" class="input-file" type="file">
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Envoyer</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
  </div>
</div>

</form>
<footer>
<?php include_once('../views/footer_view.php'); ?>

</footer>

</body>
</html>
