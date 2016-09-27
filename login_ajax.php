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

require 'modele/param.inc.php';
require 'modele/user/select_login.php';
$form = $_POST;
$form['password'] = md5($_POST['password']);
$user = select_login($form); 
if ($user) {
	$_SESSION['user'] = $user;
	echo $user['display_name'];
} else {
	echo " ";
}