<?php 
	header ("Cache-Control:no-cache");
	if(!isset($_COOKIE["user"])) {
		header ("Location:login.php");
		exit();
	}
		 if(isset($_POST['logout'])){
		 
		 setcookie("user", "", time() - 3600);
		  header("Location: ../view/login.php");
            exit();
	 }
	 
	 
require('../database/config.php'); 
require('../model/info.php'); 
	
		$id_client = $_COOKIE["user"];
		$prenom = get_prenom($_COOKIE["user"]);
  
     if(isset($_POST['modifier'])){
        $password = mysqli_real_escape_string($db, $_POST['password']);
		$passwordhash = md5($password);
		$rue = mysqli_real_escape_string($db, $_POST['rue']);
		$codepostal = mysqli_real_escape_string($db, $_POST['codepostal']);
		$ville = mysqli_real_escape_string($db, $_POST['ville']);
		$email = mysqli_real_escape_string($db, $_POST['mail']);
		$telephone = mysqli_real_escape_string($db, $_POST['telephone']);
	 
		$result=update_info($password,$passwordhash,$rue,$codepostal,$ville,$email,$telephone,$_COOKIE["user"]);

		if($result == true){
 
              header("location:../view/info.php");
			  exit();
        }
 
       header("location:../view/modifyinfo.php");
			  exit();
 
    }
	 
	 ?>