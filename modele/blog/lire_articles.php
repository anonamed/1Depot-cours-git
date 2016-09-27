<?php

function lire_projets($offset, $limite)
{
    global $connexion;
    try {
        //on envoie la requete
        $query = $connexion->prepare('SELECT * FROM finhence_projet
                                              ORDER BY projet_date DESC LIMIT :offset, :limite');

        //on initialise les paramètres
        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->bindParam(':limite', $limite, PDO::PARAM_INT);

        //on execute la requete
        $query->execute();

        //on récupère tous les résultats
        $projets = $query->fetchall();

        //fermeture du curseur
        $query->closeCursor();

        //on retourne tous les articles selectionnées
        return $projets;

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


