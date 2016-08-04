
<!DOCTYPE html>
<html>
<head>
  <title></title>
     <?php  include_once('../views/links.php'); ?> 
</head>
<body>


<form class="form-horizontal" method="post" action="../controllers/projectInsert.php">
<!-- Form Name -->


<!-- File Button --> 


<!-- Text input-->
<div class="form-group" style="margin-top:150px">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="textinput" name="title" type="text" placeholder="Nom du projet" class="form-control input-md" required="">

  </div>
</div>

<!-- Budget input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
 <input id="textinput" name="budget" type="text" placeholder="Budget estimé pour la réalisation du projet!" class="form-control input-md" required=""> 
</div>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description" placeholder="Description du projet..."></textarea>
  </div>
</div>

<!-- Select Basic -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"></label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value=""></option>
      <option value="1">Camels Team</option>
      <option value="2">Rocks Team</option>
    </select>
  </div>
</div>-->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"></label>
  <div class="col-md-4">
    <select id="selectbasic" name="soumis" class="form-control">
    <option >Votre projet sera soumis par défaut</option>
      <option value="Soumis" selected="selected">Soumis</option>
      <option value="non soumis">Non soumis</option>
    </select>
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

</fieldset>
</form>

</body>
</html>
