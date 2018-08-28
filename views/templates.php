<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Contable | PHP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="views/img/templates/icono.png">
    <!-- =======================================================
        PLUGINS DE CSS
    =========================================================-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="views/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins -->
  <link rel="stylesheet" href="views/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="views/assets/css/form-elements.css">
  <link rel="stylesheet" href="views/assets/css/style.css">
  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="views/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="views/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="views/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="views/assets/ico/apple-touch-icon-57-precomposed.png">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="https://fonts.googleapis.com/css?family=Average+Sans" rel="stylesheet">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

  <!-- =======================================================
        PLUGINS DE JAVASCRIPT
  =========================================================-->
  <!-- jQuery 3 -->
  <script src="views/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="views/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="views/dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="views/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="views/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="views/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="views/bower_components/chart.js/Chart.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="views/dist/js/pages/dashboard2.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="views/dist/js/demo.js"></script>
  <!-- Javascript -->
  <script src="views/assets/js/jquery-1.11.1.min.js"></script>
  <script src="views/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="views/assets/js/jquery.backstretch.min.js"></script>
  <script src="views/assets/js/scripts.js"></script>
</head>

<!--==============================================
  CUERPO DEL DOCUMENTO
===============================================-->

<body class="hold-transition skin-purple-light sidebar-collapse sidebar-mini">


  <?php

      if(isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'OK')
      {

        echo '<div class="wrapper">';

        include 'modulos/header.php';

        include 'modulos/aside.php';

        if(isset($_GET['ruta'])) {

          if($_GET['ruta'] == 'inicio' || $_GET['ruta'] == 'usuarios'){
          include 'modulos/' . $_GET['ruta'] . '.php';
          }
          else 
          {
            include 'modulos/404.php';
          }
        }
        else 
        {
          include 'modulos/inicio.php';
        }

        include 'modulos/footer.php';

        echo '</div>';
      }
      else {
        include 'modulos/login.php';
      }
  ?>

<script type="text/javascript" src="views/js/templates.js"></script>
</body>
</html>
