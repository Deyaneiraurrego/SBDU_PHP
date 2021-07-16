<?php
require 'Models/Usuario.php';
require 'Models/Cargo.php';
require 'Models/Estado.php';


class UsuarioController
{
    private $model;
    private $cargo;
    private $estado;
    
    

    public function __construct()
    {
        $this->model      = new Usuario;
        $this->estado     = new Estado;
        $this->cargo      = new Cargo;
             
    }

    public function index(){

        $Usuarios   = $this->model->getAll();
        $Cargos   = $this->cargo->getAll();
         $Estados   = $this->estado->getAll();
       
        
        require 'views/layout.php';
        require 'views/Usuarios/list.php';
    }

    public function new(){

        require 'hojav/index.php';
        
    }

    public function save(){
        $this->model->newUsuario($_REQUEST);
        header("Location: ?controller=usuario");
    }

    public function edit(){

			
		if (isset($_REQUEST['IdUsuario'])) {
			$id = $_REQUEST['IdUsuario'];
			$data = $this->model->getUsuarioById($id);
         
			require 'views/layout.php';
			require 'views/Usuarios/edit.php';
		} else {
			echo "Error";
		}
							
    }
    
    public function update(){
	
		if (isset($_POST)) {
		$this->model->editUsuario($_POST);
		header("Location: ?controller=usuario");
		} else {
			echo "Error";
		}
		
    }
    
    public function delete(){
			
		$this->model->deleteUsuario($_REQUEST);
		header("Location: ?controller=usuario");	
	}


}