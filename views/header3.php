   
   <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Web </span>4 innovation
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a  class="page-scroll" href="../controllers/acceuil.php">Accueil</a>
                    </li>
                 
                    <li>
                        <a class="page-scroll" href="../controllers/projets_soumis.php">Espace projets</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="../controllers/espace_etudiant.php">Nos etudiants</a>
                    </li>
                    <?php if( $con == "connected")
                            {  ?>
                             <li>
                        <a class="page-scroll" href="../controllers/profil.php">Profil</a>
                    </li>
                            <li>
                        <a class="page-scroll" href="../controllers/logout.php">Se deconnecter</a>
                    </li>
                    <?php } else { ?>
                     <li>
                        <a class="page-scroll" href="#contact">S'inscrire</a>
                    </li>  
                        <li>
                        <a class="page-scroll" href="../controllers/login.php">S'authentifier</a>
                    </li>  
                    <?php } ?>
              
                 </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>