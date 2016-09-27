<?php include("vue/layout/header.inc.php");//header  ?>

<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <h1 class="header center white-text text-lighten-2">
                Votre login
            </h1>
          </div>
        </div>
    <div class="parallax"><img src="assets/materialize/img/bg_mdp.jpg" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  Form  DEBUT
// -->

<div class="content">
  <div class="container" id="edit_post_content">
    <form id="mdp_oublie" name="mdp_oublie" class="col s12" method="post" action="?module=user&action=mdp_oublie">

      <div class="row">
  <!-- 
  //  Form - IDENTIFIANT
  // -->
        <div class="col s12">
          <i class="material-icons prefix">account_circle</i>
          <input name="login" type="text" class="login validate" required>
          <label for="login">Login</label>
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