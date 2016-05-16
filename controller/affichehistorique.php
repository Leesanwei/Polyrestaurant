<?php 

		$rowshistorique=historique($_COOKIE["user"]);
		foreach($rowshistorique as $rowhistorique){
		echo '<tr>';
		echo '<td><img src="'.$rowhistorique['image'].'" style="height:70px;width:110px"></td>';
		echo '<td>'.$rowhistorique['nom'].'</td>';
		echo '<td>'.$rowhistorique['date_reservation'].'</td>';
		echo '</tr>';
	}
	
?>