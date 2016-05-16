<?php
	function get_prenom($id_client){
		global $db;
	
		$query = mysqli_query($db,"SELECT * FROM `client` WHERE id_client='$id_client'");
		$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $row['prenom'];
		
	}
	function get_info($id_client){
		global $db;
		 $query = mysqli_query($db,"SELECT * FROM `client` WHERE id_client='$id_client'"); 
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC); 
	return $row;
		
	}
	function update_info($password,$passwordhash,$rue,$codepostal,$ville,$email,$telephone,$id_client){
		global $db;
		$query = mysqli_query($db,"UPDATE `client` SET password=IF(LENGTH('$password')=0, password, '$passwordhash'), rue=IF(LENGTH('$rue')=0,rue, '$rue'), code_postal=IF(LENGTH('$codepostal')=0, code_postal, '$codepostal'), ville=IF(LENGTH('$ville')=0, ville, '$ville'), mail=IF(LENGTH('$email')=0, mail, '$email'), telephone=IF(LENGTH('$telephone')=0, telephone, '$telephone') WHERE id_client='$id_client'");
		return $query;
		
	}
?>