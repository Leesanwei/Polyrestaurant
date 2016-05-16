<?php 
	header ("Cache-Control:no-cache");
	if(!isset($_COOKIE["user"])) {
		header ("Location:../view/login.php");
		exit();
	}
	
	 if(isset($_POST['logout'])){
		 
		 setcookie("user", "", time() - 3600);
		  header("Location: ../view/login.php");
            exit();
	 }
	 
	 if(isset($_POST['modifyinfo'])){
		 
		  header("Location: ../view/modifyinfo.php");
            exit();
	 }
	 
require('../database/config.php'); 
require('../model/info.php'); 
	
	$id_client = $_COOKIE["user"];

	
		$prenom = get_prenom($_COOKIE["user"]);
  
			$row = get_info($_COOKIE["user"]);
			$nom = $row['nom'];
			$prenom = $row['prenom'];
			$datenaissance = $row['date_naissance'];
			$rue = $row['rue'];
			$codepostal = $row['code_postal'];
			$ville = $row['ville'];
			$mail = $row['mail'];
			$telephone = $row['telephone'];
			
?>