<?php include("vue/layout/header.inc.php");//header  ?>

<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <h1 class="header center white-text text-lighten-2">
                login
            </h1>
          </div>
        </div>
    <div class="parallax"><img src="assets/materialize/img/bg_login.png" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  Form  DEBUT
// -->

<div class="content">
  <div class="container" id="edit_post_content">
    <form id="editer" name="register" class="col s12" method="post" action="index.php?module=user&action=login">

      <div class="row">
  <!-- 
  //  Form - IDENTIFIANT
  // -->
        <div class="col s12">
          <i class="material-icons prefix">account_circle</i>
          <input name="login" type="text" class="login validate" required>
          <label for="login">Login</label>
        </div>
  <!-- 
  //  Form - MOT DE PASSE
  // -->
        <div class="col s12">
          <i class="material-icons prefix">lock</i>
          <input name="password" type="password" class="password validate" required>
          <label for="password">Password</label>
        </div>
        
        <!-- remenber -->
        <div class="switch">
            <div class="row">
              <div class="col s12">
                <p>Remenber</p>
            </div>
            <label>
              no
              <input type="checkbox" name="remember">
              <span class="lever"></span>
              Yes
            </div>
          </label>
        </div>
        <!-- MDP OUBLIER -->
        <div class="row">
          <div class="row">
              <a href="?module=user&action=mdp_oublie">Mot de passe oublié</a>
          </div>
        </div>

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