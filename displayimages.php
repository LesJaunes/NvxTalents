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
  <link rel="stylesheet" type="text/css" href="css/galerie.css">
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
                     <li class="dropdown-footer"></li></li>
                    </ul>
                    <li><a href="contact.php">Contact</a></li>
					<li><a href='#'></a></li>   
					<?php if(isset($_SESSION['user'])) // On vérifie que l'utilsateur est connecté
                            {
                                $pseudo = $_SESSION['user'];
                                echo "<li><a href='#'>Bonjour ".$pseudo."</a></li>
                                <li><a href='#' class='dropdown-toggle' data-toggle='dropdown'>Envoyez vos création</a>
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
	<section id="services" >
    <div class="container">
        <div class="row text-center header">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 animate-in" data-anim-type="fade-in-up">
                <div class="gallery">
                <?php
                    $liste = array(); 
                    $dir="images/";
                  if ($dossier = opendir($dir)) 
                  {  
                      while (($item = readdir($dossier)) !== false) {  
                          if ($item[0] == '.') { continue; }
                          $explode = explode('.', $item);  
                          if (!in_array(end($explode), array('jpg','jpeg','png','gif'))) { continue; }  
                          $liste[] = $item;  
                      }  
                      closedir($dossier);  
                      rsort($liste); 

                      $nb_images_ligne = 500;
                      $i=1;

                      foreach ($liste as $val) 
                      { 

                          if($i%$nb_images_ligne != 0)
                          {
                              echo '<figure>
                                            <img src="'.$dir.'/'.$val.'" alt="" class="img-responsive text-center"" />
                                            <figcaption>Daytona Beach <small>United States</small></figcaption>
                                          </figure>'."\n";

                          }
                      $i++;
                      } 
                  }
                  ?>                  
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
          <symbol id="close" viewBox="0 0 18 18">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                    S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                    l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                    c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                    s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
          </symbol>
        </svg>

            </div>
        </div>
    <div class="row animate-in" data-anim-type="fade-in-up">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

        </div>
    </div>
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

    <script>
        popup = {
      init: function(){
        $('figure').click(function(){
          popup.open($(this));
        });
        
        $(document).on('click', '.popup img', function(){
          return false;
        }).on('click', '.popup', function(){
          popup.close();
        })
      },
      open: function($figure) {
        $('.gallery').addClass('pop');
        $popup = $('<div class="popup" />').appendTo($('body'));
        $fig = $figure.clone().appendTo($('.popup'));
        $bg = $('<div class="bg" />').appendTo($('.popup'));
        $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
        $shadow = $('<div class="shadow" />').appendTo($fig);
        src = $('img', $fig).attr('src');
        $shadow.css({backgroundImage: 'url(' + src + ')'});
        $bg.css({backgroundImage: 'url(' + src + ')'});
        setTimeout(function(){
          $('.popup').addClass('pop');
        }, 10);
      },
      close: function(){
        $('.gallery, .popup').removeClass('pop');
        setTimeout(function(){
          $('.popup').remove()
        }, 100);
      }
    }

    popup.init()

    </script>

    </body>

</html>