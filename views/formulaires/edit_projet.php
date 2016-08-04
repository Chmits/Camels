
<!DOCTYPE html>
<html>
<head>
  <title>Modifier projet</title>
     <?php  include_once('../views/links.php'); ?> 
</head>
<body>


<form class="form-horizontal">
<!-- Form Name -->


<!-- File Button --> 


<!-- Text input-->
<div class="form-group" style="margin-top:150px">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Titre" class="form-control input-md" required="">

  </div>
</div>

<!-- Budget input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
 <input id="textinput" name="textinput" type="text" placeholder="Budget" class="form-control input-md" required=""> 
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
    <input id="filebutton" name="filebutton" class="input-file" type="file">
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

</fieldset>
</form>

</body>
</html>
