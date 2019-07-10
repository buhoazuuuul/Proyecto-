<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Innexu(En conexión)</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Innexu<br></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#pricing">Sobre nosotros</a></li>
          <li><a href="#features">Aprende</a></li>

          <li><a href="#team">Secretarios</a></li>
          <li><a href="#gallery">Galeria</a></li>

          <li><a href="#contact">Contactenos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <!-- As a link -->

    <div class="intro-text">
      <h2 class="animated slideInRight">Bienvenido a Innexu</h2>
      <p>Comunica tus problemas y encuentra soluciones rápidas</p>

      <!-- Button modal iniciar sesión -->
      <a href="login.php">
        <button type="button" class="btn btn-primary">
          Iniciar Sesión
        </button>
      </a>
      <!-- Modal Iniciar Sesión-->
      <div class="modal fade" id="iniciarsesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLongTitle">Iniciar Sesión</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" role="form" action="php/login.php">
                <div class="form-group col-lg-6">
                  <input type="text" name="nomusuario" id="nomusuario" class="form-control" placeholder="Usuario" data-rule="minlen:4" data-msg="Usuario no registrado" />
                  <div class="validation"></div>
                </div>

                <div class="form-group col-lg-6">
                  <input type="password" name="passususario" id="passususario" class="form-control" placeholder="Contraseña" data-rule="minlen:4" data-msg="Contraseña incorrecta" />
                  <div class="validation"></div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" id="btnLogin" class="btn btn-primary">Entrar</button>
            </div>
          </div>
        </div>
      </div>


      <!-- Button modal Registro usuario -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">
        Registrarse
      </button>
      <!-- Modal Registrarse-->
      <div class="modal fade" id="registrarse" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLongTitle">Registrarse</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" role="form" class="contactForm" action="php/usuarios.php">
                <div class="form-row">

                  <div class="form-group col-lg-6">
                    <input type="number" name="num_doc" id="num_doc" class="form-control" placeholder="Documento de identidad" data-rule="minlen:4" data-msg="Por favor ingrese su numero de documento" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <select name="tipo_doc" class="form-control" id="tipo_doc" placeholder="Tipo de documento" data-rule="minlen:4">
                      <option>Cedula de ciudadania</option>
                      <option>Tarjeta de identidad</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="name" name="nombre" id="nombre" class="form-control" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese su nombre" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido" data-rule="minlen:4" data-msg="Por favor ingrese su apellido" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Telefono" data-rule="minlen:4" data-msg="Por favor ingrese su telefono" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Correo electronico" data-rule="email" data-msg="Por favor ingrese su correo electronico" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="text" name="residencia" id="residencia" class="form-control" placeholder="Lugar donde vive" data-rule="minlen:4" data-msg="Por favor ingrese el lugar donde vive" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha de nacimiento" data-rule="minlen:8" data-msg="Por favor ingrese su fecha de nacimiento" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" data-rule="minlen:4" data-msg="Por favor ingrese su usuario" />
                    <div class="validation"></div>
                  </div>

                  <div class="form-group col-lg-6">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" data-rule="minlen:4" data-msg="Por favor ingrese su contraseña" />
                    <div class="validation"></div>
                  </div>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" id="btnRegistrarse" value="Registrarse">
                  </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalRegistro" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLongTitle">Te has registrado en</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Su registro ha sido satisfactorio
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal no registro -->
        <div class="modal fade" id="modalNoRegistro" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header ">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Tu registro NO ha sido existoso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Asi que disculpa las molestias e intentalo de nuevo en un par minutos
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
          </div>
        </div>
  </section>

  <main id="main">

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Sobre nosotros</h3>
          <span class="section-divider"></span>
          <!--<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInLeft">
              <img src="img/logo.png" class="d-block w-100" alt="...">
            </div>
          </div>

          <div class="col-lg-8 col-md-6">
            <div class="box wow fadeInRight">
              <h3>...</h3>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i>Innexu es un aplicativo web enfocado a la gestión de riesgo que está siendo desarrollado por un grupo de estudiantes de la Institución Educativa Fundación Celia Duque de Duque, con el principal objetivo de facilitar la comunicación entre las diferentes dependencias/secretarias de la alcaldía y las comunidades con el fin de prevenir y dar soluciones rápidas a situaciones que pongan en peligro a los habitantes de determinado territorio. Además, se quiere subir información para que la comunidad tenga fácil acceso a ella y pueda estar bien informada. </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #pricing -->


    <!--==========================
      Sección de aprende
    ============================-->


    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 offset-lg-12">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Aprende</h3>
              <span class="section-divider"></span>
              <p class="section-description">La siguiente cartilla fue realizada por la gobernación de Antioquia. Mirala para aprender un poco. </p>
            </div>
          </div>

          <!--
          <div class="col-lg-4 col-md-5 features-img">
            <img src="img/product-features.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident clarida perendo.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata noble dynala mark.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur teleca starter sinode park ledo.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum dinoun trade capsule.</p>
              </div>
            </div>

          </div>

        Aprende-->
        </div>

      </div>

    </section>


    <div class="row justify-content-center">
      <div class="col-sm-8"></div>


      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Cartilla/0.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/5.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/6.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/7.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/8.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/9.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/10.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/11.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/13.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/14.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/15.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/16.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/17.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/18.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/19.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/20.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/21.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/22.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/Cartilla/23.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!--==========================
      Product Advanced Featuress Section
    ============================
    <section id="advanced-features">
      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="img/advanced-feature-1.jpg" alt="">
              <div class="wow fadeInLeft">
                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt="">
              <div class="wow fadeInRight">
                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-duration="0.5s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-dely="0.2s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="img/advanced-feature-3.jpg" alt="">
              <div class="wow fadeInLeft">
                <h2>Duis aute irure dolor in reprehenderit in voluptate velit esse</h2>
                <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <i class="ion-ios-albums-outline"></i>
                <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> #advanced-features 

    ==========================
      Call To Action Section
    ============================
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> #call-to-action -->
    <!-- ==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Aprende un poco más...</h3>
          <span class="section-divider"></span>
          <p class="section-description">Si deseas obtener información mas detallada sobre cada uno de los fenomenos puedes visitar los siguientes enlaces</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="icon ion-arrow-graph-down-right"></i></div>
              <h4 class="title"><a href="docs/deslizamientos.html">Deslizamientos</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="icon ion-ios-flame"></i></div>
              <h4 class="title"><a href="docs/incendios.html">Incendios</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="icon ion-ios-rainy"></i></div>
              <h4 class="title"><a href="docs/inundaciones.html">Inundaciones</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="docs/sismos.html">Sismos</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--#more-features -->
    <!--==========================
      Entidades relacionadas
    ============================-->
    <section id="clients">
      <div class="container">

        <div class="row wow fadeInUp">

          <div class="col-md-2">
            <img src="img/Entidades/siata.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="img/Entidades/dapard.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="img/Entidades/ungrd.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="img/Entidades/cmgrd.png" alt="">
          </div>

        </div>
      </div>
    </section>
    <!--Etidades relacionadas-->
    <!--==========================
      Sobre nosotros
    ============================
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Sobre nosotros</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
            sunt in culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>

            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec
            </p>
          </div>
        </div>

      </div>
    </section>< #Sobre nosotros -->
    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Preguntas frecuentes</h3>
          <span class="section-divider"></span>
          <!--<p class="section-description">...</p>-->
        </div>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">¿Quién es el responsable de la Gestión del Riesgo en los Municipios, Distritos o Departamentos? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Según lo establecido en el Artículo 14 de la Ley 1523 de 2012 por la cual se adopta la Política Nacional de Gestión del Riesgo de Desastres y se establece el Sistema Nacional de Gestión del Riesgo de Desastres, “Los alcaldes como jefes de la administración local representan al Sistema Nacional en el Distrito y el Municipio. El alcalde como conductor del desarrollo local, es el responsable directo de la implementación de los procesos de gestión del riesgo en el Distrito o Municipio, incluyendo el conocimiento y la reducción del riesgo y el manejo de desastres en el área de su jurisdicción”. Esta responsabilidad es ejercida por el Alcalde a través del Consejo Municipal para la Gestión del Riesgo de Desastres CMGRD.</p>
              <p>
                Para el caso de los Departamentos, la responsabilidad está en cabeza del Gobernador a través del Consejo Departamental de Gestión del Riesgo de Desastres CDGRD.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">¿Quiénes forman parte del Sistema Nacional de Gestión del Riesgo de Desastres?<i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <h5>1523. Capítulo 2 – Artículo 8.</h5>

              <h5>Entidades públicas:</h5>
              <p>Por su misión y responsabilidad en la gestión del desarrollo social, económico y ambiental sostenible, en los ámbitos sectoriales, territoriales, institucionales y proyectos de inversión: (Departamento Nacional de Planeación, Ejército Nacional, Armada Nacional, Fuerza Aérea Colombiana, Policía Nacional, Defensa Civil, Cruz Roja, Bomberos de Colombia).</p>

              <h5>Entidades privadas con ánimo y sin ánimo de lucro:</h5>
              <p> Por su intervención en el desarrollo a través de sus actividades económicas, sociales y ambientales. </p>

              <h5>Comunidad:</h5>
              <p> Por su intervención en el desarrollo a través de sus actividades económicas, sociales, ambientales, culturales y participativas.</p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">¿Qué debo hacer ante una emergencia? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Lo más importante es la prevención. Usted debe elaborar su Plan de Emergencia Familiar y éste a su vez debe ser conocido por todos los integrantes de su grupo familiar.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Si estoy presenciando una emergencia a quien debo dirigirme?<i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Puede dirigirse ante las entidades competentes para atención de emergencias en el territorio nacional: Cruz Roja Colombiana, Cuerpo de Bomberos, Defensa Civil, Ejército Nacional, Armada Nacional, Policía Nacional, los cuales actúan de acuerdo con los parámetros establecidos por las Alcaldías, Gobernaciones, Presidencia de la República o sus delegados, según la magnitud del evento y la afectación ocasionada.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">¿Cómo hago para obtener ayuda del Gobierno Nacional si soy damnificado? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Siempre y cuando usted haya sido afectado o damnificado por eventos naturales o antrópicos no intencionales, debe dirigirse a la Alcaldía Municipal y registrarse en el Registro Único de Damnificados RUD. Por su parte el Municipio debe generar la Declaratoria de Calamidad Pública y solicitar apoyo a la UNGRD, previo aval del Departamento.
              </p>
              <p>
                Una vez cumplidos los requisitos se generan las ayudas correspondientes a través de las diferentes entidades según la necesidad de los afectados.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed"> ¿Qué es el registro Único de Damnificados RUD?<i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Es una herramienta que tiene como objetivo identificar y caracterizar a las personas naturales o jurídicas damnificadas por los eventos naturales con el fin de determinar la magnitud de las afectaciones ocurridas en todo el territorio nacional.
              </p>
            </div>
          </li>

          <li>
            <p>
              Las preguntas anteriores fueron tomadas de "http://portal.gestiondelriesgo.gov.co/Paginas/Preguntas_Frecuentes.aspx"
            </p>
          </li>

        </ul>

      </div>
    </section><!-- #faq -->

    <!--==========================
      Seccion de secretarios
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Secretarios</h3>
          <span class="section-divider"></span>
          <p class="section-description">Te presentamos los diferetes funcionarios de la alcaldía para que conozcas el cargo que desempeñan. </p>
        </div>

        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team/team-1.jpg" alt=""></div>
              <h4 id="nombreSecretario">Walter White</h4>
              <span id="apellidoSecretario">Chief Executive Officer</span>
              <div class="social">
                <a id="telSecretario" href=""><i class="fa fa-phone" aria-hidden="true"></i>555</a><br>
                <a id="dependenciaSecretario" href=""><i style="padding-rigth:10px;" class="fa fa-briefcase" aria-hidden="true"></i>Salud</a>
              </div>
            </div>
          </div>

    </section><!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Galeria</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="img/gallery/gallery-1.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-1.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="img/gallery/gallery-2.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-2.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="img/gallery/gallery-3.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-3.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="img/gallery/gallery-4.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-4.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="img/gallery/gallery-5.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-5.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="img/gallery/gallery-6.jpg" class="gallery-popup">
                <img src="img/gallery/gallery-6.jpg" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Innexu</h3>
              <p>Si tienes una duda o inquietud puedes enviarnos un mensaje, enviaremos la respuesta a tu correo electronico.</p>
              <p>Nota:ten en cuenta que primero debes registrarte para hacer un reporte de algun tipo de riesgo a una de las dependencias de la alcaldía.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Carrera 50 # 50<br>Abejorral,06055030</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>alcaldia@abejorral-antioquia.gov.co</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>(4) 8647611</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Tu mensaje ha sido enviado. Gracias!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="nameContacto" class="form-control" id="nameContacto" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="emailContacto" id="emailContacto" placeholder="Correo electronico" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Escribe tu mensaje"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Enviar mensaje</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #contact -->
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Innexu</strong>. Todos los derechos reservados.
          </div>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Innexu</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Inicio</a>
            <a href="#pricing">Sobre nosotros</a>
            <a href="#features" class="scrollto">Aprende</a>

            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="js/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <!-- Archivo js para los usuarios -->
  <script src="js/usuario.js"></script>
  <script src="js/login.js"></script>
  <!-- Sweet alert plugin -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>

</html>