<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Iniciar sesión</title>

  <!-- Favicons -->
  <link href="img/INNEXU1.png" rel="icon">
  <link href="img/INNEXU1.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/styleLogin.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <?php
  // session_start();
  // if (!empty($_SESSION['login_user'])) {
  //   header('Location: userProfile.php');
  // }
  ?>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form method="post" role="form" class="form-login" id="login-form">
        <h2 class="form-login-heading">Entre ahora a INNEXU</h2>
        <div class="login-wrap">
          <input type="text" name="nomUsuario" id="nomUsuario" class="form-control" placeholder="Nombre de usuario" autofocus>
          <br>
          <input type="password" name="passUsuario" class="form-control" placeholder="Contraseña">
          <label class="checkbox">
            <input class="mt-3" type="checkbox" value="remember-me">Recordarme
            <span class="mt-3"><br>
              <a data-toggle="modal" href="login.php#myModal">Olvidaste la contraseña?</a>
            </span>
          </label>
          <button id="btnLogin" name="btnLogin" class="btn btn-theme btn-block" type="button"><i class="fa fa-lock"></i> Entrar</button><br>
          <a href="index.php"><button  class="btn btn-theme btn-block" type="button"><i class="fa fa-reply" aria-hidden="true"></i> Regresar a la pagina principal</button></a>
          <hr>
          <div class="registration">
            ¿No tiene una cuenta aún?<br />
            <a class="" href="index.php">
              Cree una!
            </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery/jquery.backstretch.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
  <script type="text/javascript" src="lib/sweetalert2.all.min.js"></script>
  <script>
  $.backstretch("img/gallery/abejorral1.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
