<?php
require 'models/Incidencia.php';
require 'models/Usuario.php';
require 'models/ConsTec.php';
require 'models/ConsUser.php'; 





class IncidenciaController
{
    private $model;
    private $usuario;
    private $ConsTec;
    private $ConsUser;
    
    

    public function __construct()
    {
        $this->model      = new Incidencia;
        $this->usuario      = new Usuario;
        $this->ConsTecs      = new ConsTec;
        $this->ConsUser      = new ConsUser;
        
    }

    public function index(){

        $Incidencias   = $this->model->getAll();
        $Usuarios      = $this->usuario->getAll();
        $ConsTecs      = $this->ConsTecs->getAll();
        $ConsUsers      = $this->ConsUser->getAll();
        
        
        require 'views/layout.php';
        require 'views/Incidencias/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newIncidencia($_REQUEST);
        header("Location: ?controller=Incidencia");
    }


    public function edit(){

			
		if (isset($_REQUEST['IdIncidencia'])) {
			$id = $_REQUEST['IdIncidencia'];
			$data = $this->model->getIncidenciaById($id);
      
            
			require 'views/layout.php';
			require 'views/Incidencias/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editIncidencia($_POST);
		header("Location: ?controller=Incidencia");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteIncidencia($_REQUEST);
		header("Location: ?controller=Incidencia");	
	}


}