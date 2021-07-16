<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript" src="js/validacionForms.js"></script>

</head>
<body>
<main class="container">
	
	<section>
		<div class="modal fade" id="exampleModal<?php echo $Red->IdRed?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	
				<div class="modal-dialog">
					<div class="modal-content">
						<div id="color" class="modal-header">
							<h5 class="modal-title1" id="exampleModalLabel">Editar Red </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
	
	
	
						 <form action="?controller=red&method=update"  method="post">
	
								<input type="hidden" name="IdRed" 
								value="<?php echo $Red->IdRed?>">

									<div class="form-group">
										<label>Tipo Conectividad Red</label>
										<input type="text"  name="TipoConectividadRed" class="form-control"  
										value="<?php echo $Red->TipoConectividadRed ?>">
									</div>
                                    <div class="form-group">
										<label>Direccion Ip Red</label>
										<input type="text"  name="DireccionIpRed" class="form-control"  
										value="<?php echo $Red->DireccionIpRed ?>">
									</div>
                                    <div class="form-group">
										<label>Mascara Red</label>
										<input type="text"  name="MascaraRed" class="form-control"  
										value="<?php echo $Red->MascaraRed ?>">
									</div>
                                    <div class="form-group">
										<label>DHCP Red</label>
										<input type="text"  name="DHCPRed" class="form-control"  
										value="<?php echo $Red->DHCPRed ?>">
									</div>
                                    <div class="form-group">
										<label>DNS Red</label>
										<input type="text"  name="DNSRed" class="form-control"  
										value="<?php echo $Red->DNSRed ?>">
									</div>
                                    <div class="form-group">
										<label>Direccion Fisica Red</label>
										<input type="text"  name="DireccionFisicaRed" class="form-control"  
										value="<?php echo $Red->DireccionFisicaRed ?>">
									</div>
                                    <div class="form-group">
										<label>Descripcion Red</label>
										<input type="text"  name="DescripcionRed" class="form-control"  
										value="<?php echo $Red->DescripcionRed ?>">
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

