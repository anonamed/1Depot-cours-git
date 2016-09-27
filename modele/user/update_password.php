<?php

	function update_password($parametre) {

		global $connexion;

		try {

			$password = md5($parametre['password']);
			//var_dump($password);
			$query = "UPDATE blog_users 
						SET user_pass = :new_password 
						WHERE ID = :user_login";

			$select = $connexion->prepare($query);

			$select->bindParam(":new_password", $password ,PDO::PARAM_STR);
			$select->bindParam(":user_login", $parametre['id_user'] ,PDO::PARAM_INT);
			//var_dump($parametre['id_user']);
			$select->execute();

			return true;
	
		} catch (Exception $e) {

			echo $e->getMessage();
			
		}
 
	}