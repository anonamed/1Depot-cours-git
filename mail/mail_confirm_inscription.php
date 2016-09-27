<?php 

	//corp du mail 
	function mail_confirm_inscription($id_user_actif, $user) {

		$lien = "http://localhost:8888/cours/Developpement/2ADEV_POO_MVC/index.php?module=user&action=confirm_register&id=".$id_user_actif;

		$nom_expediteur = NAME_EXPEDITEUR;
		$email_expediteur = ADRESSE_MAIL_EXPEDITEUR;
		$email_reply = ADRESSE_REPLY;
		$destinataire = $user['user_email'];

		$sujet = "Confirmatin d'inscription - ".$nom_expediteur;

		$message_texte = $sujet;
		
		$message_html = "<!DOCTYPE html>
		<html>
		<head>
			<title>".$sujet."</title>
		</head>
		<body>
			<h1>".$user['display_name']."</h1>
			<h2>Bienvenu sur le".$nom_expediteur."</h2>

			<p>lien de confirmation :</p>
			<a href='".$lien."'>confirmer mon inscription</a>
		</body>
		</html>";

		$fichiers = false;

		require('core/envoimail.php');
		
		return envoiMail($nom_expediteur, $email_expediteur, $email_reply, $message_texte, $destinataire, $sujet, $message_html, $fichiers);
	}	