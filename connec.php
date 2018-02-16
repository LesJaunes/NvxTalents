<?php 

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

?>