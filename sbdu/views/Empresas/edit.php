<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Empresa->idEmpresa?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar empresa </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=empresa&method=update"  method="post">
	
								<input type="hidden" name="idEmpresa" 
								value="<?php echo $Empresa->idEmpresa?>">
	
									<div class="form-group">
										<label>Nit empresa</label>
										<input type="text"  name="nitEmpresa" class="form-control"  
										value="<?php echo $Empresa->nitEmpresa ?>">
									</div>
                                    <div class="form-group">
										<label>Nombre empresa</label>
										<input type="text"  name="nombreEmpresa" class="form-control"  
										value="<?php echo $Empresa->nombreEmpresa ?>">
									</div>
                                    <div class="form-group">
										<label>Ventas Realizadas empresa</label>
										<input type="text"  name="VentasRealizadas" class="form-control"  
										value="<?php echo $Empresa->VentasRealizadas ?>">
									</div>
                                    <div class="form-group">
										<label>Cantidad pedidos</label>
										<input type="text"  name="Cantidadpedidos" class="form-control"  
										value="<?php echo $Empresa->Cantidadpedidos ?>">
									</div>
                                    <div class="form-group">
										<label>Telefono Empresa</label>
										<input type="text"  name="TelefonoEmpresa" class="form-control"  
										value="<?php echo $Empresa->TelefonoEmpresa ?>">
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

