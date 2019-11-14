<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Innexu-Administrador</title>

   <!-- Favicons -->
   <link href="img/INNEXU1.png" rel="icon">
   <link href="img/INNEXU1.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="libUsuarios/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="libUsuarios/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="Admin/css/style.css" rel="stylesheet">
  <link href="libUsuarios/css/style-responsive.css" rel="stylesheet">
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
      <a href="index.html" class="logo"><b>IN<span>NEXU</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.php">Cerrar sesión</a></li>
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
          <p class="centered"><a href="index_admin.php"><img src="php/upload/admin.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Administrador</h5>
          <li class="mt">
            <a href="usuarios_admin.php">
              <i class="fa fa-dashboard"></i>
              <span>Inicio</span>
              </a>
          </li>
          <li class="sub-menu">
            <a  class="active" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Formularios</span>
              </a>
            <ul class="sub">
              <li><a href="RegistroSecre.php ">Registrar un secretario</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Tablas</span>
              </a>
            <ul class="sub">
              <li><a href="usuarios_admin.php">Usuarios</a></li>
              <li><a href="secretarios_admin.php">Secretarios</a></li>
            </ul>
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
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Registrar un secretario</h3>
        <!-- FORM VALIDATION -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Numero de documento</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="num_doc" name="num_doc" type="number" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Tipo de documento</label>
                    <div class="col-lg-10">
                      <select name="tipo_doc" class="form-control" id="tipo_doc" placeholder="Tipo de documento" data-rule="minlen:4">
                        <option>Cédula de Ciudadania</option>
                        <option>Cédula de Extranjería</option>
                        <option>Pasaporte</option>
                        <option>Registro Civil</option>
                        <option>Tarjeta de Identidad</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nombre</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nombre" name="nombre" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Apellido</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="apellido" name="apellido" type="text" required />
                    </div>
                  </div> 
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Cargo</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="cargo" data-rule="minlen:4">
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Dependencia</label>
                    <div class="col-lg-10">
                      <select  class="form-control" id="dependencia" data-rule="minlen:4">
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Departamento de la dependencia</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="departamento" placeholder="departamento" data-rule="minlen:4">
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Municipio de la dependencia</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="municipio" placeholder="municipio" data-rule="minlen:4">
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Telefono</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="telefono" name="telefono" type="number" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Correo electronico</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="email" name="email" type="email" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Usuario</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="usuario" name="usuario" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Contraseña</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="pass" name="pass" type="password" required />
                    </div>
                  </div>
                  <div class="form-group col-lg-2">
                    <label class="control-label">Sexo</label>
                    <label><input type="radio" name="sexo" value="Hombre" class="form__radio">Hombre</label>
                    <label><input type="radio" name="sexo" value="Mujer" class="form__radio">Mujer</label>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button id="btn_guardar" class="btn btn-theme02" type="button">Guardar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
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
        <a href="form_validation.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="libUsuarios/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="libUsuarios/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="libUsuarios/libUsuarios/lib/jquery.scrollTo.min.js"></script>
  <script src="libUsuarios/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="libUsuarios/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="libUsuarios/lib/form-validation-script.js"></script>
  <!-- Sweet alert plugin -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <!-- Instituciones de Abejorral - Dependencias -->
  <script src="js/Directorio_de _nstituciones_Abejorral.js"></script>
  <!-- bootbox code -->
  <script src="lib/bootbox.js"></script>
  <script src="lib/bootbox.locales.js"></script>

</body>

</html>