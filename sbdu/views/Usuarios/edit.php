<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Usuario->IdUsuario?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Servicio </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=usuario&method=update"  method="post">
	
								<input type="hidden" name="IdUsuario" 
								value="<?php echo $Usuario->IdUsuario?>">
									<div class="form-group">
										<label>Numero Identificacion</label>
										<input type="text"  name="NumeroIdentificacion" class="form-control"  
										value="<?php echo $Usuario->NumeroIdentificacion ?>">
									</div>
									<div class="form-group">
										<label>Nombre Usuario</label>
										<input type="text"  name="NombreUsuario" class="form-control"  
										value="<?php echo $Usuario->NombreUsuario ?>">
									</div>
                                    <div class="form-group">
										<label>Apellido</label>
										<input type="text"  name="Apellido" class="form-control"  
										value="<?php echo $Usuario->Apellido ?>">
									</div>
                                    <div class="form-group">
										<label>Cel Contacto</label>
										<input type="text"  name="CelContacto" class="form-control"  
										value="<?php echo $Usuario->CelContacto?>">
									</div>
                                    <div class="form-group">
										<label>correo Usuario</label>
										<input type="text"  name="correoUsuario" class="form-control"  
										value="<?php echo $Usuario->correoUsuario ?>">
									</div>
                <div>
					<label>Cargo</label>
					 <select name="IdCargoFK" class="form-control">
						 <option value="">Seleccione Tipo de Cargo</option>
								<?php
									foreach ($Cargos  as $cargo) 
							{
									 if ($cargo->IdCargo == $Usuario->IdCargoFK)
										{
								?>
											<option selected value="<?php echo $cargo->IdCargo ?>"><?php echo $cargo->NombreCargo?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $cargo->IdCargo ?>"><?php echo $cargo->NombreCargo?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>

                <div>
					<label>Estado</label>
					 <select name="IdEstadoFK" class="form-control">
						 <option value="">Seleccione Tipo de Estado</option>
								<?php
									foreach ($Estados  as $Estado) 
							{
									 if ($Estado->IdEstado == $Usuario->IdEstadoFK)
										{
								?>
											<option selected value="<?php echo $Estado->IdEstado ?>"><?php echo $Estado->NombreEstado?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $Estado->IdEstado ?>"><?php echo $Estado->NombreEstado?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>

				<div class="form-group">
										<label>Conraseña Usuario</label>
										<input type="text"  name="contrasenaUsuario" class="form-control"  
										value="<?php echo $Usuario->contrasenaUsuario ?>">
				</div>
                                    								
						 <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button class="btn btn-primary">Actualizar</button>
						 
							</form>		
	
	
						</div>
					</div>
				</div>
			</div>
	
	</section>
	</main>
		



</body>
</html>

