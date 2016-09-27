<?php

function lire_categories()
{
    global $connexion;
    try {
        //on envoie la requete
        $query = $connexion->query('SELECT * FROM blog_categories');

        //on récupère tous les résultats
        $categories = $query->fetchall();

        //fermeture du curseur
        $query->closeCursor();

        //on retourne tous les articles selectionnées
        return $categories;

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


