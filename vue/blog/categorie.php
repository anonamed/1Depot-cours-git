<?php include("vue/layout/header.inc.php");//header  ?>
<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <h1 class="header center white-text text-lighten-2">
                Edit a categorie
            </h1>
          </div>
        </div>
    <div class="parallax"><img src="assets/materialize/img/bg_categorie.jpg" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  contant
// -->
<div class="content">

	<!-- container -->
	<div class="container">
		
		<!-- ajout categorie -->
		<div class="row">
			<div class="card col s6 categorie teal">
				<form name="add_categorie" method="post" action="#">
					<input name="categorie" type="text" placeholder="créer une catégorie" required/>
					<label for="categorie"></label>
				</form>
			</div>

			<div class="divider col s12"></div>


			<div class="card col s12 categorie">
				<ul class="collection with-header">
			        <li class="collection-header"><h4>Les catégories</h4></li>
			        <li class="collection-item"><div>Cat 1<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item"><div>cat 2<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        <li class="collection-item"><div>Cat 3<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
			        
		      </ul>
			</div>

		</div>



	</div>

</div>        
<?php include("vue/layout/footer.inc.php");//footer ?>