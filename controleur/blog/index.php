<?php
    
    //test des parametres reçus
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }

    // Appel du modèle pour obtenir les 5 derniers articles
    include_once('modele/blog/lire_articles.php');
    $articles = lire_articles(($page-1)* NB_POSTS_PAGE,NB_POSTS_PAGE);

    if (count($articles)>=0) {

            // Appel du modèle pour obtenir le NOMBRE d'articles
            include_once('modele/blog/count_articles.php');
            $count_articles = count_articles();
          
            if ($articles) {

                //traitement sur les données renvoyées par le modèle
                foreach ($articles as $cle => $article) {
                    $articles[$cle]['post_date'] = "le ".date(" d / m / Y", strtotime($article["post_date"]));
                    $articles[$cle]['post_title'] = htmlspecialchars($article['post_title']);
            }
        }

        //Appel de la vue correspondante
        include_once('vue/blog/index.php');
        
    } else {
        include_once('vue/problem.php');
    }

