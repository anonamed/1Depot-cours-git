<?php

function lire_auteurs()
{
    global $connexion;
    try {
        //on envoie la requete
        $query = $connexion->query('SELECT * FROM blog_users');

        //on récupère tous les résultats
        $auteurs = $query->fetchall();

        //fermeture du curseur
        $query->closeCursor();

        //on retourne tous les articles selectionnées
        return $auteurs;

    } catch (Exception $e) {
        //fermeture du curseur
        $query->closeCursor();
        return false;
    }
    // seulement a partir de php 5.5
    /*finally {
        $query->closeCursor();
        return $articles;
    }*/


}