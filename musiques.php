<?php
    session_start();
?>
<html lang="fr" class="no-js">
  <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="" content="" />
      <meta name="T&A" content="" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->
      <title>BelleTable : Nouveaux Talents</title>
      <!-- BOOTSTRAP CORE CSS -->
      <link href="assets/css/bootstrap.css" rel="stylesheet" />
      <!-- ION ICONS STYLES -->
      <link href="assets/css/ionicons.css" rel="stylesheet" />
      <!-- FONT AWESOME ICONS STYLES -->
      <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- FANCYBOX POPUP STYLES -->
      <link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
      <!-- STYLES FOR VIEWPORT ANIMATION -->
      <link href="assets/css/animations.min.css" rel="stylesheet" />
      <!-- CUSTOM CSS -->
      <link href="assets/css/style-blue.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!--<link rel="stylesheet" type="text/css" href="css/mplayer.css">-->
  </head>
  <body data-spy="scroll" data-target="#menu-section">
    <!--MENU SECTION START-->
    <div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Belletable, nouveaux talents</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="concours.php" class="dropdown-toggle" data-toggle="dropdown">Concours</a>
                    <ul class="dropdown-menu">
                                      <li class="dropdown-header">Catégories</li>
                     <li><a href="videos.php" tabindex="-1" class="menu-item">Vidéos</a></li>
                     <li><a href="musiques.php" tabindex="-1" class="menu-item">Musiques</a></li>
                     <li><a href="photos.php" tabindex="-1" class="menu-item">Photos</a></li>
                     <li class="dropdown-footer"></li></li>
                    </ul>
                        <li><a href="#accueil">Contact</a></li>
                        <li><a href="#"></a></li>
                        <?php if(isset($_SESSION['user'])) // On vérifie que l'utilsateur est connecté
                            {
                                $pseudo = $_SESSION['user'];
                                echo "<li><a href='#'>Bonjour ".$pseudo."</a></li>";  // On affiche le pseudo de l'utilisateur                        
                                echo "<li><a href='deco.php'>Deconnexion</a></li>"; // On affiche le bouton de deconnexion
                            }
                            else // Si il n'est pas connecté on lui affiche "Inscription" et "Connexion"
                            {
                               echo "<li><a href='inscription.php'>Inscription</a></li>
                                <li><a href='login.php'>Connexion</a></li>";
                            }
                        ?>                    
                </ul>
            </div>
        </div>
    </div>
    <!--MENU SECTION END-->

    <!--HOME SECTION START-->
    <div id="home" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                    <div  data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">
                        <div class="carousel-inner">
                            <div class="item active">
                                <h2>Vous êtes musicien ? Faites comme tous ces participants</h2><br><br><br><br><br><br>	
                                <p><h4>Voici la liste de tous les différents participant à notre concours consacré à la musique, votez pour celui que vous préférez ! N'hésitez pas à vous inscrire sur notre site afin de participer au prochain concours ! Tout le monde est bienvenue !</h4></p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me"></div>
                </div>
            </div>
        </div>
    <!--HOME SECTION END-->

    <!--SERVICE SECTION START-->
    <section id="services" >
    <div class="container">
        <div class="container">		    
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="services-wrapper">
					<i class="ion-ios-musical-notes"></i>
					<h3>Hear the music</h3>
					<h5>Paul Johnson</h5>
					<h6>Envoyé par : </h6>
						<audio controls
						    <source src="musiques/Paul Johnson - Hear The Music.mp3" type="audio/mpeg" />
						    <a href="musiques/Paul Johnson - Hear The Music.mp3">BeBopAliens</a>
						    An html5-capable browser is required to play this audio. 
					    </audio>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="services-wrapper">
					<i class="ion-ios-musical-notes"></i>
					<h3>Perturbator</h3>
					<h5>Hotline Miami</h5>
					<h6>Envoyé par : </h6>
					<audio controls
						    <source src="musiques/Perturbator.mp3" type="audio/mpeg" />
						    <a href="musiques/Perturbator.mp3"></a>
						    An html5-capable browser is required to play this audio. 
					    </audio>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="services-wrapper">
					<i class="ion-ios-musical-notes"></i>
					<h3>Happy (Neus Remix)</h3>
					<h5>Pharrell Williams</h5>
					<h6>Envoyé par : </h6>
					<audio controls
						    <source src="musiques/Pharrell Williams - Happy (Neus Remix).mp3" type="audio/mpeg" />
						    <a href="musiques/Pharrell Williams - Happy (Neus Remix).mp3">BeBopAliens</a>
						    An html5-capable browser is required to play this audio. 
					    </audio>
				</div>
			</div>
		</div>
    </section>
    <!--SERVICE SECTION END-->

    <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">
    <hr color="blue"> 
          <div class="row" id="contact">
    	  <HR align=center size=8 width="100%">
            <div class="col-md-3">
              <address>
    		  <HR align=center size=8 width="100%">
                  <strong>Belletable</strong>
                  <br>
                  <i class="fa fa-map-pin fa-fw text-primary"></i> 20 Rue de la gare - PARIS - 75100
                  <br>
                  <i class="fa fa-phone fa-fw text-primary"></i> 01 75 02 77 14
                  <br>
                  <i class="fa fa-envelope-o fa-fw text-primary"></i> contact@belletable.fr
                  <br>
                </address>
            </div>
          </div>
          <div class="row subfooter">
            <!--@todo: replace with company copyright details-->
            <div class="col-md-7">
              <p align="center">Copyright © T&A </p>
            </div>
          </div>
        </div>
      </footer>
    <!--CONTACT SECTION END-->


	<!--<div class="container">
		<div class="row text-center header" data-anim-type="fade-in-up">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Contact Details </h3>
					<hr>
					</div>
			</div>
			<div class="row" data-anim-type="fade-in-up">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="contact-wrapper">
					<h3></h3>
					<p></p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="contact-wrapper">
					<h3>Quick Contact</h3>
					<h4><strong>Email : </strong> contact@belletable.fr </h4>
					<h4><strong>Téléphone : </strong> 01 75 02 77 14 </h4>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<div class="contact-wrapper">
					<h3>Addresse : </h3>
					<h4>20 Rue de la gare - PARIS - 75100</h4>
					<h4>France</h4>
					<div class="footer-div">
						Copyright © T&A  | <a href="#" target="_blank">Copyright © T&A </a>
					</div>
				</div>
			</div>
		</div>
	</div>-->


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
    <!-- CORE JQUERY -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- EASING SCROLL SCRIPTS PLUGIN -->
    <script src="assets/js/vegas/jquery.vegas.min.js"></script>
    <!-- VEGAS SLIDESHOW SCRIPTS -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- FANCYBOX PLUGIN -->
    <script src="assets/js/source/jquery.fancybox.js"></script>
    <!-- ISOTOPE SCRIPTS -->
    <script src="assets/js/jquery.isotope.js"></script>
    <!-- VIEWPORT ANIMATION SCRIPTS   -->
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/animations.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    </body>
</html>
