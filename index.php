<?php
	define('_BASE_URL', "");

	//config des parametres
	include_once('config/config.php');


	//chargement du core secu_session_start
	include_once('core/secu_session_start.php');
	
	//test secu session start
	if (!secu_session_start(SESSION_NANE)) {
		die("Problème session !");
	} 

	// connexion à la BD
	include_once('modele/param.inc.php');

	// appel du controleur du module demande
	if (!isset($_GET['module'])) { 
		$module = DEFAULT_MODULE; 
	} else { 
		$module = $_GET['module']; 
	};

	if (!isset($_GET['action'])) { 
		$action = DEFAULT_ACTION; 
	} else { 
		$action = $_GET["action"]; 
	};


	$_SESSION['module'] = $module;
	$_SESSION['action'] = $action;

	$url = 'controleur/' . $module . '/' . $action . '.php';

	//echo $url;

	if (file_exists($url)) {
	//	echo "existe";
		include_once($url);

	} else {
	//	echo "existe pas";
		//pas de module trouvé, erreur 404
		include_once('vue/404.php');
	}
