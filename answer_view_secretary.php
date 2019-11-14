
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
      <a href="index.html" class="logo"><b>IN<span>NEXU</span></b></a>
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
          <li><a class="logout" onclick="linkar()">Cerrar sesión</a></li>
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
          <p class="centered"><a ><img id="profileImage" src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 id="userName" class="centered">Sam Soffes</h5>
          <li class="mt">
            <a id="btnInicio">
              <i class="fa fa-dashboard"></i>
              <span>Inicio</span>
              </a>
          </li>
          <li>
            <a class="active" id="btnCorreo">
              <i  class="fa fa-envelope"></i>
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
              <h5>Asunto de la respuesta</h5>
                <h4 id="asunto_respuesta" class="gen-case">Asunto</h4>
              </header>
              <div class="panel-body ">
                <div class="mail-header row">
                  <div class="col-md-8">
                    
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
                <div class="mail-sender">
                  <div class="row">
                    <div class="col-md-8">
                      <img  src="img/ui-zac.jpg" id="foto" alt="">
                      <h5>Nombre del usuario al que se le envio la respuesta</h5>
                      <h2><strong id="nombreUsuario">Nombre secretario</strong></h2>
                    </div>
                    <div class="col-md-4">
                    <h6 class="date">Fecha de repuesta</h6>
                      <p id="fecha_hora_respuesta" class="date"> 10:15AM 02 FEB 2014</p>
                    </div>
                  </div>
                </div>
                <div id="mensaje" class="view-mail">
                <h4>Mensaje de la respuesta</h4>
                <hr/>
                  <p id="msm_respuesta"></p>
                <div class="attachment-mail">
                  <ul>
                    <li>
                      <a class="atch-thumb" href="#">
                        <h4>Adjunto enviado en la respuesta</h4>
                        <img id="adjunto_resp" src="img/instagram.jpg">
                      </a>
                    </li>
                  </ul>
                </div>
            </section>
          </div>
        </div>
        <div class="row mt">
          <div class="col-sm-3">
          </div>
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
              <h5>Asunto del reporte</h5>
                <h4 id="asunto_reporte" class="gen-case">Asunto</h4>
              </header>
              <div class="panel-body ">
                <div class="mail-header row">
                  <div class="col-md-8">
                    
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
                <div class="mail-sender">
                  <div class="row">
                    <div class="col-md-4">
                    <h6 class="">Fecha del reporte</h6>
                      <p id="fecha_hora_reporte" class=""> 10:15AM 02 FEB 2014</p>
                    </div>
                  </div>
                </div>
                <div id="mensaje" class="view-mail">
                <h4>Mensaje del reporte</h4>
                <hr/>
                  <p id="msm_reporte"></p>
                </div>
                <div class="attachment-mail">
                  <ul>
                    <li>
                      <a class="atch-thumb" href="#">
                        <h4>Adjunto enviado en el reporte</h4>
                        <img id="adjunto_reporte" src="img/instagram.jpg">
                      </a>
                    </li>
                  </ul>
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
        <a href="mail_view.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="Usuario/lib/jquery/jquery.min.js"></script>
  <script src="Usuario/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Usuario/lib/jquery.scrollTo.min.js"></script>
  <script src="Usuario/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Usuario/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript" src="lib/sweetalert2.all.min.js"></script>
  <script src="js/answer_view_secretary.js"></script>
  <script type="text/javascript" src="js/getNumLessResponse.js"></script>
  <script src="js/logout.js"></script>
</body>

</html>
