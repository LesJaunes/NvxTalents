<?php
    session_start();
?>
<html lang="fr" class="no-js" >
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
  <link href="assets/css/style.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="#">Belletable, nouveaux talents</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="concours.php" class="dropdown-toggle" data-toggle="dropdown">Concours</a>
                    <ul class="dropdown-menu">
                                      <li class="dropdown-header">Catégories</li>
                     <li><a href="musiques.php" tabindex="-1" class="menu-item">Musiques</a></li>
                     <li><a href="displayimages.php" tabindex="-1" class="menu-item">Photos</a></li>
					 <li class="dropdown-header">Catégories upload</li>
                     <li><a href="musiquesupload.php" tabindex="-1" class="menu-item">Musiques upload</a></li>
                     <li><a href="photosupload.php" tabindex="-1" class="menu-item">Photos upload</a></li>
                     <li class="dropdown-footer"></li></li>
                    </ul>
                    <li><a href="contact.php">Contact</a></li>
					<li><a href='#'></a></li>
					<?php if(isset($_SESSION['user'])) // On vérifie que l'utilsateur est connecté
                            {
                                $pseudo = $_SESSION['user'];
                                echo "<li><a href='#'>Bonjour ".$pseudo."</a></li>
                                <li><a href='#' class='dropdown-toggle' data-toggle='dropdown'>Envoyez vos créations</a>
                                <ul class='dropdown-menu'>
                                    <li class='dropdown-header'>Catégories upload</li>
                                    <li><a href='musiquesupload.php' tabindex='-1' class='menu-item'>Musiques upload</a></li>
                                    <li><a href='photosupload.php' tabindex='-1' class='menu-item'>Photos upload</a></li>
                                <li class='dropdown-footer'></li></li>
                                </ul></li>";
                            
                              echo "<li><a href='deco.php'>Deconnexion</a></li>"; // On affiche le bouton de deconnexion
                            }
                            else // Si il n'est pas connecté on lui affiche 'Inscription' et 'Connexion'
                            {
                               echo "<li><a href='inscription.php'>Inscription</a></li>
                                <li><a href='login.php'>Connexion</a></li>";
                            }
                        ?>
                </ul>
            </div>
        </div>
    </div>
	<br><br><div id="home" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                    <div  data-ride="carousel" class="carousel slide  animate-in" data-anim-type="fade-in-up">

                        <div class="carousel-inner">
                            <div class="item active">
                                <h2>Participez au concours dans la catégorie "photos" !</h2><br><br><br><br><br><br>	
                                <p><h4>Vous pouvez ici publier vos plus belles photos et espérer remporter le concours, n'hésitez plus, foncez !</h4></p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row animate-in" data-anim-type="fade-in-up">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me"></div>
                </div>
            </div>

        </div><br><br><br><br><br><br><br>
	<div id="regFormContainer" class="container">
	<div class="row text-center header">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                    <form action="uploadImages.php" method="post" onsubmit="return validateUploadFile();" enctype="multipart/form-data" >
                        <p><input type="hidden" name="MAX_FILE_SIZE" value="1000000000000" /></p>
                        <div class="uploadFileprompt">
                            <div class="span_left">Fichier à Upload - Max. 100kb</div><br>
                            <center><div class="span_right"><input type="file" name="txtUploadFile[]"  /></div></center><br>
                        </div>
						<input type="submit" name="submit" value="Envoyer"  class="send_button"/>
					</form>
					</div>
	</div> 
	</div>
	
	
	
	
	
	</body>
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