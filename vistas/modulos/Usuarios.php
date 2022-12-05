
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Usuarios </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
              <li class="breadcrumb-item active">Tablero</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <button class="btn" style="background:#ffcce0" data-toggle="modal" data-target="#modalAgregarUsuario">
            Agregar Usuario 
          </button>
        
 
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  

<<<<<<< HEAD

        </div>
        <div class="card-body">
          <div class="box-body">

            <table class="table table-bordered table-striped tablas">

              <thead>
=======
            <div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped tablas">
                <thead>
>>>>>>> 0491fbd0637fd06169db0d8eca30dfca1cf710fb
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>Foto</th>
                  <th>Estado</th>
                  <th>Ultimo Login</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>Alejandro</td>
                  <td>Alejo</td>
<<<<<<< HEAD
                  <td></td>
                  <td><button class="btn btn-success btn-xs">Activo</button></td>
=======
                  <td></td>
                  <td><button class="btn btn-success btn-xs">Activo</button></td>
                  <td>2022-01-11</td>
                  <td>
                    <div class="btn group">
                     <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                      <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                     <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>valentina</td>
                  <td>vale</td>
                  <td></td>
                  <td><button class="btn btn-success btn-xs">Activo</button></td>
                  <td>2022-01-12</td>
                  <td>
                    <div class="btn group">
                     <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                      <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                     <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>thomas</td>
                  <td>thomas</td>
                  <td></td>
                  <td><button class="btn btn-success btn-xs">Activo</button></td>
>>>>>>> 0491fbd0637fd06169db0d8eca30dfca1cf710fb
                  <td>2022-01-11</td>
                  <td>
                    <div class="btn group">
                     <button class="btn btn-info"><i class="fa fa-eye"></i></button>
                      <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
                     <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
                  
                
            
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
  

<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


    
<!--===================================
MODAL AGREGAR USUARIO
======================================-->

<div class="modal" id="modalAgregarUsuario">
  <div class="modal-dialog">
    <div class="modal-content">

  <form role="form" method="post" enctype="multipart/form-data">

        <!-- Modal Header -->

        <div class="modal-header" style="background:#ffcce0; color:white Disabled">
          <h4 class="modal-title">Agregar Usuario</h4>
        </div>

        <!-- Modal body --> 

        <div class="modal-body">

        <div class="card-body">
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-users"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Usuario" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-key"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaContraseña" placeholder="Contraseña" required>
              
            </div>
          
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-list"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil">
                <option value=""  selected disabled >Seleccionar Perfil</option>
                <option value="Administrador">Administrador</option>
                <option value="Especial">Especial</option>
                <option value="Vendedor">Vendedor</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-address-card"></i></span>
              <input  type="number" class="form-control input-lg"  placeholder = "Cedula"   name="nuevaCedula" value required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-university"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoBanco" placeholder="Banco" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-tasks"></i></span>
              <select class="form-control input-lg" name="nuevoPerfil" >
                <option value=""  selected disabled>Seleccionar Tipo de Cuenta</option>
                <option value="Ahorros">Ahorros</option>
                <option value="Corriente">Corriente</option>
                <option value="Ahorros">Nequi</option>
                <option value="Corriente">Daviplata</option>
                
              </select>
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoNumeroCuenta" placeholder="Numero de Cuenta" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-home"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Dirección" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-mobile"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoCelular" placeholder="Celular" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-phone"></i></span>
              <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Telefono Familiar" required>
              
            </div>
            
            
          </div>
          <div class="form-group">
            <div>
              SUBIR FOTO
            </div>
            <input type="file" id="nuevaFoto" name="nuevaFoto">
            <p class="help-block">Peso máximo de la foto 200 MB</p>
            <img src="vistas/img/usuarios/avatarMujer1.png" class="img-thumbnail" with="100px" alt="Cinque Terre">
          </div>
  
        </div>
        </div>

        <!-- Modal footer -->
      <div class="modal-footer">
        <div class="btn group">
          <button type="button" class="btn btn-danger pull-left"  data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn" style="background:#ffcce0" data-dismiss="modal">Guardar Usuario</button>
        </div>
      </div>

      <?php
      $crearUsuario = new ControladorUsuarios();
      $crearUsuario -> ctrCrearUsuario();
      ?>
<<<<<<< HEAD

  </form>

    </div>
  </div>
</div>
=======
</body>
</html>
>>>>>>> 0491fbd0637fd06169db0d8eca30dfca1cf710fb
