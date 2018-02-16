<?php

header('Content-type: text/html; charset=UTF-8');

$message = null;

$pseudo = filter_input(INPUT_POST, 'pseudo');
$pass = filter_input(INPUT_POST, 'pass');

if (isset($pseudo,$pass)) 
{   

    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $pass = trim($pass) != '' ? $pass : null;
   

    if(isset($pseudo,$pass)) 
    {
    $hostname = "localhost";
    $database = "membrestalents";
    $username = "root";
    $password = "";
    
    
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    
    try
    {
      $connect = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
    }
    catch (PDOException $e)
    {
      exit('problème de connexion à la base');
    }
        
    $requete = "SELECT count(*) FROM membres WHERE pseudo = ?";
    
    try
    {
      $req_prep = $connect->prepare($requete);
      $req_prep->execute(array(0=>$pseudo));
      $resultat = $req_prep->fetchColumn();
      
      if ($resultat == 0) 
      {
        $insertion = "INSERT INTO membres(pseudo,pass,date_enregistrement) VALUES(:nom, :password, NOW())";
        
        $insert_prep = $connect->prepare($insertion);
        
        $inser_exec = $insert_prep->execute(array(':nom'=>$pseudo,':password'=>$pass));

        if ($inser_exec === true) 
        {
          if (!session_id()) session_start();
          $_SESSION['login'] = $pseudo;
          
          $message = 'Votre inscription est enregistrée.';
          /*ou redirection vers une page en cas de succès ex : menu.php*/
          /*header("Location: menu.php");
            exit();  */
        }   
      }
      else
      {   
        $message = 'Ce pseudo est déjà utilisé, changez-le.';
      }
    }
    catch (PDOException $e)
    {
      $message = 'Problème dans la requête d\'insertion';
    }	
  }
  else 
  {   
    $message = 'Les champs Pseudo et Mot de passe doivent être remplis.';
  }
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formulaire d'inscription</title>

<style type="text/css">
<!--
body, p, h1,form, input, fieldset 
{
  margin:0;
  padding:0;
}

body 
{
  background-color: #F4F4F4;
}

#inscription 
{
  width:400px;
  background:#FFFFFF;
  margin:20px auto;
  font-family: Arial, Helvetica, sans-serif;
  font-size:1em;
  border:1px solid #ccc;
  border-radius:10px;
}

#inscription fieldset 
{
  text-align:center;
  font-size:1.2em;
  background:#333333;
  padding-bottom:5px;
  margin-bottom:15px;
  color:#FFFFFF;
  letter-spacing:0.05em;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
}

#inscription p 
{
  padding-top:15px;
  padding-right:50px;
  text-align:right;
}

#inscription input 
{
  margin-left:30px;
  width:150px;
}

#inscription #valider 
{
  width:155px;
  font-size:0.8em;
}

#inscription #message 
{
  height:27px;
  color:#F00;
  font-size:0.8em;
  font-weight:bold;
  text-align:center;
  padding:10px 0 0 0;
}
-->
</style>
</head>
<body>
<div id = "inscription">
    <form action = "#" method = "post">
    <fieldset>Inscription</fieldset>
    <p><label for = "pseudo">Pseudo : </label><input type = "text" name = "pseudo" id = "pseudo" /></p>
    <p><label for = "pass">Mot de passe : </label><input type = "password" name = "pass" id = "pass" /></p>
    <p><input type = "submit" value = "Envoyer" id = "valider" /></p>
    </form>
    <p id = "message"><?= $message?:'' ?></p>
	<p class="m-b-0 m-t">Retour à l'accueil <a href="index.php">BelleTable</a></p>
</div>
</body>
</html>