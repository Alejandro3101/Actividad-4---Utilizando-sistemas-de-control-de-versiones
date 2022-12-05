<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Milimothitas System</title>
  <link rel="shortcut icon" href="vistas/dist/img/logomilimo2.jpeg">

  <!-- ============================================
Plugins de CSS
 ================================================-->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

   <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

 
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">


<!-- ============================================
Plugins de javascript
 ================================================-->
 <!-- DataTables -->
<script src="../vistas/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vistas/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



 


<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>

<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>




<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>


</head>

<!-- ============================================
Cuerpo documento
 ================================================-->

 <body class="hold-transition skin-blue sidebar-collapse sidebar-mini ">

<?php

if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

echo '<div class="wrapper">';



include "modulos/cabezote.php";
include "modulos/menu.php";



if(isset($_GET["ruta"])){

  if($_GET["ruta"] == "inicio" ||
     $_GET["ruta"] == "Usuarios" ||
     $_GET["ruta"] == "Categorias" ||
     $_GET["ruta"] == "salir" ||
     $_GET["ruta"] == "Embajadoras"){

      include "modulos/".$_GET["ruta"].".php";


     }else{

      include "modulos/404.php";
     }

     }else{

      include "modulos/inicio.php";

    }

    include "modulos/footer.php";


echo '</div>';

  }else{

    include "modulos/login.php";
  }


?>

 
<script src="../vistas/js/plantilla.js"></script>


</body>
</html>
