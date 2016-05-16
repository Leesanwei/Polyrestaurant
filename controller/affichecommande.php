<?php 
  
		$rowscommande=commandes($_COOKIE["user"]);
		foreach($rowscommande as $rowcommande){
		echo '<tr>';
		echo '<td><img src="'.$rowcommande['image'].'" style="height:70px;width:110px"></td>';
		echo '<td>'.$rowcommande['nom'].'</td>';
		echo '<td>'.$rowcommande['prix'].'</td>';
		echo '</tr>';
		$prixtotal = $prixtotal + $rowcommande['prix'];
	}
	$value=1;
	
?>