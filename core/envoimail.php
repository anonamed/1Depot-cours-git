<?php
// --------------------------------------------------------
//
// 			Function d'envoi de mail
//
//			envoiMail()
//
//	$nom_expediteur = nom_de_l_expediteur;
//	$email_expediteur = adresse_mail_de_lexpediteur;
//	$email_reply = adresse_de_réponse_du_mail;
//	$message_texte = message_au_format_texte_du_mail;
//	$destinataire = adresse_mail_du_destinataire;
//	$sujet = Test_par_php;
//	$message_html = message_formaté_html;
//
//  $fichiers = piece(s)_jointe(s);
//	(sous forme de chemin ex: "img/image.png" si pas de fichier false)
// --------------------------- 


	function envoiMail($nom_expediteur, $email_expediteur, $email_reply, $message_texte, $destinataire, $sujet, $message_html, $fichiers) {

		// ---------------------------
		// GENERER LA FRONTIERE ENTRE TEXTE, HTML, PIECE JOINTE
		// ---------------------------

		$frontiere = md5( uniqid( mt_rand() ) );

		// ---------------------------
		//	HEADERS DU MAIL
		// ---------------------------

		$headers = 'From: "'.$nom_expediteur.'" <'.$email_expediteur.'>'."\n";
		$headers .= 'Reply-To: '.$email_reply."\n";
		//$headers .= 'Return-Path: <'.$email_reply.'>'."\n";
		$headers .= 'MIME-Version: 1.0'."\n";
		$headers .= 'Content-Type: multipart/mixed; boundary="'.$frontiere.'"';

		// ---------------------------
		//	MESSAGE TEXTE
		// ---------------------------

		$message = 'This is a multi-part message in MIME format\n\n';

		$message .= '--'.$frontiere."\n";
		$message .= 'Content-Type: text/plain; charset="utf-8"'."\n";
		$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
		$message .= $message_texte."\n\n";

		// ---------------------------
		//	MESSAGE HTML
		// ---------------------------

		$message .= '--'.$frontiere."\n";

		$message .= 'Content-Type: text/html; charset="utf-8"'."\n";
		$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
		$message .= $message_html."\n\n";

		// ---------------------------
		//	PIECE JOINTE
		// ---------------------------
			// Extensions acceptées
			$extensions = array(
			//images
				'gif' => 'image/gif',
				'jpg' => 'image/jpeg',
				'png' => 'image/png',
			//pdf
				'pdf' => 'application/pdf',
			//ZIP
				'zip' => 'application/zip',
			);

			//Function pour trouver le Content-Type 
			function getExtension($arrayExtension, $extensionFichier){
				foreach ($arrayExtension as $key => $extension) {
					if ($key == $extensionFichier) {
						return $contentType = $extension;
					}
				}
						return $contentType = false;
			}


		//SI PIECE(S) JOINTE(S)
		if ($fichiers && count( $fichiers ) != 0) {
			//var_dump(" count fichiers = ".count( $fichiers ));
			//traitemement de chaque fichier
			foreach ($fichiers as $fichier) {
				//si le fichier existe réellement
				if (file_exists($fichier)) {

					$path_parts = pathinfo($fichier);
					
					$baseName = $path_parts['basename'];
					$fileName = $path_parts['filename'];

					$contentType = getExtension($extensions, $path_parts['extension']);

					$message .= '--'.$frontiere."\n";

					$message .= 'Content-Type: '.$contentType.'; name="'.$baseName.'"'."\n";
					$message .= 'Content-Transfer-Encoding: base64'."\n";
					$message .= 'Content-Disposition:attachement; filename="'.$fileName.'"'."\n\n";

					$message .= chunk_split( base64_encode( file_get_contents($fichier) ) )."\n";	
				} else {

					return false;
				}

			}
			
		}

		// ---------------------------
		//	ENVOIE DU MAIL
		// ---------------------------

		if (mail( $destinataire, $sujet, $message, $headers ) ) {
			//echo "<p><pre>".$message."</pre></p>";	
			return true;
		} else {
			return false;
		}


	}
		