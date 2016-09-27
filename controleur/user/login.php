<?php
    
    if (!defined("_BASE_URL")) die('pirate reconnu !'); // TESTER LURL 

    if (!isset($_POST['login'])) {
        if (!isset($_SESSION['user'])) {
            include_once('vue/user/login.php');
        } else {
            header('Location: ?module=blog&action=index');
        }
    } else {
       //var_dump($_POST);
        //cryptage du password
        $form = $_POST;
        $form['password'] = md5($form['password']);

        include_once('modele/user/select_login.php');
        $user = select_login($form);

        //var_dump($user);
        //die();
        if ($user) {
            $_SESSION['user'] = $user;
            // var_dump($form);
            // echo $form['remember'];
            // die();
            if (isset($form['remember']) && $form['remember'] == 'on') {
                $info_cookie = date("Y/m/d H:i:s");
                if (!setcookie("info_cookie",$info_cookie,time()+3600*24))//+31*24*3600
                {
                    die("Impossible de creer un cookie !");
                } 
            }
            
            header('Location: ?module=blog&action=index&notif=login_ok');

        } else {

        	header('Location: ?module=user&action=login&notif=login_nok');
        }
    }
   