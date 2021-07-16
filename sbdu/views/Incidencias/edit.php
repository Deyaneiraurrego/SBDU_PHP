<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Incidencia->IdIncidencia?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Incidencia </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=incidencia&method=update"  method="post">
	
								<input type="hidden" name="IdIncidencia" 
								value="<?php echo $Incidencia->IdIncidencia?>">
	
									<div class="form-group">
										<label>Fecha Recibido</label>
										<input type="date"  name="FechaRecibido" class="form-control"  
										value="<?php echo $Incidencia->FechaRecibido ?>">
									</div>
                                    <div class="form-group">
										<label>Fecha Entrega</label>
										<input type="date"  name="FechaEntrega" class="form-control"  
										value="<?php echo $Incidencia->FechaEntrega ?>">
									</div>
                                    <div>
					<label>Tecnico</label>
					 <select name="NombreTecnico" class="form-control">
						 <option value="">Seleccione Tecnico</option>
								<?php
									foreach ($ConsTecs  as $ConsTec) 
							{
									 if ($ConsTec->NombreUsuario == $Incidencia->NombreTecnico)
										{
								?>
											<option selected value="<?php echo $ConsTec->NombreUsuario?>"><?php echo $ConsTec->NombreUsuario?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $ConsTec->IdUsuario ?>"><?php echo $ConsTec->NombreUsuario?></option>			
								<?php
											 }
							}
								?>
					 </select>
				</div>
                <div>
					<label>Cargo</label>
					 <select name="IdUsuarioFK" class="form-control">
						 <option value="">Seleccione Tipo de Cargo</option>
								<?php
									foreach ($ConsUsers  as $ConsUser) 
							{
									 if ($ConsUser->IdUsuario == $Incidencia->IdUsuarioFK)
										{
								?>
											<option selected value="<?php echo $ConsUser->IdUsuario ?>"><?php echo $ConsUser->NombreUsuario?></option>
								<?php
										} else {
								?>
												 <option  value="<?php echo $ConsUser->IdUsuario ?>"><?php echo $ConsUser->NombreUsuario?></option>			
								<?php
											 }
							}
								?>
					 </select>
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

