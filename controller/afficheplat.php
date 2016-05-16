<?php 
	
  
		$rows=plat();
		foreach($rows as $row){
			
		echo '<tr>';
		echo '<td><img src="'.$row['image'].'" style="height:70px;width:110px"></td>';
		echo '<td>'.$row['nom'].'</td>';
		echo '<td>'.$row['description'].'</td>';
		echo '<td>'.$row['prix'].'</td>';
		echo '<td><a href="./login.php">
  <button type="button" class="btn btn-primary btn-lg">Ajouter au panier</button></a></td>';
		echo '</tr>';
	}
	
?>