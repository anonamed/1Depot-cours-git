<?php

    
    //echo $id_post;
    //die();

    // Appel du modèle pour obtenir le NOMBRE d'articles
    include_once('modele/blog/lire_article.php');
    $article = lire_article($_GET['article']);

    //var_dump($article);

    if ($article) {
        include_once('vue/blog/view_post.php');
    } else {
        include_once('vue/problem.php');
    }