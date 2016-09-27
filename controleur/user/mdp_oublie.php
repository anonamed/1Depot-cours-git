<?php 

	if(!isset($_POST['login'])) {

		include_once('vue/user/mdp_oublie.php');
	
	} else {

		//var_dump($_POST['login']);
		include_once('modele/user/select_user_login.php');
		$retour = select_user_login($_POST['login']);

		//var_dump($_POST['login']);

		//die();

		if ($retour) {
			
			//var_dump($retour);
			
			//echo 'Location: ?module=user&action=change_mdp&user='.$retour['ID'];
		
			header('Location: ?module=user&action=change_mdp&user='.$retour['ID']);
		} else {

			header('Location: ?module=user&action=mdp_oublie&user=nok');
		}

	}