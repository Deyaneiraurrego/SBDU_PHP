<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Equipos</title>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="js/form.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/modal.css">

<style>
    #btn{
        
        margin-left: 900px;
        margin-top: 2px;
    }
</style>




<!-- Google Font: Source Sans Pro -->
</head>
<body class="hold-transition sidebar-mini">

 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Equipos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Equipos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Equipos</span>
                <span class="info-box-number">
                  560
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Exitosas</span>
                <span class="info-box-number">41,410 %</span>
                
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times-circle"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Canceladas</span>
                <span class="info-box-number">5</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-map-marker-alt"></i></span>
              
              <div class="info-box-content">
                <span class="info-box-text">Localidades</span>
                <span class="info-box-number">20</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        
      </div><!--/. container-fluid -->


    </section>
    <!-- /.content -->
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              <button  class="btn btn-success" onclick="ventanaSecundaria('http://localhost:8080/sbdu/?controller=equipo&method=new')"><i class="fas fa-chart-bar"></i> Equipo</button>
              
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <table id="data" class="display responsive nowrap" style="width:100%">
        <thead>

        					
            <tr>
                <th># Equipo</th>
                <th>Tipo Computador </th>
                <th>Marca Board </th>
                <th>Procesador </th>
                <th>Marca Memoria RAM </th>
                <th>Disco Duro </th>
                <th>Unidad CD DVD </th>
                <th>Lectora Tarjetas </th>
                <th>Puertos </th>
                <th>Monitor </th>
                <th>Tarjeta red </th>
                <th>Tarjeta video </th>
                <th>Tarjeta Sonido </th>
                <th>Marca Teclado </th>
                <th>Estado Teclado </th>
                <th>Marca Serial Mouse</th>
                <th>Estado Mouse </th>
                <th>Alimentación </th>
                <th>Cámara </th>
                <th>Cables Alimentación Torre </th>
                <th>Cables Alimentacion Pantalla </th>
                <th>Sistema Operativo </th>
                <th>Sistema Operativo Múltiple </th>
                <th>controladores</th>
                <th>Particiones HDD </th>
                <th>Microsoft Office Tiene </th>
                <th>Microsoft Office Licencia </th>
                <th>Microsoft Office Licencia </th>
                <th>Navegadores </th>
                <th>Navegador Posee </th>
                <th>Lector PDF Posee </th>
                <th>Lector PDF Licencia </th>
                <th>Compresor Archivos Posee </th>
                <th>Compresor Archivos Licencia </th>
                <th>Antivirus Posee </th>
                <th>Antivirus Licencia </th>
                <th>Congelador DD </th>
                <th>Utilidades Grabación </th>
                <th>Fecha Entrada</th>
                <th>Direccion Ip Red</th>
                <th>Tipo Programa Licencia</th>
                <th>Diseno Implementacion Servicio</th>
                <th>Nombre Tecnico</th>
                <th>Usuario</th>
                <th>Estado</th>                
                <th>Acciones</th>

              

            </tr>
        </thead>
        <tbody>
            <?php foreach ($Equipos as $Equipo) : ?>
            <tr>
                <td><?php echo $Equipo->IdEquipo?></td>
                <td><?php echo $Equipo->TipoComputadorEquipo?></td>
                <td><?php echo $Equipo->MarcaBoardEquipo?></td>
                <td><?php echo $Equipo->ProcesadorEquipo?></td>
                <td><?php echo $Equipo->MarcaMemoriaRAMEquipo?></td>
                <td><?php echo $Equipo->MemoriaRAMEquipo?></td>
                <td><?php echo $Equipo->DiscoDuroEquipo?></td>
                <td><?php echo $Equipo->UnidadCDDVDEquipo?></td>
                <td><?php echo $Equipo->LectoraTarjetasEquipo?></td>
                <td><?php echo $Equipo->PuertosEquipo?></td>
                <td><?php echo $Equipo->MonitorEquipo?></td>
                <td><?php echo $Equipo->TarjetaredEquipo?></td>
                <td><?php echo $Equipo->TarjetavideoEquipo?></td>
                <td><?php echo $Equipo->TarjetaSonidoEquipo?></td>
                <td><?php echo $Equipo->MarcaTecladoEquipo?></td>
                <td><?php echo $Equipo->EstadoTecladoEquipo?></td>
                <td><?php echo $Equipo->MarcaSerialMouseEquipo?></td>
                <td><?php echo $Equipo->EstadoMouseEquipo?></td>
                <td><?php echo $Equipo->AlimentacionEquipo?></td>
                <td><?php echo $Equipo->CamaraEquipo?></td>
                <td><?php echo $Equipo->CablesAlimentacionTorreEquipo?></td>
                <td><?php echo $Equipo->CablesAlimentacionPantallaEquipo?></td>
                <td><?php echo $Equipo->SistemaOperativoEquipo?></td>
                <td><?php echo $Equipo->SistemaOperativoMultipleEquipo?></td>
                <td><?php echo $Equipo->controladoresEquipo?></td>
                <td><?php echo $Equipo->ParticionesHDDEquipo?></td>
                <td><?php echo $Equipo->MicrosoftOfficeTieneEquipo?></td>
                <td><?php echo $Equipo->MicrosoftOfficeLicenciaEquipo?></td>
                <td><?php echo $Equipo->NavegadoresEquipo?></td>
                <td><?php echo $Equipo->NavegadorPoseeEquipo?></td>
                <td><?php echo $Equipo->LectorPDFPoseeEquipo?></td>
                <td><?php echo $Equipo->LectorPDFLicenciaEquipo?></td>
                <td><?php echo $Equipo->CompresorArchivosPoseeEquipo?></td>
                <td><?php echo $Equipo->CompresorArchivosLicenciaEquipo?></td>
                <td><?php echo $Equipo->AntivirusPoseeEquipo?></td>
                <td><?php echo $Equipo->AntivirusLicenciaEquipo?></td>
                <td><?php echo $Equipo->CongeladorDDEquipo?></td>
                <td><?php echo $Equipo->UtilidadesGrabacionEquipo?></td>
                <td><?php echo $Equipo->FechaEntradaSalida?></td>
                <td><?php echo $Equipo->DireccionIpRed?></td>
                <td><?php echo $Equipo->TipoProgramaLicencia?></td>
                <td><?php echo $Equipo->DisenoImplementacionServicio?></td>
                <td><?php echo $Equipo->NombreTecnico?></td>
                <td><?php echo $Equipo->NombreUsuario?></td>
                <td><?php echo $Equipo->NombreEstado?></td>
                
                <td>


                  <a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $Equipo->IdEquipo?>" href="?controller=equipo&method=edit&IdEquipo=<?php
                  echo $Equipo->IdEquipo?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                  
                  <a href="?controller=equipo&method=delete&IdEquipo=
                      <?php echo $Equipo->IdEquipo?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                </td>
                
            </tr>

              <?php endforeach?>
        </tbody>
    </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->    
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
       
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
            
            <?php
              foreach ($Equipos as $Equipo) :
                include 'edit.php'
            ?>

            <?php
              endforeach
            ?>

    <section>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Nuevo Servicio</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span onclick="window.location.href='?controller=servicio'"   aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				        <form action="?controller=servicio&method=save" method="post" onsubmit="return validarArea();">
									
                    <div class="form-group">
                      <label>Mantenimiento Servicio</label>
                      <textarea class="form-control" rows="3" id="MantenimientoServicio" name="MantenimientoServicio" placeholder="Descripcion breve estado"  required></textarea>
										</div>
                    <div class="form-group">
                      <label>Bases Datos</label>
                      <textarea class="form-control" rows="3" id="BasesDatosServicio" name="BasesDatosServicio" placeholder="Descripcion breve estado"  required></textarea>
										</div>
                    <div class="form-group">
                      <label>Diseño Implementación</label>
                      <textarea class="form-control" rows="3" id="DisenoImplementacionServicio" name="DisenoImplementacionServicio" placeholder="Descripcion breve estado"  required></textarea>
										</div>
                    <div class="form-group">
                      <label>Directorio Activo </label>
                      <textarea class="form-control" rows="3" id="DirectorioActivoServicio" name="DirectorioActivoServicio" placeholder="Descripcion breve estado"  required></textarea>
										</div>
                    <div class="form-group">
                      <label>Optimización Servicio</label>
                      <textarea class="form-control" rows="3" id="OptimizacionServicio" name="OptimizacionServicio" placeholder="Descripcion breve estado"  required></textarea>
										</div>
                    
										
																				
				      <div class="modal-footer">
				      	<input type="button" value="Cancelar" class="btn btn-secondary" onclick="window.location.href='?controller=servicio'" /> 
				       	<input type="submit" value="Guardar" class="btn btn-success">
				        </form>		
				      </div>
				    </div>
				  </div>
				</div>
	</section>
  </div>

  <!-- Content Wrapper. Contains page content -->
 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function() {
    tablaOfertaCambioIdioma();
} );

function tablaOfertaCambioIdioma(){

	$('#data').DataTable({

		  "language": {
      "emptyTable":     "<i>No hay datos disponibles en la tabla.</i>",
      "info":         "Del _START_ al _END_ de _TOTAL_ ",
      "infoEmpty":      "Mostrando 0 registros de un total de 0.",
      "infoFiltered":     "(filtrados de un total de _MAX_ registros)",
      "infoPostFix":      "(actualizados)",
      "lengthMenu":     "Mostrar _MENU_ registros",
      "loadingRecords":   "Cargando...",
      "processing":     "Procesando...",
      "search":     "<span style='font-size:15px;'>Buscar:</span>",
      "searchPlaceholder":    "Dato para buscar",
      "zeroRecords":      "No se han encontrado coincidencias.",
      "paginate": {
        "first":      "Primera",
        "last":       "Última",
        "next":       "Siguiente",
        "previous":     "Anterior"
      },
      "aria": {
        "sortAscending":  "Ordenación ascendente",
        "sortDescending": "Ordenación descendente"
      }
    },

     "lengthMenu":   [[15,5,7, 10, 20, 25, 50, -1], [3,5,7, 10, 20, 25, 50, "Todos"]],
    "iDisplayLength": 15,

	});
    }
    </script>
</body>
</html>
