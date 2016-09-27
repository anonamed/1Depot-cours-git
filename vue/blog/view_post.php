<?php include("vue/layout/header.inc.php");//header  

//var_dump($article);

?>

<div class="content" id="view_post_content">
	<div class="container">
		<div class="row">
			<?php foreach ($article as $ecri) { 	//var_dump($ecri);?>
			<h4 class="teal-text text-lighten-1">
				<?php echo $ecri['post_title']; ?>
			</h4>

			<div class="divider"></div>

			<div class="section">

				<p class="col s3 brown-text lighten-1">
					<i class="tiny material-icons">label</i>
					<?php echo $ecri['cat_descr']; ?>
				</p>

				<p class="col s3 grey-text">
				<i class="tiny material-icons">restore</i>
					<?php echo $ecri['post_date']; ?>
				</p>

				
				<p class="col s3 blue-grey-text text-darken-2">
					<i class="tiny material-icons">perm_identity</i>
					<?php echo $ecri['display_name']; ?>
				</p>

			</div>

			<div class="col s4">
				<div class="divider"></div>
			</div>

			<div class="container">
				<p class="col s12">
					<?php echo $ecri['post_content']; ?>
				</p>
			</div>

			<div class="col s4">
				<div class="divider"></div>
			</div>

			<div class="section col s12">

				<p class="col s3 brown-text lighten-1">
					<?php echo "<a class=\"waves-effect waves-light btn brown\" href=\"?module=blog\">Back</a> "; ?>
				</p>

			
			</div>
			<?php } ?>		
		</div>
	</div>
</div>

<?php include("vue/layout/footer.inc.php");//footer ?>