<?php include("vue/layout/header.inc.php");//header  ?>

<!-- 
//  banner
// -->

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <h1 class="header center white-text text-lighten-2">
                Register you
            </h1>
          </div>
        </div>
    <div class="parallax"><img src="assets/materialize/img/bg_register.png" alt="Unsplashed background img 1"></div>
    </div>
<!-- 
//  Form  DEBUT
// -->

<div class="content">
  <div class="container" id="edit_post_content">
    <form id="editer" name="register" class="col s12" method="post" action="?module=user&action=register">

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
  <!-- 
  //  Form - ADRESSE MAIL
  // -->
        <div class="col s12">
          <i class="material-icons prefix">email</i>
          <input name="user_email" type="text" class="email validate" required>
          <label for="user_email">Email</label>
        </div>
  <!-- 
  //  Form - PSEUDO
  // -->
        <div class="col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input class="materialize-textarea" name="display_name" type="text" class="display_name validate" required>
          <label for="display_name">Display name</label>
        </div>

        
         

        <div class="col s12">
          <div class="divider"></div>
          <div class="section">
            <input class="btn teal" type="submit" value="Send"></input>
          </div>
        </div>
      </div>
    </form>
  </div> 
</div>     

<?php include("vue/layout/footer.inc.php");//footer ?>