<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrar Embajadoras </h1>
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
          <button class="btn" style="background:#ffcce0" data-toggle="modal" data-target="#modalAgregarEmbajadora">
            Agregar Embajadora 
          </button>
        


        </div>
        <div class="card-body">
          <div class="box-body">
            <table class="table table-bordered table-striped tabla">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Teléfono</th>
                  <th>Ciudad</th>
                  <th>Estado</th>
                  <th>Acciones</th>

                </tr>
              </thead>

              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><button class="btn btn-success btn-xs">Activo</button></td>
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
MODAL AGREGAR USUARIO
======================================-->

<div class="modal" id="modalAgregarEmbajadora">
  <div class="modal-dialog">
    <div class="modal-content">

  <form role="form" method="post" enctype="multipart/form-data">
        <!-- Modal Header -->
        <div class="modal-header" style="background:#ffcce0; color:white Disabled">
          <h4 class="modal-title">Agregar Embajadora</h4>
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
              <span class="input-group-text"><i class="fas fa-address-card"></i></span>
              <input type="number" class="form-control input-lg" name="nuevaCedula" placeholder="Cedula" required>
              
            </div>
            
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
              <input type="number" class="form-control input-lg" name="nuevoTelefono" placeholder="Telefono" required>
              
            </div>
          
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <?php
              $tabla="departamento";
              $cargaDeparatamento = new ModeloDepartamentos();
              $cargaDeparatamento -> mdlFiltroDepartamento($tabla);
              ?>
              <span class="input-group-text"><i class="fas fa-city"></i></span>
              <select class="form-control input-lg" name="nuevoDepartamento">
            <option value=["cargaDeparatamento"]  selected disabled >Seleccionar Departamento</option>
                  <option value=""   ><?php $cargaDepartamento?></option>
              </select>
              </div>
          </div>
          <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-house-user"></i></span>
              <select class="form-control input-lg" name="nuevoMunicipio">
                <option value=""  selected disabled >Seleccionar Municipio</option>
                </select>
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
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
              <input type="date" class="form-control input-lg" name="fechaInfreso" placeholder="Fecha Ingreso" required>

            </div>
            </div>
            <div class="form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
              <input type="date" class="form-control input-lg" name="fechaNacimiento" placeholder="Fecha Nacimiento" required>

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
              <select class="form-control input-lg" name="nuevoTipoCuenta" >
                <option value=""  selected disabled>Seleccionar Tipo de Cuenta</option>
                <option value="Ahorros">Ahorros</option>
                <option value="Corriente">Corriente</option>
                
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
              <span class="input-group-text"><i class="fas fa-users"></i></span>
              <input type="number" class="form-control input-lg" name="numeroHijos" placeholder="# Hijos" required>
              
            </div>
            
          </div>
          

        <!-- Modal footer -->
      <div class="modal-footer">
        <div class="btn group">
          <button type="button" class="btn btn-danger pull-left"  data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn" style="background:#ffcce0" data-dismiss="modal">Guardar</button>
        </div>
      </div>
      <?php
      $crearEmbajadora = new ControladorEmbajadoras();
      $crearEmbajadora -> ctrCrearEmbajadora();
      ?>
  </form>
    </div>
  </div>
</div>
