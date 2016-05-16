<?php
		function login($username,$password){
			global $db;
			$query = mysqli_query($db,"SELECT * FROM `client` WHERE username='$username' AND password='$password'");
			return mysqli_num_rows($query);
		}

		function checkadmin($username){
			global $db;
			$query = mysqli_query($db,"SELECT * FROM `client` WHERE username='$username'"); 
			$row = mysqli_fetch_array($query,MYSQLI_ASSOC); 
			return $row;
		}
?>	