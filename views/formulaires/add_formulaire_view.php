
<!DOCTYPE html>
<html>
<head>
  <title></title>
         <?php  include_once('../views/links.php'); ?>
</head>
<body>
        <?php  include_once('../views/menu_view.php'); ?>



<form class="form-horizontal">
<!-- Form Name -->


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nom Projet</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nom Projet</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description">ajouter une description ..</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Team</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Camels Team!</option>
      <option value="2">Rocks Team!</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
  </div>
</div>

</fieldset>
</form>

        <?php  include_once('../views/footer_view.php'); ?>
</body>
</html>
