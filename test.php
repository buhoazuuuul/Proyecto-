<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- DataTable buttons -->
    <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css" />
    <!-- Editor dataTables -->
    <link rel="stylesheet" href="libUsuarios/lib/EditorPHP/css/editor.dataTables.min.css" class="stylesheet">
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Bootstrap core CSS -->
    <link href="libUsuarios/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>Secretarios</h3>
            <div class="row mb">
                <!-- page start-->
                <button class="btn logout" id="button">Eliminar fila seleccionada</button>
                <div class="content-panel">
                    <div class="adv-table">
                        <table cellpadding="0" cellspacing="0" class="display table table-bordered display" style="width:100%" id="userTable">
                            <thead>
                                <tr>
                                    <th>Numero de documento</th>
                                    <th>Tipo de documento</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Dependencia</th>
                                    <th>Telefono</th>
                                    <th>Correo electronico</th>
                                    <th>Usuario</th>
                                    <th>Contraseña</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- page end-->
            </div>
            <!-- /row -->
        </section>
        <!-- /wrapper -->
    </section>
    <br>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/dataTables.editor.js"></script>
    <script src="js/fill-secretario-dataTable.js" type="text/javascript"></script>

</body>

</html>