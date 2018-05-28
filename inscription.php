<?php

header('Content-type: text/html; charset=UTF-8');

$nom = filter_input(INPUT_POST, 'nom');
$prenom = filter_input(INPUT_POST, 'prenom');
$pseudo = filter_input(INPUT_POST, 'pseudo');
$mail = filter_input(INPUT_POST, 'mail');
$pass = filter_input(INPUT_POST, 'pass');

if (isset($pseudo,$pass)) 
{   
    $nom = trim($nom);
    $prenom = trim($prenom);
    $pseudo = trim($pseudo);
    $mail = trim($mail);
    $pass = trim($pass);   

    if(isset($pseudo,$pass,$nom,$prenom,$mail)) 
    {
    include "connec.php";
        
    $requete = "SELECT count(*) FROM membres WHERE pseudo='$pseudo'";    
    
    $req_prep = $connect->prepare($requete);
    $req_prep->execute(array(0=>$pseudo));
    $resultat = $req_prep->fetchColumn();
  
        if ($resultat == 0) 
        {
            $insertion = "INSERT INTO membres(pseudo,pass,Nom,Prenom,Mail,date_enregistrement) VALUES('$pseudo', '$pass', '$nom','$prenom','$mail', NOW())";
            $connect->exec($insertion);
        }
    }
}
?>
<html>
  <head>
    <title>Belletable - Connexion</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
  </head>
    <body>
        <div class="login-area">
            <div class="bg-image">
                <div class="login-signup">
                    <div class="container">
                        <div class="login-header">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="login-logo">
                                        <img src="" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="login-details">
                                        <ul class="nav nav-tabs navbar-right">
                                            <li><a data-toggle="tab" href="login.php">Déjà inscrit ?</a></li>
                                            <li><a data-toggle="tab" href="index.php">Retour</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div id="register" class="tab-pane fade in active">
                               <div class="login-inner">
                                    <div class="title">
                                        <h1>Inscrivez <span>vous</span></h1>
                                    </div>
                                    <div class="login-form">
                                        <form form action="#" method="post">
                                            <div class="form-details">
                                                <label class="user">
                                                    <input type="text" id="nom" placeholder="Nom" name="nom" id="nom" required>
                                                    <input type="text" id="prenom" placeholder="Prénom" name="prenom" id="prenom" required> 
                                                    <input type="text" id="pseudo" placeholder="Nom d'utilisateur" name="pseudo" id="pseudo" required>                                                    
                                                </label>
                                                <label class="mail">
                                                    <input type="email" name="mail" placeholder="Adresse e-mail" id="mail">
                                                </label>                                          
                                                <label class="pass">
                                                    <input type="password" id="pass" placeholder="Mot de passe" name="pass" required>
                                                    <input type="password" id="confPass" placeholder="Confirmation mot de passe" name="confPass" required>
                                                </label>
                                            </div>
                                            <button type="submit" id="valider" class="form-btn"> Inscription</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>