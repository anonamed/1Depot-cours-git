<?php 

	function select_user_login($parametre) {

		global $connexion;

		try {

			$query = "SELECT ID FROM blog_users WHERE blog_users.user_login = :user_login";

			$select = $connexion->prepare($query);

			$select->bindParam(":user_login", $parametre ,PDO::PARAM_STR);

			$select->execute();

			$user_login = $select->fetch();

			$select->closeCursor();

			return $user_login;
			//var_dump($user_login);

		} catch (Exception $e) {

			$select->closeCursor();
			return false;
		}

	}