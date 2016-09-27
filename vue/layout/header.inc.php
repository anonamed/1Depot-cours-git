<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage du blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/materialize/css/materialize.min.css">

    <link href="assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/materialize/css/mobile.css" rel="stylesheet" media="all and (max-width: 400px)">

</head>
<body>

<!-- 
//  Navigation
// -->

  <nav class="white" role="navigation">

    <?php if (isset($_SESSION['user'])) { ?>
      <ul class="left hide-on-med-and-down">
        <li role="presentation" class="teal ligthen-1"><a href="#" ><?php echo $_SESSION['user']['display_name']; ?></a></li> 
      </ul>           
    <?php } ?>
    

    <ul class="right hide-on-med-and-down">
      <li role="presentation" class="active"><a href="?module=blog">Home</a></li>
       <?php if(isset($_SESSION['user'])) { ?>
      <li role="presentation"><a href="?module=blog&action=post">Edit post</a></li>
       <?php } else { ?>
      <li role="presentation"><a href="?module=user&action=register">Register</a></li>
      <?php } ?>
      <?php if(!isset($_SESSION['user'])) { ?>

      <li role="presentation"><a href="#modal1" class="modal-trigger">login</a></li>

      </div>

      <?php } else { ?>
      <li role="presentation"><a href="?module=user&action=logout">logout</a></li>
      <?php } ?>
      <?php if (isset($_SESSION['user']['ID']) && $_SESSION['user']['ID']==1) { ?>
      <li role="presentation"><a href="?module=blog&action=categorie">Edit category</a></li>
      <?php } ?>
    </ul>

    

    <ul id="nav-mobile" class="side-nav">
      <li role="presentation" class="teal ligthen-1"><a href="#" >Admin </a></li>

      <li role="presentation" class="active"><a href="?module=blog">Home</a></li>
      <?php if(isset($_SESSION['user'])) { ?>
      <li role="presentation"><a href="?module=blog&action=post">Edit post</a></li>
      <?php } else { ?>
     <li role="presentation"><a href="?module=user&action=register">Register</a></li>
     <?php } ?>
     <?php if(!isset($_SESSION['user'])) { ?>
     <li role="presentation"><a href="?module=user&action=login">login</a></li>
     <?php } else { ?>
     <li role="presentation"><a href="?module=user&action=logout">logout</a></li>
     <?php } ?>
     <li role="presentation"><a href="#">Contact</a></li>
    </ul>

    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>

    <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer brown lighten-1">

        <div class="modal-content">

          <!-- <div class="container"> -->
            <h4>Formulaire de connexion</h4>

            <p>Veuillez saisir vos logins</p>

            <form id="form_login" name="form_login" class="col s12" method="post" action="#">

              <div class="row">
                <!-- 
                //  Form - IDENTIFIANT
                // -->
                <div class="col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input name="login" type="text" class="login validate" id="login" required>
                  <label for="login">Login</label>
                </div>
                <!-- 
                //  Form - MOT DE PASSE
                // -->
                <div class="col s12">
                  <i class="material-icons prefix">lock</i>
                  <input name="password" type="password" class="password validate" id="password" required>
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
                  </label>
                  </div>
                </div>

                <!-- MDP OUBLIER -->
               
                <div class="row">
                  <a href="?module=user&action=mdp_oublie">Mot de passe oublié</a>
                </div>
              

                <div class="col s12">
                  <div class="divider"></div>
                  <div class="section">
                    <a class="exec_ajax waves-effect waves-light btn"><i class="material-icons right">cloud</i>Se connecter</a>
                  </div>
                </div>

              </div>
          
            </form>
          
          <!-- </div> -->

          <div class="progress display_none" style="position: fixed;left: 0;bottom: 40px;">
            <div class="indeterminate"></div>
          </div>

        </div>

        <div class="modal-footer grey lighten-3">
          <a href="#!" class="modal-action modal-close waves-effect waves-green white black-text btn-flat ">Retour</a>
        </div>

  </nav>