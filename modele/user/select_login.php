<?php

	function select_login($form) {

		global $connexion;

		//var_dump($user);
		//die();

		try {


			$query = "SELECT * FROM  blog_users
					WHERE user_login = :login
					AND user_pass = :pass";

			$select = $connexion->prepare($query);
			$select->bindParam(":login", $form['login'],PDO::PARAM_STR);
			$select->bindParam(":pass", $form['password'],PDO::PARAM_STR);
			
			$select->execute();

			$user = $select->fetch();

			$select->closeCursor();

			//var_dump($user);
			if ($user) {
				if ( $user['user_actif'] != 1 ) {
					$id_user_actif = $user['user_actif'];
					require('mail/mail_confirm_inscription.php');
					$send = mail_confirm_inscription($id_user_actif, $user);
				} else {
					return $user;
				}
				return false;
			}

				


		}	catch (Exception $e) {

			$select->closeCursor();
			return false;
		}

	}