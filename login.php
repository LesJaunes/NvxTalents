<?php
	session_start();

	$message = null;

	$pseudo = filter_input(INPUT_POST, 'pseudo');
	$pass = filter_input(INPUT_POST, 'pass');

	if (isset($pseudo,$pass)) 
	{
	    $pseudo = trim($pseudo);
	    $pass = trim($pass);
	  
	  	if(isset($pseudo,$pass)) 
	  	{
		    include "connec.php";
		    
		    $requete = "SELECT * FROM membres WHERE pseudo = '$pseudo' AND pass = '$pass'";
		    
		    $reqCompte = $connect->prepare($requete);
		    $reqCompte->execute();
			$resReqCompte = $reqCompte->fetchAll(PDO::FETCH_ASSOC);

			if (!empty($resReqCompte))
			{

			   $rang = $resReqCompte[0]['rang'];
			   $idCpt = $resReqCompte[0]['ID'];
			   $nbCon = $resReqCompte[0]['nbCon'];
			   $nbCon = $nbCon + 1;

			   if($rang == 1)
			   {
			   		$ReqMajInfosConnection = "UPDATE membres SET lastSessionDebut = NOW(), nbCon = '$nbCon' WHERE ID = '$idCpt' ";
			   		$ReqMaj = $connect->prepare($ReqMajInfosConnection);
		    		$ReqMaj->execute();

			    	$_SESSION['admin'] = $pseudo."-".$pass;
			    	header("location:menu.php");
			   }
			   elseif ($rang == 0) 
			   {
			   		$ReqMajInfosConnection = "UPDATE membres SET lastSessionDebut = NOW(), nbCon = '$nbCon' WHERE ID = '$idCpt' ";
			   		$ReqMaj = $connect->prepare($ReqMajInfosConnection);
		    		$ReqMaj->execute();
		    		
			   		$_SESSION['user'] = $pseudo."-".$pass;
			    	header("location:espaceclient.php");
			   }
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
	<div class="container">	  
		  <div class="login-area">
	        <div class="bg-image">
	            <div class="login-signup">
	                <div class="container">
	                    <div class="login-header">
	                        <div class="row">
	                            <div class="col-md-6 col-sm-6 col-xs-12">
	                                <div class="login-logo">
	                                    <!--<img src="img/logo.png" alt="Belletablelogo" class="img-responsive">-->
	                                </div>
	                            </div>
	                            <div class="col-md-6 col-sm-6 col-xs-12">
	                                <div class="login-details">
	                                    <ul class="nav nav-tabs navbar-right">
	                                        <li><a data-toggle="tab" href="inscription.php">S'inscrire</a></li>
	                                        <li><a data-toggle="tab" href="index.php">Retour</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="tab-content">
	                        <div id="login" class="tab-pane fade in active">
	                            <div class="login-inner">
	                                <div class="title">
	                                    <h1>Content de vous revoir, <span>Connectez-vous</span></h1>
	                                </div>
	                                <div class="login-form">
	                                    <form action="#" method="post">
	                                        <div class="form-details">
	                                            <label class="user">
	                                                <input type="text" id="pseudo" placeholder="Utilisateur" name="pseudo" id="pseudo" required>
	                                            </label>
	                                            <label class="pass">
	                                                <input type="password" id="pass" placeholder="Mot de passe" name="pass" required>
	                                            </label>
	                                        </div>
	                                        <button type="submit" class="form-btn" id="valider" onsubmit="">Se connecter</button>
	                                    </form>
	                                </div>
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