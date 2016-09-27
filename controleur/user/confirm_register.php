<?php

	if (!isset($_GET['id'])) {
		
		include_once('vue/404.php');

	} else {

		$id_user_actif = $_GET['id'];

		require('modele/user/confirm_user.php');		
			$retour = confirm_user($id_user_actif);

		if ($retour) {

			header('Location: ?module=user&action=login&confirm_user=ok');

		} else {

			header('Location: ?module=user&action=login&confirm_user=nok');

		}

	}