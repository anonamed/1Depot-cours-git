<?php 

	if (!isset($_POST['password'])) {
		
		include_once('vue/user/change_mdp.php');

	} elseif ($_POST['password'] == $_POST['password_verif']) {

		//var_dump($_POST);

		include_once('modele/user/update_password.php');
		$retour = update_password($_POST);

		//var_dump($retour);

		if ($retour) {

			header('Location: ?module=user&action=login&update_password=ok');

		} else {

			header('Location: ?module=user&action=login&update_password=nok');

		}

	} else {

		//var_dump($_POST);
		header('Location: ?module=user&action=change_mdp&user='.$_POST['id_user']);
	}