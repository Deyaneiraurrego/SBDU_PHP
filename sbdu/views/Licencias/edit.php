<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Licencia->IdLicencia?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Estado </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=licencia&method=update"  method="post">
	
								<input type="hidden" name="IdLicencia" 
								value="<?php echo $Licencia->IdLicencia?>">

                                
                            
									<div class="form-group">
										<label>Tipo Programa Licencia</label>
										<input type="text"  name="TipoProgramaLicencia" class="form-control"  
										value="<?php echo $Licencia->TipoProgramaLicencia ?>">
									</div>
                                    <div class="form-group">
										<label>Nombre Licencia</label>
										<input type="text"  name="NombreLicencia" class="form-control"  
										value="<?php echo $Licencia->NombreLicencia ?>">
									</div>
                                    <div class="form-group">
										<label>Autor Licencia</label>
										<input type="text"  name="AutorLicencia" class="form-control"  
										value="<?php echo $Licencia->AutorLicencia ?>">
									</div>
                                    <div class="form-group">
										<label>Version Licencia</label>
										<input type="text"  name="VersionLicencia" class="form-control"  
										value="<?php echo $Licencia->VersionLicencia ?>">
									</div>
                                    <div class="form-group">
										<label>Desarrollador Licencia</label>
										<input type="text"  name="DesarrolladorLicencia" class="form-control"  
										value="<?php echo $Licencia->DesarrolladorLicencia ?>">
									</div>
                                    <div class="form-group">
										<label>Modelo Desarrollo Licencia</label>
										<input type="text"  name="ModeloDesarrolloLicencia" class="form-control"  
										value="<?php echo $Licencia->ModeloDesarrolloLicencia ?>">
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

