<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web4innovation - Camels team</title>
      <?php include_once('../views/links2.php');?>

   
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

        <?php include_once('../views/header1_view.php');?> <!-- navigation-->

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8 col-md-offset-2">
                        <p class="brand-heading">WEB<ok style="color: red;">4</ok>INNOVATION</p>
                        <p class="intro-text">Bienvenue à la terre des opportunités</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center" >
        <div class="row">
                <img src="../resources/acceuil_needs/img/logo.jpg"/>
                <h2>A propos notre association </h2>
                <p>L’association des Tunisiens UNiversitaires En Suisse (TUNES) est une jeune association, fondée en Mai 2011, officiellement reconnue par l’Ecole Polytechnique Fédérale de Lausanne (EPFL), à caractère apolitique, areligieux et à but non lucratif. Notre association, qui puise sa poigne dans la dextérité, la compétence et  la motivation de ses jeunes membres issus des hautes universités helvétiques a pour mission première d’encadrer les étudiants tunisiens en Suisse et de faciliter leur intégration au sein de la vie estudiantine. Nous faisons également de la promotion de l’image de la Tunisie et de son développement un souci majeur et un sujet de labeur et de mobilisation continue. Au sein de TUNES, nous croyons fermement que tout Tunisien, quel que soit son origine, son lieu de vie et son appartenance sociale est en droit d’avoir une vie digne et respectable où logement, nourriture et accès à l’éducation ainsi qu’à l’information est un minimum garanti. Notre association ne rate pas une manifestation ou un événement culturel, afin de faire briller l’image de la Tunisie, d’assurer la promotion de son tourisme et de récolter des fonds pour les régions les plus démunies.</p>
        </div>
    </section>

<hr>  
       
    <section id="partenaires">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nos partenaires</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="../resources/acceuil_needs/img/ensi.png" style="width: 100px;height:100px">
                         <h3>ENSI Junior Entreprise</h3>
                        <p class="text-muted"><a src="http://ensi-junior-entreprise.com/">
                        website: ensi-junior-entreprise.com </a></p>
         
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="../resources/acceuil_needs/img/eniso.png" style="width: 200px;height:100px">
                        <h3>ENISO Junior Entreprise</h3>
                        <p class="text-muted"><a src="http://jeeniso.com//">
                        website: www.jeeniso.com </a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="../resources/acceuil_needs/img/esprit.png" style="width: 150px;height:100px">
                        <h3>ESPRIT Junior Entreprise</h3>
                        <p class="text-muted"><a src="http://jeeniso.com//">
                        website: www.esprit.com </a></p>
                    </div>
                </div>
                <style type="text/css">
                a{color: purple;text-decoration: none;}
                </style>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="../resources/acceuil_needs/img/tunes.jpg" style="width: 150px;height:100px">
                        <h3>TUNES</h3>
                        <p class="text-muted"><a src="http://tunes.epfl.ch/">
                        website: www.tunes.epfl.ch </a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- Contact Section -->
  <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Inscrivez-vous à notre plateforme</h2>
                <p style="text-align:center">Veuillez nous contacter afin de vous inscrire</p>
        
                <form id="contact-form" method="post" action="#" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name"></label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Prénom *" required="required" data-error="Ce champ est obligatoire.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname"></label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Nom *" required="required" data-error="Ce champ est obligatoire.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                             </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email"></label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Ce champ est obligatoire.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_phone"></label>
                                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Téléphone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message"></label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Envoyer message">
                                </div>
                            </div>
                        </div>
                   </form>
            </div>
        </div>
    </section>

    <!-- Footer -->        
<footer> <section id="contact" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Nous suivre</h2>
                    <hr class="primary">
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>123-456-6789</p>
                </div>

                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com" style="color: white;">camels@camels.tn</a></p>
                </div>
    <!--       <ul class="list-inline" >
<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
</ul>  -->     
   </div>
          </div>

</section>
        <?php  include_once('../views/script1.php'); ?>

</body>

</html>
