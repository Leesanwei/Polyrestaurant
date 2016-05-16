<?php
	
	function ajouterentree($entreevalue, $id_client){
		global $db;
	
		$day=date("Y-m-d H:i:s");
		$value = $entreevalue;
		$query = mysqli_query($db,"SELECT * FROM `entree` WHERE id_entree ='$value'"); 
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$query = mysqli_query($db,"INSERT INTO commandes(date_reservation,id_client,nom,prix,image) VALUES ('$day','$id_client','".$row['nom']."','".$row['prix']."','".$row['image']."')");
	}
	
	function ajouterplat($platvalue, $id_client){
		global $db;
		$day=date("Y-m-d H:i:s");
		$value = $platvalue;
		$query = mysqli_query($db,"SELECT * FROM `plat` WHERE id_plat ='$value'"); 
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC); 
	$query = mysqli_query($db,"INSERT INTO commandes(date_reservation,id_client,nom,prix,image) VALUES ('$day','$id_client','".$row['nom']."','".$row['prix']."','".$row['image']."')");
		
	}
	
	function ajouterdessert($dessertvalue, $id_client){
		global $db;
		$day=date("Y-m-d H:i:s");
		$value = $dessertvalue;
	$query = mysqli_query($db,"SELECT * FROM `dessert` WHERE id_dessert ='$value'"); 
	$row = mysqli_fetch_array($query,MYSQLI_ASSOC); 
	$query = mysqli_query($db,"INSERT INTO commandes(date_reservation,id_client,nom,prix,image) VALUES ('$day','$id_client','".$row['nom']."','".$row['prix']."','".$row['image']."')");		
	}
	
	function validercommande($id_client){
			global $db;
		$query = mysqli_query($db,"DELETE FROM `commandes` WHERE id_client ='$id_client'"); 
		
		
		
	}
	
	function supprimercommande($supprimevalue,$id_client){
		global $db;
		 $query = mysqli_query($db,"DELETE FROM `commandes` WHERE id_reservation = '$supprimevalue' AND id_client = '$id_client'");
		$rows=array();
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
   $rows[] = $row;
return $rows;
			}
	
?>
