<?php
	session_start();

	if(isset($_SESSION['admin']))
	{
		include "connec.php";

		$cpt = $_SESSION['admin'];

		$infoCpt = explode("-",$cpt);
		$pseudo = $infoCpt[0];
		$pass = $infoCpt[1];

		$reqCompte = "SELECT ID FROM membres WHERE pseudo = '$pseudo' AND pass = '$pass'";
        $resCompte=$connect->query($reqCompte);
        $resCompte->setFetchMode(PDO::FETCH_OBJ);
        while($resReqCompte = $resCompte->fetch())
        {
        	$idCpt = $resReqCompte->ID;
        }

		$ReqMajInfosConnection = "UPDATE membres SET lastSessionFin = NOW() WHERE ID = '$idCpt' ";
		$ReqMaj = $connect->prepare($ReqMajInfosConnection);
		$ReqMaj->execute();

		session_destroy();
		header("location:index.php");
	}
	elseif ($_SESSION['user']) 
	{
		include "connec.php";

		$cpt = $_SESSION['user'];

		$infoCpt = explode("-",$cpt);
		$pseudo = $infoCpt[0];
		$pass = $infoCpt[1];

		$reqCompte = "SELECT ID FROM membres WHERE pseudo = '$pseudo' AND pass = '$pass'";
        $resCompte=$connect->query($reqCompte);
        $resCompte->setFetchMode(PDO::FETCH_OBJ);
        while($resReqCompte = $resCompte->fetch())
        {
        	$idCpt = $resReqCompte->ID;
        }

		$ReqMajInfosConnection = "UPDATE membres SET lastSessionFin = NOW() WHERE ID = '$idCpt' ";
		$ReqMaj = $connect->prepare($ReqMajInfosConnection);
		$ReqMaj->execute();

		session_destroy();
		header("location:index.php");
	}	
?>