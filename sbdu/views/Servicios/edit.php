<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Servicio->IdServicio?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Servicio </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=servicio&method=update"  method="post">
	
								<input type="hidden" name="IdServicio" 
								value="<?php echo $Servicio->IdServicio?>">
	
									<div class="form-group">
										<label>Mantenimiento Servicio</label>
										<input type="text"  name="MantenimientoServicio" class="form-control"  
										value="<?php echo $Servicio->MantenimientoServicio ?>">
									</div>
                                    <div class="form-group">
										<label>Bases Datos Servicio</label>
										<input type="text"  name="BasesDatosServicio" class="form-control"  
										value="<?php echo $Servicio->BasesDatosServicio ?>">
									</div>
                                    <div class="form-group">
										<label>Diseño Implementacion Servicio</label>
										<input type="text"  name="DisenoImplementacionServicio" class="form-control"  
										value="<?php echo $Servicio->DisenoImplementacionServicio ?>">
									</div>
                                    <div class="form-group">
										<label>Directorio Activo Servicio</label>
										<input type="text"  name="DirectorioActivoServicio" class="form-control"  
										value="<?php echo $Servicio->DirectorioActivoServicio ?>">
									</div>
                                    <div class="form-group">
										<label>Directorio Activo Servicio</label>
										<input type="text"  name="OptimizacionServicio" class="form-control"  
										value="<?php echo $Servicio->OptimizacionServicio ?>">
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

