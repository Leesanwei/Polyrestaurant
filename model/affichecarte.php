<?php
	
	function entree(){
		global $db;
		$query = mysqli_query($db,"SELECT * FROM `entree`");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
		return $rows;
	}
	
	function plat(){
		global $db;
	$query = mysqli_query($db,"SELECT * FROM `plat`");
		$rowsplat=array();
	while($rowplat = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rowsplat[] = $rowplat;
		return $rowsplat;
	}
	
	function dessert(){
		global $db;
		$query = mysqli_query($db,"SELECT * FROM `dessert`");
		$rowsdessert=array();
	while($rowdessert = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rowsdessert[] = $rowdessert;
		return $rowsdessert;
	}
	
	function commandes($id_client){
		global $db;
	
		$query = mysqli_query($db,"SELECT * FROM `commandes` WHERE id_client='$id_client'");
		$rowscommandes=array();
	while($rowcommandes = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rowscommandes[] = $rowcommandes;
		return $rowscommandes;
	}

	function historique($id_client){
		global $db;
		$query = mysqli_query($db,"SELECT * FROM `historique` WHERE id_client='$id_client'");
		$rowscommandes=array();
	while($rowcommandes = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rowscommandes[] = $rowcommandes;
		return $rowscommandes;
	}

	function commandes_en_cours(){
		global $db;
		 $query = mysqli_query($db,"SELECT * FROM `commandes_en_cours`");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
return $rows;
			}
?>