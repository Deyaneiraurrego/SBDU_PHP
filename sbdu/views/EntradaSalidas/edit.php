<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $EntradaSalida->IdEntradaSalida?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Ingreso y Salida</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=EntradaSalida&method=update"  method="post">
	
								<input type="hidden" name="IdEntradaSalida" 
								value="<?php echo $EntradaSalida->IdEntradaSalida?>">
	
									<div class="form-group">
										<label>Fecha Entrada</label>
										<input type="date"  name="FechaEntradaSalida" class="form-control"  
										value="<?php echo $EntradaSalida->FechaEntradaSalida ?>">
									</div>
									<div class="form-group">
										<label>Fecha Salida</label>
										<input type="date"  name="FechaSalidaEntradaSalida" class="form-control"  
										value="<?php echo $EntradaSalida->FechaSalidaEntradaSalida ?>">
									</div>

									<div>
										<label>Usuario</label>
										<select name="IdUsuarioEntradaSalida" class="form-control">
											<option value="">Seleccione Usuario</option>
													<?php
														foreach ($ConsUsers  as $ConsUser) 
												{
														if ($ConsUser->IdUsuario == $EntradaSalida->IdUsuarioEntradaSalida)
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

