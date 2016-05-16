<?php
		   $mysql_server = '127.5.146.130:3306';
   $mysql_username = 'adminAMdwV27';
   $mysql_password = 'EfdJkdx6tsnz';
   $mysql_database = 'polyrestaurant';

   
   $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
      if (!$db)
   {
      die('Failed to connect to database server!<br>'.mysqli_error($db));
   }
   mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
   
	
?>