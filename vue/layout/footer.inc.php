<!-- 
//  footer
// -->      

	<footer class="footer">
		<p>&copy; Company 2014</p>
	</footer>

    
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

<script type="text/javascript" src="assets/materialize/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>

<script src="assets/materialize/js/init.js"></script>
<script src="assets/materialize/js/controle.js"></script>
<script src="assets/materialize/js/ajax.js"></script>

<!-- notification -->
<?php if(isset($_GET['confirm_user']) && $_GET['confirm_user'] == "ok") { ?>
<script type="text/javascript">
	var $toastContent = $('<span>Votre compte à bien été confirmer. Vous pouvez vous connecter</span>');
  	Materialize.toast($toastContent, 5000);
</script>
<?php } elseif(isset($_GET['confirm_user']) && $_GET['confirm_user'] == "nok") { ?>
<script type="text/javascript">
	var $toastContent = $('<span>Votre compte à déja été confimé</span>');
  	Materialize.toast($toastContent, 5000);
</script>
<?php } ?>

</body>
</html>