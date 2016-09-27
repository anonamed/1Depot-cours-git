<?php

function lire_article($article)
{
    global $connexion;
    try {
        //on envoie la requete
        $query = $connexion->prepare('SELECT * FROM blog_posts, blog_categories, blog_users
                                              WHERE post_ID = :post
                                              AND post_author = ID
                                              AND post_category = cat_id
                                              ');


        //on initialise les paramètres
        $query->bindParam(':post', $article, PDO::PARAM_INT);

        //on execute la requete
        $query->execute();

        //on récupère tous les résultats
        $article = $query->fetchall();

        //fermeture du curseur
        $query->closeCursor();

        //on retourne tous les articles selectionnées
        //var_dump($article);
        return $article;

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