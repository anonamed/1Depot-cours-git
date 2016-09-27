<?php 


	if(isset($_SESSION['user'])) {
		
		//suppression de la session
		session_unset();
		
		// redirection homepage
		header('Location: ?logout=ok');
	
	} else {

		header('Location: ?module=blog&action=index');
		
	} 

