<?php 
	header ("Cache-Control:no-cache");
	header ('Content-type: text/html; charset=iso8859-15');
	$value = 1;
	 
	if(!isset($_COOKIE["admin"])) {
		header ("Location:../view/login.php");
		exit();
	}
	
	
	 if(isset($_POST['logout'])){
		 
		 setcookie("admin", "", time() - 3600);
		  header("Location: ../view/login.php");
            exit();
	 }
	 
require('../database/config.php'); 
require('../model/info.php'); 
require('../model/affichecarte.php'); 
require('../model/loggedinadmin.php'); 
	$id_client = $_COOKIE["admin"];
  

		$row=commandes_en_cours();


		$prenom = get_prenom($_COOKIE["admin"]);
	
			
if(isset($_POST['supprimer']))
{
	$day=date("Y-m-d H:i:s");  
	supprimer_commande($_POST['supprimer']);

		header ("Location:../view/loggedinadmin.php");
	exit();
}	

	
?>