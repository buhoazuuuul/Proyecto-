<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Innexu-Secretario</title>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <!-- Favicons -->
  <link href="img/INNEXU1.png" rel="icon">
  <link href="img/INNEXU1.png" rel="apple-touch-icon">

   <!-- Bootstrap core CSS -->
   <link href="Secretario/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="Secretario/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="Secretario/lib/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="Secretario/css/style.css" rel="stylesheet">
  <link href="Secretario/css/style-responsive.css" rel="stylesheet">
</head>

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
          <li><a class="logout" onclick="linkar()">Cerrar sesíon</a></li>
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
          <p class="centered"><a id><img id="profileImage" src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 id="userName" class="centered">Sam Soffes</h5>
          <li class="sub-menu">
            <a id="btnInicio">
              <i class="fa fa-cogs"></i>
              <span>Inicio</span>
            </a>
          </li>
          <li>
            <a class="active" id="btnCorreo">
              <i class="fa fa-envelope"></i>
              <span>Correo</span>
              <span class="label label-theme pull-right mail-info">3</span>
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
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
            <section class="panel">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked mail-nav">
                <li><a id="btnRecibidos"> <i class="fa fa-inbox"></i> Reportes recibidos<span class="label label-theme pull-right inbox-notification">3</span></a></li>
                  <li class="active"><a id="btnRespuestasEnviadas"> <i class="fa fa-envelope-o"></i> Respuestas enviadas</a></li>
                </ul>
              </div>
            </section>
          </div>
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Respuestas enviadas
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Buscar correo">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body minimal">
                <div class="mail-option">
                  <div class="chk-all">
                    <div class="pull-left mail-checkbox">
                      <input type="checkbox" class="">
                    </div>
                    <div class="btn-group">
                      <a data-toggle="dropdown" href="#" class="btn mini all">
                        All
                        <i class="fa fa-angle-down "></i>
                        </a>
                      <ul class="dropdown-menu">
                        <li><a href="#"> None</a></li>
                        <li><a href="#"> Read</a></li>
                        <li><a href="#"> Unread</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="btn-group">
                    <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                      <i class=" fa fa-refresh"></i>
                      </a>
                  </div>
                  <div class="btn-group hidden-phone">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      More
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <div class="btn-group">
                    <a data-toggle="dropdown" href="#" class="btn mini blue">
                      Move to
                      <i class="fa fa-angle-down "></i>
                      </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                      <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                    </ul>
                  </div>
                  <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 99</span></li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                      <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                    </li>
                  </ul>
                </div>
                  <div class="table-inbox-wrap">
                  <table id="data-container" class="table table-inbox table-hover">
                    <tbody>
                    </tbody>
                  </table>
                  <nav id="pagination-container" aria-label="Page navigation example">
                  </nav>
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
        <a href="inbox.html#" class="go-top">
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
   <script src="js/logout.js"></script>
   <script src="js/outbox_secretary.js"></script>
   <script type="text/javascript" src="js/getNumLessResponse.js"></script>
   <script type="text/javascript" src="js/components/pagination-with-styles.js"></script>
   <script type="text/javascript" src="lib/sweetalert2.all.min.js"></script>

</body>

</html>
