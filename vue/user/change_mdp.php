<?php include("vue/layout/header.inc.php");//header  ?>

<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <h1 class="header center white-text text-lighten-2">
                Changer votre mot de passe
            </h1>
          </div>
        </div>
    <div class="parallax"><img src="assets/materialize/img/bg_mdp_change.jpg" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  Form  DEBUT
// -->

<div class="content">
  <div class="container" id="edit_post_content">
    <form id="change_mdp" name="change_mdp" class="col s12" method="post" action="?module=user&action=change_mdp">

      <div class="row">
 <!-- 
  //  Form - Id de l'user
  // -->
        <div class="col s12">
          <input name="id_user" type="text" value="<?php echo $_GET['user'] ?>" hidden>
        </div>
  <!-- 
  //  Form - Password
  // -->
        <div class="col s12">
          <i class="material-icons prefix">lock_open</i>
          <input name="password" type="password" class="password validate" required>
          <label for="password">Password</label>
        </div>
  <!-- 
  //  Form - Password_verif
  // -->
        <div class="col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input name="password_verif" type="password" class="password validate" required>
          <label for="password_verif">Password</label>
        </div>

 <!-- submit -->

        <div class="col s12">
          <div class="divider"></div>
          <div class="section">
            <input class="btn teal" type="submit" value="login"></input>
          </div>
        </div>
      </div>
    </form>
  </div> 
</div>     

<?php include("vue/layout/footer.inc.php");//footer ?>