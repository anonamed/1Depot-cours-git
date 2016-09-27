<?php

	function ajouter_user($user) {

		global $connexion;

		//var_dump($user);
		//die();

		try {

			//clee unique pour mail
			$id_user_actif = md5( uniqid( mt_rand() ) );
			$password = md5($_POST['password']);

			$query = "INSERT INTO blog_users
					(user_login, user_pass, user_email, display_name, user_actif)
					VALUES 
					(:login, :pass, :email, :display, :user_actif)";

			$select = $connexion->prepare($query);
			$select->bindParam(":login",$user['login'],PDO::PARAM_STR);
			$select->bindParam(":pass", $password,PDO::PARAM_STR);
			$select->bindParam(":email", $user['user_email'],PDO::PARAM_STR);
			$select->bindParam(":display", $user['display_name'],PDO::PARAM_STR);
			$select->bindParam(":user_actif", $id_user_actif,PDO::PARAM_STR);

			$retour = $select->execute();

			$select->closeCursor();

			if ($retour) {
				require('mail/mail_confirm_inscription.php');
				return mail_confirm_inscription($id_user_actif, $user);
			}
			

		} 
		catch (Exception $e) {
			
			$select->closeCursor();
			
			return false;
		}

	}