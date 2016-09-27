<?php include("vue/layout/header.inc.php");//header  ?>

<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <h1 class="header center white-text text-lighten-2">
                Bookmarks
            </h1>
            <div class="row center">
              <h5 class="header col s12 light">
                <span class="teal-text text-lighten-1">
                    Here are the latest favorite
                </span>
              </h5>
            </div>
            <div class="row center">
            <?php if(isset($_SESSION['user'])) { ?>
              <a href="?module=bookmarks&action=post" id="download-button" class="btn-large waves-effect brown">Edit a favorite</a>
            <?php } else { ?>
                <a href="?module=user&action=login" id="download-button" class="btn-large waves-effect teal">Login</a>
            <?php } ?>
            </div>

          </div>
        </div>
        <div class="parallax"><img src="assets/materialize/img/bg_home.png" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  list post
// -->
<div class="content" id="index_view">
    <div class="section"></div>
    
    <div class="container" id="descr_article">
        <ul class="collapsible popout" data-collapsible="accordion">
        <?php foreach ($favorite as $favorite => $ecri) { //var_dump($articles); ?>
            
            <li>
              <div class="collapsible-header"><i class="material-icons">library_books</i><?php echo $ecri['post_title']; ?></div>
              <div class="collapsible-body">
                   
                        <h5 class="brown-text text-lighten-1"><?php echo $ecri["booksmarks_favoris"]; ?></h5>
                        </a>
                        <div class="section"></div>
              </div>
            </li>

         <?php } ?>
        </ul>
    </div>

    <?php  //var_dump($count_articles); ?>

    <!-- 
    //  Pagination - Contenu
    // -->

        <ul class="pagination"> 
            <?php $nb_pages = ceil($count_articles / NB_POSTS_PAGE); 
                    //var_dump($nb_pages);
                    for( $i = 1 ; $i <= $nb_pages ; $i++ ) { ?>
                <li class="waves-effect">
                    <?php   echo "<a href='?page=". $i ."'>" . $i ."</a>"; } ?>
                </li>
        </ul>
        
</div>

<?php include("vue/layout/footer.inc.php");//footer ?>