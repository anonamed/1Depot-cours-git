<?php 
	
function count_articles() {

	try {
		global $connexion;

		$query = $connexion->query("SELECT COUNT(*) FROM blog_posts");	

		$count_articles = $query->fetch();

		$query->closeCursor();

		return (int) $count_articles[0];

	} catch ( Exception $e ) {

		$query->closeCursor();

        return false;
	}
	
}

