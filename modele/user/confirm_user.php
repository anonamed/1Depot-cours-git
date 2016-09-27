<?php

	function confirm_user($id_user_actif) {

		global $connexion;

		try {

			//selection de l'utilisateur
			$query = "SELECT * FROM blog_users 
						WHERE user_actif = :id_user_actif";

			$select = $connexion->prepare($query);

			$select->bindParam(":id_user_actif", $id_user_actif ,PDO::PARAM_STR);
			
			$select->execute();

			if ( $select->rowCount() >= 1 ) {
				
				$query = "UPDATE blog_users 
							SET user_actif = true 
							WHERE user_actif = :id_user_actif";

				$select = $connexion->prepare($query);

				$select->bindParam(":id_user_actif", $id_user_actif ,PDO::PARAM_STR);
				//var_dump($parametre['id_user']);
				
				return $select->execute();

			} else {

				return false;
			}


	
		} catch (Exception $e) {

			echo $e->getMessage();
			return false;
			
		}
	}