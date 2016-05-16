<?php 

		$rows=dessert();
		foreach($rows as $row){
		echo '<tr>';
		echo '<td><img src="'.$row['image'].'" style="height:70px;width:110px"></td>';
		echo '<td>'.$row['nom'].'</td>';
		echo '<td>'.$row['description'].'</td>';
		echo '<td>'.$row['prix'].'</td>';
		echo '<td><button class="btn btn-primary btn-lg" type="submit" name="ajouterdessert" value="'.$value.'">Ajouter au panier</button></td>';
		echo '  </tr>';
		$value = $value+1;
	}
	$value=1;
	
?>