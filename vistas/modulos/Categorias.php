
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Categorias </h1>
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
          <button class="btn" style="background:#ffcce0" data-toggle="modal" data-target="#modalAgregarCategoria">
            Agregar Categoria 
          </button>
        
        </div>
        <div class="card-body">
          <div class="box-body">
            <table class="table table-bordered table-striped tabla">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Fecha</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                                 
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
          </div>
        </div>
        <!-- /.card-body -->
        
<!--===================================
MODAL AGREGAR Categoria
======================================-->

<div class="modal" id="modalAgregarCategoria">
  <div class="modal-dialog">
    <div class="modal-content">

  <form role="form" method="post" enctype="multipart/form-data">
        <!-- Modal Header -->
        <div class="modal-header" style="background:#ffcce0; color:white Disabled">
          <h4 class="modal-title">Agregar Categoria</h4>
        </div>

        <!-- Modal body --> 
        <div class="modal-body">

        <div class="card-body">
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar Categoria" required>
              
            </div>
       

        <!-- Modal footer -->
      <div class="modal-footer">
        <div class="btn group">
          <button type="button" class="btn btn-danger pull-left"  data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn" style="background:#ffcce0" data-dismiss="modal">Guardar</button>
        </div>
      </div>

      <?php

$crearCategoria = new ControladorCategorias();
$crearCategoria -> ctrCrearCategoria();

?>

</form>

</div>

</div>

</div>
