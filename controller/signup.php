<?php

require('../database/config.php'); 
require('../model/signup.php'); 	
  
     if(isset($_POST['signup'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		$nom = mysqli_real_escape_string($db, $_POST['nom']);
		$prenom = mysqli_real_escape_string($db, $_POST['prenom']);
		$datenaissance = mysqli_real_escape_string($db, $_POST['datenaissance']);
		$rue = mysqli_real_escape_string($db, $_POST['rue']);
		$codepostal = mysqli_real_escape_string($db, $_POST['codepostal']);
		$ville = mysqli_real_escape_string($db, $_POST['ville']);
		$email = mysqli_real_escape_string($db, $_POST['mail']);
		$telephone = mysqli_real_escape_string($db, $_POST['telephone']);
	 
 
$query = mysqli_query($db,"SELECT * FROM `client` WHERE username='$username'");

		if(mysqli_num_rows($query) == 1){
 
              header("location:../view/signup.php?msg=failed");
			  exit();
        }
 
		$result = create_user($username,$password,$nom,$prenom,$datenaissance,$rue,$codepostal ,$ville,$email,$telephone);
		if($result == true){
 
              header("location:../view/login.php");
			  exit();
        }
		else{
			  header("location:../view/signup.php");
			  exit();
			
		}
       
 
    }


?>