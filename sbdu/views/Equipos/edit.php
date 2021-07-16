<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="css/modal.css">
<link rel="stylesheet" type="text/css" href="css/wizard.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="js/wizard.js"></script>




</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Equipo->IdEquipo?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Equipo </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"><a href="?controller=equipo&method=index">&times;</a></span>
							</button>
						</div>
                        <div class="container-fluid" id="grad1">
                            <div class="row justify-content-center mt-0">
                                <div class=" text-center">
                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3" style="width:450px;">
                                        <h2><strong>Editar Equipo </strong></h2>
                                        <p>Completa la informacion</p>
                                        <div class="row">
                                            <div class="col-md-12 mx-0">
                                                <form id="msform" action="?controller=equipo&method=update"  method="post">
                                                
                                                        
                                                    <!-- progressbar -->
                                                    <ul id="progressbar">
                                                        <li class="active" id="account"><strong>Datos</strong></li>
                                                        <li id="personal"><strong>Componentes</strong></li>
                                                        <li id="payment"><strong>Incidencias</strong></li>
                                                        <li id="payment"><strong>copia</strong></li>
                                                        <li id="payment"><strong>Extras</strong></li>
                                                        <li id="payment"><strong>Uno Mas</strong></li>
                                                        <li id="payment"><strong>Otros</strong></li>
                                                        <li id="confirm"><strong>Finalizar</strong></li>
                                                    </ul> <!-- fieldsets -->
                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Datos Equipo</h2>
                                                                
                                                                <input type="hidden" name="IdEquipo" 
								                                value="<?php echo $Equipo->IdEquipo?>">
                                                                <label >Tipo Computador Equipo</label>
                                                                <input type="text"  name="TipoComputadorEquipo" class="form-control"  
										                        value="<?php echo $Equipo->TipoComputadorEquipo ?>">
                                                                <label >MarcaBoardEquipo</label>
                                                                <input type="text"  name="MarcaBoardEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MarcaBoardEquipo ?>">
                                                                <label >Procesador Equipo</label>
                                                                <input type="text"  name="ProcesadorEquipo" class="form-control"  
										                        value="<?php echo $Equipo->ProcesadorEquipo ?>">
                                                                <label >Marca Memoria RAM Equipo</label>
                                                                <input type="text"  name="MarcaMemoriaRAMEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MarcaMemoriaRAMEquipo ?>">
                                                                <label >Disco Duro Equipo</label>
                                                                <input type="text"  name="DiscoDuroEquipo" class="form-control"  
										                        value="<?php echo $Equipo->DiscoDuroEquipo ?>">      
                                                                
                                                        </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Componentes</h2>
                                                            
                                                                <label >Unidad CDDVD Equipo</label>
                                                                <input type="text"  name="UnidadCDDVDEquipo" class="form-control"  
										                        value="<?php echo $Equipo->UnidadCDDVDEquipo ?>">
                                                                <label >Lectora Tarjetas Equipo</label>
                                                                <input type="text"  name="LectoraTarjetasEquipo" class="form-control"  
										                        value="<?php echo $Equipo->LectoraTarjetasEquipo ?>">
                                                                <label >Puertos Equipo</label>
                                                                <input type="text"  name="PuertosEquipo" class="form-control"  
										                        value="<?php echo $Equipo->PuertosEquipo ?>">
                                                                <label >Monitor Equipo</label>
                                                                <input type="text"  name="MonitorEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MonitorEquipo ?>">
                                                                <label >Tarjeta red Equipo</label>
                                                                <input type="text"  name="TarjetaredEquipo" class="form-control"  
										                        value="<?php echo $Equipo->TarjetaredEquipo ?>">      
                                                                
                                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Incidencias</h2>
                                                                <label >Tarjeta video Equipo</label>
                                                                <input type="text"  name="TarjetavideoEquipo" class="form-control"  
										                        value="<?php echo $Equipo->TarjetavideoEquipo ?>">
                                                                <label >Tarjeta Sonido Equipo</label>
                                                                <input type="text"  name="TarjetaSonidoEquipo" class="form-control"  
										                        value="<?php echo $Equipo->TarjetaSonidoEquipo ?>">
                                                                <label >Marca Teclado Equipo</label>
                                                                <input type="text"  name="MarcaTecladoEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MarcaTecladoEquipo ?>">
                                                                <label >Estado Teclado Equipo</label>
                                                                <input type="text"  name="EstadoTecladoEquipo" class="form-control"  
										                        value="<?php echo $Equipo->EstadoTecladoEquipo ?>">
                                                                <label >Marca Serial Mouse Equipo</label>
                                                                <input type="text"  name="MarcaSerialMouseEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MarcaSerialMouseEquipo ?>">
                                                                <label >Estado Mouse Equipo</label>
                                                                <input type="text"  name="EstadoMouseEquipo" class="form-control"  
										                        value="<?php echo $Equipo->EstadoMouseEquipo ?>">
                                                            
                                                            
                                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                                               
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Copia</h2>
                                                                <label >Alimentacion Equipo</label>
                                                                <input type="text"  name="AlimentacionEquipo" class="form-control"  
										                        value="<?php echo $Equipo->AlimentacionEquipo ?>">
                                                                <label >Camara Equipo</label>
                                                                <input type="text"  name="CamaraEquipo" class="form-control"  
										                        value="<?php echo $Equipo->CamaraEquipo ?>">
                                                                <label >Cables Alimentacion TorreEquipo</label>
                                                                <input type="text"  name="CablesAlimentacionTorreEquipo" class="form-control"  
										                        value="<?php echo $Equipo->CablesAlimentacionTorreEquipo ?>">
                                                                <label >Cables Alimentacion Pantalla Equipo</label>
                                                                <input type="text"  name="CablesAlimentacionPantallaEquipo" class="form-control"  
										                        value="<?php echo $Equipo->CablesAlimentacionPantallaEquipo ?>">
                                                                <label >Sistema Operativo Equipo</label>
                                                                <input type="text"  name="SistemaOperativoEquipo" class="form-control"  
										                        value="<?php echo $Equipo->SistemaOperativoEquipo ?>">
                                                                <label >Sistema Operativo Multiple Equipo</label>
                                                                <input type="text"  name="SistemaOperativoMultipleEquipo" class="form-control"  
										                        value="<?php echo $Equipo->SistemaOperativoMultipleEquipo ?>">
                        
                                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                               <input type="button" name="next" class="next action-button" value="Next Step" />    
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Extras</h2>
                                                            <label >controladoresEquipo</label>
                                                                <input type="text"  name="controladoresEquipo" class="form-control"  
										                        value="<?php echo $Equipo->controladoresEquipo ?>">
                                                                <label >Particiones HDD Equipo</label>
                                                                <input type="text"  name="ParticionesHDDEquipo" class="form-control"  
										                        value="<?php echo $Equipo->ParticionesHDDEquipo ?>">
                                                                <label >Microsoft Office Tiene Equipo</label>
                                                                <input type="text"  name="MicrosoftOfficeTieneEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MicrosoftOfficeTieneEquipo ?>">
                                                                <label >Microsoft Office Licencia Equipo</label>
                                                                <input type="text"  name="MicrosoftOfficeLicenciaEquipo" class="form-control"  
										                        value="<?php echo $Equipo->MicrosoftOfficeLicenciaEquipo ?>">
                                                                <label >Navegadores Equipo</label>
                                                                <input type="text"  name="NavegadoresEquipo" class="form-control"  
										                        value="<?php echo $Equipo->NavegadoresEquipo ?>">
                                                                <label >Navegador Posee Equipo</label>
                                                                <input type="text"  name="NavegadorPoseeEquipo" class="form-control"  
										                        value="<?php echo $Equipo->NavegadorPoseeEquipo ?>">
                        
                                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Uno Mas</h2>
                                                            <label >Lector PDF PoseeEquipo</label>
                                                                <input type="text"  name="LectorPDFPoseeEquipo" class="form-control"  
										                        value="<?php echo $Equipo->LectorPDFPoseeEquipo ?>">
                                                                <label >Lector PDF Licencia Equipo</label>
                                                                <input type="text"  name="LectorPDFLicenciaEquipo" class="form-control"  
										                        value="<?php echo $Equipo->LectorPDFLicenciaEquipo ?>">
                                                                <label >Compresor Archivos Posee Equipo</label>
                                                                <input type="text"  name="CompresorArchivosPoseeEquipo" class="form-control"  
										                        value="<?php echo $Equipo->CompresorArchivosPoseeEquipo ?>">
                                                                <label >Compresor Archivos Licencia Equipo</label>
                                                                <input type="text"  name="CompresorArchivosLicenciaEquipo" class="form-control"  
										                        value="<?php echo $Equipo->CompresorArchivosLicenciaEquipo ?>">
                                                                <label >Antivirus Posee Equipo</label>
                                                                <input type="text"  name="AntivirusPoseeEquipo" class="form-control"  
										                        value="<?php echo $Equipo->AntivirusPoseeEquipo ?>">
                                                                <label >Antivirus Licencia Equipo</label>
                                                                <input type="text"  name="AntivirusLicenciaEquipo" class="form-control"  
										                        value="<?php echo $Equipo->AntivirusLicenciaEquipo ?>">
                        
                                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                                <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>
                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Otros</h2>
                                                                <label >Congelador DD Equipo</label>
                                                                <input type="text"  name="CongeladorDDEquipo" class="form-control"  
										                        value="<?php echo $Equipo->CongeladorDDEquipo ?>">
                                                                <label >Utilidades Grabacion Equipo</label>
                                                                <input type="text"  name="UtilidadesGrabacionEquipo" class="form-control"  
										                        value="<?php echo $Equipo->UtilidadesGrabacionEquipo ?>">

                                                                <label>Fecha Ingreso</label>
                                                                <select name="IdEntradaSalidaFK" class="form-control">
                                                                    <option value="">Seleccione Fecha Ingreso</option>
                                                                            <?php
                                                                                foreach ($EntradaSalidas  as $EntradaSalida) 
                                                                        {
                                                                                if ($EntradaSalida->IdEntradaSalida == $Equipo->IdEntradaSalidaFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $EntradaSalida->IdEntradaSalida?>"><?php echo $EntradaSalida->FechaEntradaSalida?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $EntradaSalida->IdEntradaSalida?>"><?php echo $EntradaSalida->FechaEntradaSalida?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>
                                                                <label>Direccion Ip Red</label>
                                                                <select name="IdRedFK" class="form-control">
                                                                    <option value="">Seleccione IP RED</option>
                                                                            <?php
                                                                                foreach ($Redes  as $Red) 
                                                                        {
                                                                                if ($Red->IdRed == $Equipo->IdRedFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $Red->IdRed?>"><?php echo $Red->DireccionIpRed?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $Red->IdRed?>"><?php echo $Red->DireccionIpRed?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>

                                                                <label>Tipo Programa Licencia</label>
                                                                <select name="IdLicenciaFK" class="form-control">
                                                                    <option value="">Seleccione Licencia</option>
                                                                            <?php
                                                                                foreach ($Licencias  as $Licencia) 
                                                                        {
                                                                                if ($Licencia->IdLicencia== $Equipo->IdLicenciaFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $Licencia->IdLicencia?>"><?php echo $Licencia->TipoProgramaLicencia?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $Licencia->IdLicencia?>"><?php echo $Licencia->TipoProgramaLicencia?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>


                                                                <label>Diseno Implementacion Servicio</label>
                                                                <select name="IdServicioFK" class="form-control">
                                                                    <option value="">Seleccione Diseno Implementacion</option>
                                                                            <?php
                                                                                foreach ($Servicios  as $Servicio) 
                                                                        {
                                                                                if ($Servicio->IdServicio == $Equipo->IdServicioFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $Servicio->IdServicio?>"><?php echo $Servicio->DisenoImplementacionServicio?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $Servicio->IdServicio?>"><?php echo $Servicio->DisenoImplementacionServicio?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>

                                                                <label>Nombre Tecnico</label>
                                                                <select name="IdIncidenciaFK" class="form-control">
                                                                    <option value="">Seleccione Nombre Tecnico</option>
                                                                            <?php
                                                                                foreach ($Incidencias  as $Incidencia) 
                                                                        {
                                                                                if ($Incidencia->IdIncidencia == $Equipo->IdIncidenciaFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $Incidencia->IdIncidencia?>"><?php echo $Incidencia->NombreTecnico?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $Incidencia->IdIncidencia?>"><?php echo $Incidencia->NombreTecnico?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>

                                                                <label>Usuario</label>
                                                                <select name="IdUsuarioFK" class="form-control">
                                                                    <option value="">Seleccione Nombre Usuario</option>
                                                                            <?php
                                                                                foreach ($Usuarios  as $Usuario) 
                                                                        {
                                                                                if ($Usuario->IdUsuario == $Equipo->IdUsuarioFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $Usuario->IdUsuario?>"><?php echo $Usuario->NombreUsuario?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $Usuario->IdUsuario?>"><?php echo $Usuario->NombreUsuario?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>

                                                                <label>Estado</label>
                                                                <select name="IdEstadoFK" class="form-control">
                                                                    <option value="">Seleccione Estado</option>
                                                                            <?php
                                                                                foreach ($Estados  as $Estado) 
                                                                        {
                                                                                if ($Estado->IdEstado == $Equipo->IdEstadoFK)
                                                                                    {
                                                                            ?>
                                                                                        <option selected value="<?php echo $Estado->IdEstado?>"><?php echo $Estado->NombreEstado?></option>
                                                                            <?php
                                                                                    } else {
                                                                            ?>
                                                                                            <option  value="<?php echo $Estado->IdEstado?>"><?php echo $Estado->NombreEstado?></option>			
                                                                            <?php
                                                                                        }
                                                                        }
                                                                            ?>
                                                                </select>
                                                                
                                                        </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                        <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title text-center">Si desea Actualizar la Información Oprima Actualizar !</h2> <br><br>
                                                            <div class="row justify-content-center">
                                                                <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                                            </div> <br><br>
                                                            <div class="row justify-content-center">
                                                                <div class="col-7 text-center">
                                                                    <button class="next action-button">Actualizar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                                <a href="?controller=equipo">Cancelar Actualizacion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
	
	</section>
	</main>
		



</body>
</html>

