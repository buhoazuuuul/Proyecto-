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
  <!-- icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">

</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form method="post" role="form" class="form-login" id="login-form">
        <h2 class="form-login-heading">Entre ahora a INNEXU</h2>
        <div class="login-wrap">
          <input type="text" id="nomUsuario" id="nomUsuario" class="form-control" placeholder="Nombre de usuario" autofocus>
          <br>
          <input type="password" id="passUsuario" class="form-control" placeholder="Contraseña">
          <label class="checkbox">
          <i class="fas fa-user-secret mr-2"></i>
            <input id="isSecretario" name="login" class="mt-3" type="checkbox" value="Ser Secretario">Soy un Secretario
            <input id="isAdmin" name="login" class="mt-3" type="checkbox" value="Ser Admin">Soy administrador
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
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery/jquery.backstretch.min.js"></script>
   <script type="text/javascript" src="lib/sweetalert2.all.min.js"></script>
   <!-- Propios js -->
  <script type="text/javascript" src="js/login.js"></script>
 
  <script>
  $.backstretch("img/gallery/fotos/iglesia3.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
