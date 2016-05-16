<?php

		function supprimer_commande($supprime){
			global $db;
				$query = mysqli_query($db,"DELETE FROM `commandes_en_cours` WHERE id_commande ='$supprime'");
			
			
			
		}

?>