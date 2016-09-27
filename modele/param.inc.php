<?php

try {


    // $monUrl = $_SERVER['HTTP_HOST'];

    // //echo $monUrl;

    
    // if ($monUrl == "localhost")
    // {
        //Identifiant serveur du mac
        $dns = 'mysql:host=localhost;dbname=cours';
        $utilisateur = 'root';
        $motDePasse = "root";
    // } else {
    //     //Identifiant serveur EEMI
    //     $dns = 'mysql:host=localhost;dbname=camara';
    //     $utilisateur = 'camara';
    //     $motDePasse = '70063';
    // }


    //option de connexion
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $connexion = new PDO($dns, $utilisateur, $motDePasse, $options);

} catch (Exeception $e) {
    die("probleme SQL");
}
