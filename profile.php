<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Innexu-Usuario</title>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <!-- Favicons -->
  <link href="img/INNEXU1.png" rel="icon">
  <link href="img/INNEXU1.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="libUsuarios/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="libUsuarios/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="libUsuarios/css/style.css" rel="stylesheet">
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
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
            </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="Foto de perfil" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                    <span class="from">Zac Snider</span>
                    <span class="time">Just now</span>
                  </span>
                  <span class="message">
                    Hi mate, how is everything?
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                    <span class="from">Divya Manian</span>
                    <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                    Hi, I need your help with this.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                    <span class="from">Dan Rogers</span>
                    <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                    Love your new Dashboard.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                    <span class="from">Dj Sherman</span>
                    <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                    Please, answer asap.
                  </span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
            </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <!--<li><i style="font-size: 18px;" id="btnLogout" class="logout fa fa-sign-out"></i></li>-->
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
          <p class="centered"><a href=""><img src="" id="profileImage" class="img-circle" width="80"></a></p>
          <h5 id="userName" class="centered">Sam Soffes</h5>
          <li class="sub-menu">
            <a id="btnEditarPerfil" class="active" href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Inicio</span>
            </a>
          </li>
          <li>
            <a id="btnCorreo">
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
                  <h4 id="Nacimiento">1922</h4>
                  <h6>Fecha de nacimiento</h6>
                  <h4 id="nomUser">290</h4>
                  <h6>Nombre de usuario</h6>
                  <h4 id="documento">$ 13,980</h4>
                  <h6>Numero de documento</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3 id="secondUserName"></h3>
                <h6>Beneficiario Innexu</h6>
                <p id="pMunicipio">Eres un beneficiario para la gestion del riesgo del municipio de </p>

                <br>
                <p><button class="mt-5 btn btn-theme"><i class="fa fa-thermometer-three-quarters"></i>Reportar un riesgo</button></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img id="mainImgProile" src="img/ui-sam.jpg" class="img-circle"></p>
                  <p>Bienvendo de nuevo</p>
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
              </div>
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <!-- Informacion personal -->
                        <h4 class="mb">Información personal</h4>
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
                              <select class="form-control" id="municipio" name="municipio">
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Vereda</label>
                            <div class="col-lg-6">
                            <h6 style="font-size:8px;margin:0px;padding:0%;">Si no reside en una vereda, deje esta opcion en blanco</h6>
                              <select name="vereda" class="form-control" id="vereda" placeholder="" data-validate-field="text">
                            </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Fecha de nacimiento</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="fecha" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Usuario</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="usuario" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Sexo</label>
                            <div class="col-lg-6">
                            <label><input type="radio" name="sexo" value="Hombre" class="form__radio">Hombre</label>
                            <label><input type="radio" name="sexo" value="Mujer" class="form__radio">Mujer</label>
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
                              <input type="text" placeholder=" " id="new_pass" class="form-control">
                            </div>
                          </div>
                            </div>
                          <br>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Contraseña Actual</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " id="pass" class="form-control">
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
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
  <script src="js/logout.js"></script>
  <script src="js/departamentos_municipios.js"></script>
  <script src="js/upload_image.js"></script>
  <script src="js/editProfile.js"></script>
    <script src="js/fillUserProfile.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>