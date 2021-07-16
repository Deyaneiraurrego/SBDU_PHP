<?php
require 'models/Equipo.php';
require 'models/EntradaSalida.php';
require 'models/Red.php';
require 'models/Licencia.php';
require 'models/Servicio.php';
require 'models/Incidencia.php';

require 'models/Estado.php';
require 'models/ConsUser.php';


class EquipoController
{
    private $model;
    private $EntradaSalida;
    private $Red;
    private $Licencia;
    private $Servicio;
    private $Incidencia;
    private $Usuario;
    private $Estado;
   
    
  
    public function __construct()
    {
        $this->model              = new Equipo;
        $this->EntradaSalida      = new EntradaSalida;
        $this->Red                = new Red;
        $this->Licencia           = new Licencia;
        $this->Servicio           = new Servicio;
        $this->Incidencia         = new Incidencia;
        $this->Usuario            = new ConsUser;
        $this->Estado             = new Estado;
        
        
    }

    public function index(){

        $Equipos          = $this->model->getAll();
        $EntradaSalidas   = $this->EntradaSalida->getAll();
        $Redes            = $this->Red->getAll();
        $Licencias        = $this->Licencia->getAll();
        $Servicios        = $this->Servicio->getAll();
        $Incidencias      = $this->Incidencia->getAll();
        $Usuarios         = $this->Usuario->getAll();
        $Estados          = $this->Estado->getAll();
        
        require 'views/layout.php';
        require 'views/Equipos/list.php';
    }

    public function new(){

        $Equipos          = $this->model->getAll();
        $EntradaSalidas   = $this->EntradaSalida->getAll();
        $Redes            = $this->Red->getAll();
        $Licencias        = $this->Licencia->getAll();
        $Servicios        = $this->Servicio->getAll();
        $Incidencias      = $this->Incidencia->getAll();
        $Usuarios         = $this->Usuario->getAll();
        $Estados          = $this->Estado->getAll();
        require 'hojav/index.php';
        
        
    }

    public function save(){
        $this->model->newEquipo($_REQUEST);
        header("Location: ?controller=Equipo");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdEquipo'])) {
			$id = $_REQUEST['IdEquipo'];
			$data = $this->model->getEquipoById($id);
        
                 
			require 'views/layout.php';
			require 'views/Equipos/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
        
        $this->model->editEquipo($_POST);
        header("Location: ?controller=Equipo");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteEquipo($_REQUEST);
		header("Location: ?controller=Equipo");	
	}


}