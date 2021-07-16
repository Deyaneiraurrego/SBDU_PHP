<?php
require 'models/Servicio.php';





class ServicioController
{
    private $model;
    
    

    public function __construct()
    {
        $this->model      = new Servicio;
             
    }

    public function index(){

        $Servicios   = $this->model->getAll();
        
        
        require 'views/layout.php';
        require 'views/Servicios/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newServicio($_REQUEST);
        header("Location: ?controller=servicio");
    }

    public function edit(){

			
		if (isset($_REQUEST['IdServicio'])) {
			$id = $_REQUEST['IdServicio'];
			$data = $this->model->getServicioById($id);
            
			require 'views/layout.php';
			require 'views/Servicios/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editServicio($_POST);
		header("Location: ?controller=servicio");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteServicio($_REQUEST);
		header("Location: ?controller=servicio");	
	}


}