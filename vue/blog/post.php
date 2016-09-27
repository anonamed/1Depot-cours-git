<?php include("vue/layout/header.inc.php");//header  ?>
<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <h1 class="header center white-text text-lighten-2">
                Edit a new post
            </h1>
          </div>
        </div>
    <div class="parallax"><img src="assets/materialize/img/bg_edit_post.png" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  list post
// -->
<div class="content">
	<div class="container" id="edit_post_content">
		<form id="editer" name="editer" class="col s12" method="post" action="?module=blog&action=post">
			<div class="row">
				<div class="col s6">
					<i class="material-icons prefix">account_circle</i>
					 <select name="auteur" class="auteur validate">

					 	<option value="0" disabled selected>Choisissez</option>
					 	<?php foreach($auteurs as $auteur) { 
					 		echo "<option value=\"" . $auteur['ID'] . "\">". $auteur['display_name'] ."</option>";
						} ?>
					 	<label for="auteur">Author</label>

					 </select>
				</div>

				<div class="col s6">
					<i class="material-icons prefix">label</i>
					 <select name="categorie" class="categorie validate" >
					 
					 	<option value="0" disabled selected>Choisissez</option>
					 	<?php foreach($categories as $categorie) { 
					 		echo "<option value=\"" . $categorie['cat_id'] . "\">". $categorie['cat_descr'] ."</option>";
						} ?>
					 	<label for="categorie">Category</label>

					 </select>
				</div>

				<div class="col s12">
					<i class="material-icons prefix">label_outline</i>
					<input name="titre" type="text" class="titre validate">
					<label for="titre">Title</label>
				</div>

				<div class="col s12">
					<i class="material-icons prefix">mode_edit</i>
					<textarea class="materialize-textarea" name="contenu" type="text" class="contenu validate"></textarea>
					<label for="contenu">Content</label>
				</div>

				<input class="btn brown" type="submit" value="Send"></input>
			</div>
		</form>
	</div> 
</div>        
<?php include("vue/layout/footer.inc.php");//footer ?>