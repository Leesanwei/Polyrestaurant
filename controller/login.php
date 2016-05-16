<?php

require('../database/config.php'); 
require('../model/login.php'); 
	
  
     if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		
 
		$result = login($username,$password);
		if($result == 1){
			 $row = checkadmin($username);
			if($row['admin']==1)
			{
			setcookie("admin",$row['id_client'],time() + (86400  * 30),'/');
			
            header("Location: ../view/loggedinadmin.php");
            exit();
			}
			else{
			
            $result=setcookie("user",$row['id_client'],time() + (86400  * 30),'/');
			setcookie("alert",1,time() + (86400  * 30),'/');
            header("Location: ../view/loggedin.php");
            exit();
			}
        }
 
		header("location:../view/login.php?msg=failed");
		
      exit();
 
    }


?>