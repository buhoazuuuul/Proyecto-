<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Innexu-Usuario</title>

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
    <!-- Pickdate js styles -->
    <link href="libUsuarios/lib/air-datepicker/datepicker.min.css" rel="stylesheet">
    <!-- Parsley js css -->
    <link rel="stylesheet" href="libUsuarios/lib/Parsley/parsley.css">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="profile.html#">
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
                    <p class="centered"><a href=""><img id="profileImage" class="img-circle" width="80"></a></p>
                    <h5 id="userName" class="centered">Sam Soffes</h5>
                    <li class="mt">
                        <a id='btnEditarPerfil'>
                            <i class="fa fa-dashboard"></i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a id="btnCorreo" class="active">
                            <i class="fa fa-envelope"></i>
                            <span>Reportar </span>
                            <span class="label label-theme pull-right mail-info">3</span>
                        </a>
                    </li>
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row mt">
                    <div class="col-sm-3">
                        <section class="panel">
                            <div class="panel-body">
                                <a href="sendMail.php" class="btn btn-compose">
                                    <i class="fa fa-pencil" id="urlCorreo"></i> Reportar un problema
                                </a>
                                <ul class="nav nav-pills nav-stacked mail-nav">
                                    <li class="active"><a href="inbox_user.php"> <i class="fa fa-inbox"></i> Respuestas recibidas <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                                    <li><a href="outbox_user.php"> <i class="fa fa-envelope-o"></i> Reportes enviados</a></li>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-9">
                        <section class="panel">
                            <header class="panel-heading wht-bg">
                                <h4 class="gen-case">
                                    Envia tu reporte
                                </h4>
                            </header>
                            <div class="panel-body">
                                <div class="compose-mail">
                                    <form id="demo-form" data-parsley-validate="">
                                        <div class="form-group">
                                            <label style="margin-bottom : 10px;" for="to" class="">Para:</label>
                                            <select style="display:block;" class="form-control" id="secetrariosSelect" required>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="">Emergencia:</label>
                                            <select class="form-control" id="emergencia" required>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label style="margin-bottom : 10px;" for="to" class="">Vereda:</label>
                                            <h6>Elija Zona urbana al final si es dentro del municipio</h6>
                                            <select style="display:block;" class="form-control" id="vereda" required>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="">Asunto:</label>
                                            <input required type="text" tabindex="1" id="asunto" class="form-control" required data-parsley-length="[5, 30]">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="">Confidencialidad:</label>
                                            <select class="form-control" id="confidencialidad" required>
                                                <option value="1">Poco Confidencial</option>
                                                <option value="2">Medianamente Confidencial</option>
                                                <option value="2">Muy Confidencial</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="">Prioridad:</label>
                                            <select class="form-control" id="prioridad" required>
                                                <option value="1">Muy prioritario</option>
                                                <option value="2">Medianamente prioritario</option>
                                                <option value="2">Muy prioritario</option>
                                            </select>
                                        </div>
                                        <div class="compose-editor">
                                            <label for="subject" class="">Mensaje:</label>
                                            <textarea placeholder="Sea descriptivo y preciso con el mensaje, incluya una direccion mas exacta si lo desea" required class="wysihtml5 form-control" id="mensaje" rows="9" data-parsley-length="[4, 100]"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <span id="uploaded_image"></span>
                                            <input type="file" name="file" id="file" class="default">
                                        </div>
                                            <button id="btn-validar" type="submit" class="btn btn-primary" value="validate">Validar Reporte</button>
                                            <button id="btn-enviar" type="button" class="btn btn-warning">Enviar Reporte</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
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
                <a href="mail_compose.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="libUsuarios/lib/jquery/jquery.min.js"></script>
    <!-- Parsley.js -->
    <script src="libUsuarios/lib/Parsley/parsley.min.js"></script>
    <script src="libUsuarios/lib/Parsley/es.js"></script>
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
    <!-- Datatime Pikcer js -->
    <script type="text/javascript" src="libUsuarios/lib/air-datepicker/datepicker.min.js"></script>
    <script src="js/airDateTime.js"></script>
    <!-- sweetalert2 -->
    <script src="libUsuarios/lib/air-datepicker/i18n/datepicker.es.js"></script>
    <script type="text/javascript" src="lib/sweetalert2.all.min.js"></script>
    <!-- Propios js -->
    <script src="js/sendUserMessage.js"></script>
    <script src="js/components/emergencias_Naturales.js"></script>
    <script src="js/components/getUrlParams.js"></script>
    <script src="js/components/getUser.js"></script>
    <script src="js/upload_image.js"></script>
    <script src="js/mail_compose_user.js"></script>
</body>

</html>