<?php
		   $mysql_server = '';
   $mysql_username = '';
   $mysql_password = '';
   $mysql_database = 'polyrestaurant';

   
   $db = mysqli_connect($mysql_server, $mysql_username, $mysql_password);
      if (!$db)
   {
      die('Failed to connect to database server!<br>'.mysqli_error($db));
   }
   mysqli_select_db($db, $mysql_database) or die('Failed to select database<br>'.mysqli_error($db));
   
	
?>
