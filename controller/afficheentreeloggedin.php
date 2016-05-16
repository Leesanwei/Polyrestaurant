<?php 
	header ('Content-type: text/html; charset=iso8859-15');

	
	require('../database/config.php'); 
	require('../model/affichecarte.php'); 
  
		$rows=entree();
		foreach($rows as $row){
		echo '<tr>';
		echo '<td><img src="'.$row['image'].'" style="height:70px;width:110px"></td>';
		echo '<td>'.$row['nom'].'</td>';
		echo '<td>'.$row['description'].'</td>';
		echo '<td>'.$row['prix'].'</td>';
		echo '<td><button class="btn btn-primary btn-lg" type="submit" name="ajouterentree" value="'.$value.'">Ajouter au panier</button></td>';
		echo '  </tr>';
		$value = $value+1;
	}
	$value=1;
	
?>