<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
          <?php include_once('../views/links2.php');?>
          <?php include_once('../views/links.php');?>



</head>

<body>
            <?php include_once('../views/header_view.php');?>

    
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Projet: 
                    <?php echo  $title;?>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">

                 <a  href="../controllers/deleteProject.php?<?php echo "$id";?>" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger" >
                 <i class="glyphicon glyphicon-remove"></i> </a>

                 <a href="../controllers/deleteProject.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

                <img class="img-responsive" src="../resources/images/prj<?php echo rand(1,6); ?>.jpg" alt="" style="width: 700px;height: 350px;">

            </div>

            <div class="col-md-4">
                <h3>Description du projet</h3>
                <p><?php echo  $resume;?></p>
                <h3>Status du projet</h3>
                <ul>
                    <li><?php echo  $status;?></li>
                   
                </ul>
            </div>

            <div class="col-md-4">
             <h3>Budget</h3>
            <ul>
               
                <li><?php echo  $budget."$";?></li>
                </ul>
            
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row --
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->



        <!-- Footer -->
        
    </div>
    <hr>
        <?php include_once('../views/footer_view.php');?>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
