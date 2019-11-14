<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Innexu-Secretario</title>

  <!-- Favicons -->
  <link href="img/INNEXU1.png" rel="icon">
  <link href="img/INNEXU1.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="Secretario/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="Secretario/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="Secretario/css/style.css" rel="stylesheet">
  <link href="Secretario/css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a class="logo"><b>IN<span>NEXU</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span id="num_reports" class="badge bg-theme"></span>
              </a>
            <ul id="list_reports" class="dropdown-menu extended inbox">
              <li>
                <p id="num_reports_text" class="green"></p>
              </li>
              
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <!--<li><i style="font-size: 18px;" id="btnLogout" class="logout fa fa-sign-out"></i></li>-->
          <li><a class="logout" onclick="linkar('php/logout.php')">Cerrar sesión</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="" id="profileImage" class="img-circle" width="80"></a></p>
          <h5 id="userName" class="centered">Sam Soffes</h5>
          <li class="sub-menu">
            <a href="profile_secretary.php" class="active" href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Inicio</span>
            </a>
          </li>
          <li>
            <a id="btnCorreo" href="">
              <i class=" fa fa-envelope"></i>
              <span>Correo</span>
              <span class="label label-theme pull-right mail-info">2</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4 id="mail_sec"></h4>
                  <h6 >Correo</h6>
                  <h4 id="nomUser"></h4>
                  <h6>Nombre de usuario</h6>
                  <h4 id="documento"></h4>
                  <h6>Numero de documento</h6>
                  <h4 id="dependencia_sec"></h4>
                  <h6>Dependencia</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3 id="secondUserName"></h3>
                <h6>Secretario Innexu</h6>
                <p id="pMunicipio">Eres uno de los funcionarios que trabaja para mejorar la gestion del riesgo del municipio de </p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img id="mainImgProile" src="img/ui-sam.jpg" class="img-circle"></p>
                  <h6 id="cargo_sec"></h6>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li>
                    <a id="btnEditarPerfil" data-toggle="tab" href="#edit">Editar mi perfil</a>
                  </li>
                </ul>
              </div>
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <!-- Informacion personal -->
                        <h4 class="mb">Información personal del secretario</h4>
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Foto</label>
                            <span id="uploaded_image"></span>
                            <div class="col-lg-6">
                              <input type="file" name="file" id="file" class="file-pos">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2  control-label">Numero de documento</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="num_doc" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tipo de documento</label>
                            <div class="col-lg-6">
                              <select name="tipo_doc" class="form-control" id="tipo_doc" placeholder="Tipo de documento" data-rule="minlen:4">
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="nombre" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Apellido</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="apellido" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Cargo</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="cargo" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Dependencia</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="dependencia" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Telefono</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="telefono" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Correo electronico</label>
                            <div class="col-lg-6">
                               <input type="text" placeholder=" " id="email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Departamento</label>
                            <div class="col-lg-6">
                              <select class="form-control" id="departamento" name="departamento">
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Municipio</label>
                            <div class="col-lg-6">
                              <select class="form-control" id="municipio">
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Usuario</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="usuario" class="form-control">
                            </div>
                          </div>
                            <div class="form-group">
                            <label class="col-lg-2 control-label">Contraseña Actual</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder=" " id="pass" class="form-control">
                            </div>
                          </div>
                          <br>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Sexo</label>
                            <div class="col-lg-6">
                            <label><input id="male" type="radio" name="sexo" value="Hombre" class="form__radio">Hombre</label>
                            <label><input id="female" type="radio" name="sexo" value="Mujer" class="form__radio">Mujer</label>
                            </div>
                          </div>
                          <div class="custom-control custom-switch">
                             <p>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Cambiar contraseña
                            </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                              <div class="form-group">
                            <label class="col-lg-2 control-label">Nueva</label>
                            <div class="col-lg-6">
                              <input type="password" placeholder=" " id="new_pass" class="form-control">
                            </div>
                          </div>
                            </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button id="btnUpdateUser" class="btn btn-theme" type="button">Guardar</button>
                              <button class="btn btn-theme04" type="button">Cancelar</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Innexu</strong>. Todos los derechos reservados
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          <a href="https://templatemag.com/"></a>
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="libUsuarios/lib/jquery/jquery.min.js"></script>
  <script src="libUsuarios/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="libUsuarios/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="libUsuarios/lib/jquery.scrollTo.min.js"></script>
  <script src="libUsuarios/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="libUsuarios/lib/common-scripts.js"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <!-- bootbox code -->
  <script src="lib/bootbox.js"></script>
  <script src="lib/bootbox.locales.js"></script>
  <script type="text/javascript" src="lib/sweetalert2.all.min.js"></script>
  <!-- Propios js -->
  <script type="text/javascript" src="js/fillSecretaryProfile.js"></script>
  <script type="text/javascript" src="js/getNumLessResponse.js"></script>
</body>

</html>