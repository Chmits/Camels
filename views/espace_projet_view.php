<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Espace Projet</title>

    

    <!-- Bootstrap Core CSS -->
    <link href="../resources/CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../resources/CSS/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
       <?php  include_once('../views/links.php'); ?>

</head>

<body id="page-top" >

    <!-- Navigation -->
    <?php  include_once('../views/menu_view.php'); ?>
  

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Espace Projet
                    <strong><?php if(isset($_SESSION["username"])) echo $_SESSION["username"]; ?><strong>
                </h1>
            </div>
        </div>
        <!-- /.row -->


        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/images/prj1.jpg" alt="" style="width: 400px;height: 160px">
                </a>
                <h3>
                    <a href="project_show.php?id=1">Project Symphony</a>
                </h3>
                <p>Introduction. Le framework symfony est un projet Open-Source depuis plus de 3 ans. Il est devenu l'un des plus populaire framework PHP grâce à ses ...</p>
             <a href="#" class="btn btn-primary btn-xl page-scroll">Plus d'informatio !</a>

            </div>

            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/images/prj2.jpg" alt="" style="width: 400px;height: 160px">
                </a>
                <h3>
                    <a href="#">Project Android</a>
                </h3>
                <p>Ce projet a pour but de présenter Android Studio, le nouvel IDE de Google, mais pas seulement. On verra comment l'installer, le configurer et créer un premier ...</p>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../resources/images/prj3.jpg" alt="" style="width: 400px;height: 160px">
                </a>
                <h3>
                    <a href="#">Project Java Desktop</a>
                </h3>
                <p>Ce projet a pour but de présenter Android Studio, le nouvel IDE de Google, mais pas seulement. On verra comment l'installer, le configurer et créer un premier ...</p>
            </div>
        </div>
        <!-- /.row -->

        



        <!-- /.row -->

    </div>

        <?php  include_once('../views/footer_view.php'); ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../resources/js/bootstrap.min.js"></script>



</body>

</html>
