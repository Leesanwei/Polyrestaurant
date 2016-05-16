<?php 
	header ("Cache-Control:no-cache");
	header ('Content-type: text/html; charset=iso8859-15');
	require('../database/config.php'); 
	require('../model/loggedin.php'); 
	require('../model/info.php'); 
	
	$value = 1;
	$alert = $_COOKIE["alert"];
	  
	  if($alert==1){
	  $message = "Ce site utilise des cookies, cliquez OK pour continuer! :)";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$alert = 2;
		setcookie("alert",2,time() + (86400  * 30),'/');
	  } 
	 
	 
	if(!isset($_COOKIE["user"])) {
		header ("Location:../view/login.php");
		exit();
	}
	
	
	 if(isset($_POST['logout'])){
		 
		 setcookie("user", "", time() - 3600-(86400  * 30));
		  header("Location: ../view/login.php");
            exit();
	 }
	 
	 if(isset($_POST['info'])){
		 
		  header("Location: ../view/info.php");
            exit();
	 }


	$id_client = $_COOKIE["user"];
	
	$prixtotal = 0;

		$prenom = get_prenom($_COOKIE["user"]);
		

if(isset($_POST['ajouterentree']))
{
	ajouterentree($_POST['ajouterentree'],$_COOKIE["user"]);
	header ("Location:../view/loggedin.php");
	exit();
}	

if(isset($_POST['ajouterplat']))
{
	ajouterplat($_POST['ajouterplat'],$_COOKIE["user"]);
	header ("Location:../view/loggedin.php");
	exit();
}	

if(isset($_POST['ajouterdessert']))
{
		ajouterdessert($_POST['ajouterdessert'],$_COOKIE["user"]);
	header ("Location:../view/loggedin.php");
	exit();
}	

if(isset($_POST['valider']))
{  
		validercommande($_COOKIE["user"]);
	header ("Location:../view/loggedin.php");;
	exit();
}
	
	
?>