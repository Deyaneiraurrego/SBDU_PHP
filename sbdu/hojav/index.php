
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Equipo</title>
<link type="text/css" rel="stylesheet" href="hojav/css/brown.css" />
<link type="text/css" rel="stylesheet" href="hojav/css/print.css" media="print"/>
<link type="text/css" rel="stylesheet" href="hojav/css/select.css" />


<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="hojav/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="hojav/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="hojav/js/cufon.yui.js"></script>
<script type="text/javascript" src="hojav/js/scrollTo.js"></script>
<script type="text/javascript" src="hojav/js/myriad.js"></script>
<script type="text/javascript" src="hojav/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="hojav/js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
<script src="hojav/js/fun.js"></script>
<script src="js/validacionForms.js"></script>

</head>
<body>



<form action="?controller=equipo&method=save" enctype="multipart/form-data" method="post"  id="wizard">

<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="hojav/images/COMPUTO.jpg" alt="John Smith" />
          

          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">Carateristicas Equipo <br/><br/>
              <span>SBDU</span></h1>
            <ul>
              <li class="ad">Zona Rosa, Cl. 83, Bogotá </li>
              <li class="mail">computoServidor@sbdu.com</li>
              <li class="tel">+57 3112532392</li>
              <li class="web">www.computoServidor.com</li>
              <li>Seleccione Foto</li>
              <input type="file" name="imagen" id="imagen">
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="hojav/images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="hojav/images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="Follow me on Twitter"><img src="hojav/images/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="My Facebook Profile"><img src="hojav/images/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        
        <div class="entry">
          <h2>OBJECTIVO</h2>
          <p>Te Damos la Bienvenida A Nuestra Empresa , por favor Complete Los Siguiente Datos sobre el equipo.</p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->

        	
        <div class="entry">
          <h2>D. Equipo</h2>
          <div class="content">
            <h3>Tipo Computador Equipo</h3>
            <input type="text"  id="TipoComputadorEquipo" name="TipoComputadorEquipo" class="form-control" placeholder="Tipo Computador" >
          </div>
          <div class="content">
            <h3>Marca Board Equipo</h3>
            <input type="text"  id="MarcaBoardEquipo" name="MarcaBoardEquipo" class="form-control" placeholder="Marca Board Equipo ">
          
          </div>
          <div class="content">
            <h3>Procesador Equipo</h3>
            <input type="text"  id="ProcesadorEquipo" name="ProcesadorEquipo" class="form-control" placeholder="Procesador Equipo">
          </div>
          <div class="content">
            <h3>Marca Memoria RAM Equipo</h3>
            <input type="text"  id="MarcaMemoriaRAMEquipo" name="MarcaMemoriaRAMEquipo" class="form-control" placeholder="Marca Memoria RAM Equipo"  >
          </div>
          <div class="content">
            <h3>Disco Duro Equipo</h3>
            <input type="text"  id="DiscoDuroEquipo" name="DiscoDuroEquipo" class="form-control" placeholder="Disco DuroEquipo" >
          </div>
          
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>D. Graficos</h2>
          <p>Indique los siguientes datos de el equipo ingresado:</p>
          <div class="content">
            <h3>caracteristicas</h3>
            
            <ul class="info">
              <li>Unidad CD DVD Equipo
                <input type="text"  id="UnidadCDDVDEquipo" name="UnidadCDDVDEquipo" class="form-control" placeholder="Unidad CD DVD Equipo"></li>
              <li>Lectora Tarjetas Equipo 
                <input type="text"  id="LectoraTarjetasEquipo" name="LectoraTarjetasEquipo" class="form-control" placeholder="Lectora Tarjetas Equipo"></li>
              </li>
              
            </ul>
          </div>
          <div class="content">
            <h3>Extras</h3>
            
            <ul class="info">
              <li>Cantidad Puertos Equipo
                <input type="text"  id="PuertosEquipo" name="PuertosEquipo" class="form-control" placeholder="Puertos Equipo"></li>
              <li>Monitor Equipo 
                <input type="text"  id="MonitorEquipo" name="MonitorEquipo" class="form-control" placeholder="Marca Monitor " >

              <li>Tarjeta red Equipo
                 <input type="text"  id="TarjetaredEquipo" name="TarjetaredEquipo" class="form-control" placeholder="Marca Tarjeta red Equipo">
            </li>
            
                      
            </ul>
          </div>
        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
          


        <div class="entry">
          <h2>Otros</h2>
          
          
          <div class="content">
            <h3>Componentes </h3>
            <p>Complete  Informacion<br />
              <em>Otros</em></p>
            <ul class="info">
              
            <li>Tarjeta video Equipo
              <input type="text"  id="TarjetavideoEquipo" name="TarjetavideoEquipo" class="form-control" placeholder="Marca Tarjeta video Equipo">
            </li>
            
            <li>Tarjeta Sonido Equipo</br>
            En el caso de no tener poner (ninguno)

            <input type="text"  id="TarjetaSonidoEquipo" name="TarjetaSonidoEquipo" class="form-control" placeholder="Marca Tarjeta Sonido Equipo">

            </li>
            <li>Marca Teclado Equipo</br>
               En el caso de no tener poner (ninguno) 
            
               <input type="text"  id="MarcaTecladoEquipo" name="MarcaTecladoEquipo" class="form-control" placeholder="Marca Teclado Equipo">

            </li>

            <li>Alimentación Equipo        
              <input type="text"  id="AlimentacionEquipo" name="AlimentacionEquipo" class="form-control" placeholder="Alimentación Equipo">
            </li>
            <li>Marca Serial Mouse Equipo</br>
               
            
               <input type="text"  id="MarcaSerialMouseEquipo" name="MarcaSerialMouseEquipo" class="form-control" placeholder="Marca Serial Mouse Equipo">

            </li>
            <li>Estado Mouse Equipo</br>
               
            
               <input type="text"  id="EstadoMouseEquipo" name="EstadoMouseEquipo" class="form-control" placeholder="Estado Mouse Equipo">

            </li>
            <li>Cámara Equipo</br>
               En el caso de no tener poner (ninguno)    
               <input type="text"  id="CamaraEquipo" name="CamaraEquipo" class="form-control" placeholder="Marca Cámara Equipo">
            </li>
            <li>Cables Alimentación Torre Equipo</br>        
               <input type="text"  id="CablesAlimentacionTorreEquipo" name="CablesAlimentacionTorreEquipo" class="form-control" placeholder="Cables Alimentación Torre Equipo">
            </li>
            <li>Cables Alimentacion Pantalla Equipo</br>      
               <input type="text"  id="CablesAlimentacionPantallaEquipo" name="CablesAlimentacionPantallaEquipo" class="form-control" placeholder="Cables Alimentacion Pantalla Equipo">
            </li>
            <li>Sistema Operativo Equipo</br>      
               <input type="text"  id="SistemaOperativoEquipo" name="SistemaOperativoEquipo" class="form-control" placeholder="Sistema Operativo Equipo">
            </li>

            <li>Sistema Operativo Múltiple Equipo</br>      
               <input type="text"  id="SistemaOperativoMultipleEquipo" name="SistemaOperativoMultipleEquipo" class="form-control" placeholder="Sistema Operativo Múltiple Equipo">
            </li>

            <li>controladores Equipo</br>      
               <input type="text"  id="controladoresEquipo" name="controladoresEquipo" class="form-control" placeholder="controladores Equipo">
            </li>

            <li>Particiones HDD Equipo</br>      
               <input type="text"  id="ParticionesHDDEquipo" name="ParticionesHDDEquipo" class="form-control" placeholder="Particiones HDD Equipo">
            </li>

            <li>Microsoft Office Tiene Equipo ?</br>      
               <input type="text"  id="MicrosoftOfficeTieneEquipo" name="MicrosoftOfficeTieneEquipo" class="form-control" placeholder="Microsoft Office ?">
            </li>

            <li>Microsoft Office Licencia Equipo ?</br>      
               <input type="text"  id="MicrosoftOfficeLicenciaEquipo" name="MicrosoftOfficeLicenciaEquipo" class="form-control" placeholder="Microsoft Office Licencia Equipo ?">
            </li>

            <li>Navegadores Equipo</br>      
               <input type="text"  id="NavegadoresEquipo" name="NavegadoresEquipo" class="form-control" placeholder="Navegadores Equipo">
            </li>

            <li>Navegador Posee Equipo ?</br>      
               <input type="text"  id="NavegadorPoseeEquipo" name="NavegadorPoseeEquipo" class="form-control" placeholder="Navegador Posee Equipo ?">
            </li>

            <li>Lector PDF Posee Equipo ?</br>      
               <input type="text"  id="LectorPDFPoseeEquipo" name="LectorPDFPoseeEquipo" class="form-control" placeholder="Lector PDF Posee Equipo ?">
            </li>

            <li>Lector PDF Licencia Equipo ?</br>      
               <input type="text"  id="LectorPDFLicenciaEquipo" name="LectorPDFLicenciaEquipo" class="form-control" placeholder="Lector PDF Licencia Equipo ?">
            </li>
            <li>Compresor Archivos Posee Equipo ?</br>      
               <input type="text"  id="CompresorArchivosPoseeEquipo" name="CompresorArchivosPoseeEquipo" class="form-control" placeholder="Compresor Archivos Posee Equipo ?">
            </li>
            <li>Compresor Archivos Licencia Equipo</br>      
               <input type="text"  id="CompresorArchivosLicenciaEquipo" name="CompresorArchivosLicenciaEquipo" class="form-control" placeholder="Compresor Archivos Licencia Equipo">
            </li>
            <li>Antivirus Posee Equipo ?</br>      
               <input type="text"  id="AntivirusPoseeEquipo" name="AntivirusPoseeEquipo" class="form-control" placeholder="Antivirus Posee Equipo?">
            </li>
            <li>Antivirus Licencia Equipo ?</br>      
               <input type="text"  id="AntivirusLicenciaEquipo" name="AntivirusLicenciaEquipo" class="form-control" placeholder="Antivirus Licencia Equipo ?">
            </li>
            <li>Congelador DD Equipo</br>      
               <input type="text"  id="CongeladorDDEquipo" name="CongeladorDDEquipo" class="form-control" placeholder="Congelador DD Equipo">
            </li>
            <li>Utilidades Grabación Equipo</br>      
               <input type="text"  id="UtilidadesGrabacionEquipo" name="UtilidadesGrabacionEquipo" class="form-control" placeholder="Utilidades Grabación Equipo">
            </li>
           
                <li>
                    Entrada Salida
                    <select id="IdEntradaSalidaFK" name="IdEntradaSalidaFK" class="select-css" required>
										 <option value="">Seleccione Fecha Entrada</option>
										  	<?php
												  foreach ($EntradaSalidas  as $EntradaSalida) 
											{
													 if ($EntradaSalida->IdEntradaSalida == $data[0]->IdEntradaSalidaFK)
													  {
												?>
															<option selected value="<?php echo $EntradaSalida->IdEntradaSalida ?>"><?php echo $EntradaSalida->FechaEntradaSalida?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $EntradaSalida->IdEntradaSalida ?>"><?php echo $EntradaSalida->FechaEntradaSalida?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>


                <li>
                    Red
                    <select id="IdRedFK" name="IdRedFK" class="select-css" required>
										 <option value="">Seleccione Tipo de Cargo</option>
										  	<?php
												  foreach ($Redes  as $Red) 
											{
													 if ($Red->IdRed == $data[0]->IdRedFK)
													  {
												?>
															<option selected value="<?php echo $Red->IdRed ?>"><?php echo $Red->DireccionIpRed?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $Red->IdRed ?>"><?php echo $Red->DireccionIpRed?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>

                <li>
                    Licencia
                    <select id="IdLicenciaFK" name="IdLicenciaFK" class="select-css" required>
										 <option value="">Seleccione Tipo de Cargo</option>
										  	<?php
												  foreach ($Licencias  as $Licencia) 
											{
													 if ($Licencia->IdLicencia == $data[0]->IdLicenciaFK)
													  {
												?>
															<option selected value="<?php echo $Licencia->IdLicencia ?>"><?php echo $Licencia->IdLicencia?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $Licencia->IdLicencia ?>"><?php echo $Licencia->TipoProgramaLicencia?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>


                <li>
                    Servicio
                    <select id="IdServicioFK" name="IdServicioFK" class="select-css" required>
										 <option value="">Seleccione Tipo de Cargo</option>
										  	<?php
												  foreach ($Servicios  as $Servicio) 
											{
													 if ($Servicio->IdServicio == $data[0]->IdServicioFK)
													  {
												?>
															<option selected value="<?php echo $Servicio->IdServicio ?>"><?php echo $Servicio->IdServicio?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $Servicio->IdServicio ?>"><?php echo $Servicio->MantenimientoServicio?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>


                <li>
                    Fecha Incidencia
                    <select id="IdIncidenciaFK" name="IdIncidenciaFK" class="select-css" required>
										 <option value="">Seleccione Tipo de Cargo</option>
										  	<?php
												  foreach ($Incidencias  as $Incidencia) 
											{
													 if ($Incidencia->IdIncidencia == $data[0]->IdIncidenciaFK)
													  {
												?>
															<option selected value="<?php echo $Incidencia->IdIncidencia ?>"><?php echo $Incidencia->IdIncidencia?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $Incidencia->IdIncidencia ?>"><?php echo $Incidencia->FechaRecibido?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>


                <li>
                    Usuario
                    <select id="IdUsuarioFK" name="IdUsuarioFK" class="select-css" required>
										 <option value="">Seleccione Tipo de Cargo</option>
										  	<?php
												  foreach ($Usuarios  as $Usuario) 
											{
													 if ($Usuario->IdUsuario == $data[0]->IdUsuarioFK)
													  {
												?>
															<option selected value="<?php echo $Usuario->IdUsuario ?>"><?php echo $Usuario->IdUsuario?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $Usuario->IdUsuario ?>"><?php echo $Usuario->NombreUsuario?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>


                <li>
                    Estado
                    <select id="IdEstadoFK" name="IdEstadoFK" class="select-css" required>
										 <option value="">Seleccione Tipo de Cargo</option>
										  	<?php
												  foreach ($Estados  as $Estado) 
											{
													 if ($Estado->IdEstado == $data[0]->IdEstadoFK)
													  {
												?>
															<option selected value="<?php echo $Estado->IdEstado ?>"><?php echo $Estado->IdEstado?></option>
												<?php
													  } else {
												?>
										 						<option  value="<?php echo $Estado->IdEstado ?>"><?php echo $Estado->NombreEstado?></option>			
												<?php
															 }
											}
												?>
									 </select>
                </li>
       
            </ul>
          </div>
        </div>

      <!-- -------------------------------------------------------- -->


      

        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        
        </form>
       
      
        <input type="checkbox" id="myCheck">
  
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
      <button id="bnt"  onclick="check()">Acepto terminos y envio</button>
      <button  onclick="uncheck()">Dejar Vacio</button>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Enviar</a></div>

<!-- End Wrapper -->

</body>

</html>
