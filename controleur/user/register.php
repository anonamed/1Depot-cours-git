<?php

    if (!isset($_POST['display_name'])) {

        include_once('vue/user/register.php');

    } else {

       
        //  echo $id_actif;

        include_once('modele/user/ajouter_user.php');
        $retour = ajouter_user($_POST);

        if ($retour) {
            
            header('Location: ?module=blog&notif=ajout_ok');
        } else {

        	header('Location: ?module=user&action=register&notif=ajout_nok');
        }
    }
   