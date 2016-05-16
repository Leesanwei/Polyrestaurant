<?php 
		$rows=commandes_en_cours();
		foreach($rows as $row){
		echo '<tr>';
		echo '<td>'.$row['date_reservation'].'</td>';
		echo '<td>'.$row['nom_client'].'</td>';
		echo '<td>'.$row['rue'].',&nbsp'.$row['code_postal'].',&nbsp'.$row['ville'].'</td>';
		echo '<td>'.$row['nom'].'</td>';
		echo '<td>'.$row['telephone'].'</td>';
		echo '<td><button class="btn btn-primary btn-lg" type="submit" name="supprimer" value="'.$row['id_commande'].'">Supprimer</button></td>';
		echo '  </tr>';
	}
	$value=1;
	?>