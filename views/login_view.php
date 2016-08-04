<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <?php include_once('../views/links.php'); ?>
    <title>Web 4 innovation</title>
       <link rel="stylesheet" href="../resources/acceuil_needs/css/normalize.css">
       <script src="../resources/acceuil_needs/js/prefixfree.min.js"></script>
  </head>

  <body>

     <div class="login">
  <h1>S'authentifier</h1>
    <form method="post" action="../controllers/welcome.php">
      <input type="text"  name="username" placeholder="Nom d'utilisateur" required="required"  />
      <input type="password" name="password" placeholder="Mot de passe" required="required" n />
        <button type="submit" class="btn btn-primary btn-block btn-large">Se connecter</button>
    </form>
  </div>
  


    
  </body>
</html>
