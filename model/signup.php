<?php
	
	function create_user($username,$password,$nom,$prenom,$datenaissance,$rue,$codepostal ,$ville,$email,$telephone){
	global $db;
	$sql = mysqli_query($db,"INSERT INTO client (nom, prenom, date_naissance, rue, code_postal, ville, mail, telephone, username, password, admin) VALUES ('$nom','$prenom','$datenaissance','$rue','$codepostal','$ville','$email','$telephone','$username','$password','false')");
	return $sql;
	}
	

?>
